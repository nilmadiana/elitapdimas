<?php

namespace App\Http\Controllers;

use App\Models\ProposalCommentx;
use App\Models\Proposalx;
use App\Models\Tema;
use Illuminate\Http\Request;

class ProposalxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proposalsx = Proposalx::with('tema', 'nominalx')
            ->orderBy('created_at', 'desc')->get();

        $totalProposalx = Proposalx::count();

        $totalPublishx = Proposalx::where('status', 'Publish')->count();

        $rejectedStatusesx = ['Reject Reviewer', 'Reject Editor', 'Rejected'];
        $totalRejectedx = Proposalx::whereIn('status', $rejectedStatusesx)->count();

        $prosesStatusesx = ['Submit', 'Accept Reviewer', 'Accept Editor'];
        $totalProsesx = Proposalx::whereIn('status', $prosesStatusesx)->count();

        return view('peneliti.proposal.proposalx', compact('proposalsx', 'totalProposalx', 'totalPublishx', 'totalRejectedx', 'totalProsesx'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $temas = Tema::all();
        return view('peneliti.proposal.tambahproposalx', compact('temas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tema_id' => 'required|exists:temas,id',
            'judul' => 'required|string',
            'keyword' => 'required|string',
            'abstract' => 'required|string',
            'referensi' => 'required|string',
            'file_pdf' => 'required|mimes:pdf|max:2048',
            'contributors' => 'required|array|min:1',
            'contributors.*.nama_depan' => 'required|string',
            'contributors.*.nama_belakang' => 'required|string',
            'contributors.*.email' => 'required|email',
            'contributors.*.nidn' => 'nullable|string',
            'contributors.*.prodi' => 'required|string',
            'contributors.*.google_scholar' => 'nullable|url',
            'contributors.*.role' => 'required|string',
            'comment' => 'nullable|string',
        ]);

        if ($request->hasFile('file_pdf')) {
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('pdf_proposal', $filename, 'public');
            $validated['file_pdf'] = $path;
        }

        $validated['status'] = 'Incomplete';

        $proposalx = Proposalx::create($validated);

        foreach ($request->contributors as $contribx) {
            $proposalx->contributorsx()->create($contribx);
        }

        return redirect()->route('proposalx.index')->with('success', 'Proposal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $proposalx = Proposalx::with('contributorsx')->findOrFail($id);
        return view('peneliti.proposal.detail.detailproposalx', compact('proposalx'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proposalx $proposalsx)
    {
        $temas = Tema::all();
        return view('peneliti.proposal.editproposalx', compact('proposalsx', 'temas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proposalx $proposalx)
    {
        $validated = $request->validate([
            'judul' => 'sometimes|required|string',
            'keyword' => 'sometimes|required|string',
            'abstract' => 'sometimes|required|string',
            'referensi' => 'nullable|string',
            'file_pdf' => 'nullable|mimes:pdf|max:2048',
            'comment' => 'nullable|string',
        ]);

        if ($request->hasFile('file_pdf')) {
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('pdf_proposal', $filename, 'public');
            $validated['file_pdf'] = $path;
        }

        $proposalx->update($validated);

        if ($request->has('contributors')) {
            $contributors = $request->validate([
                'contributors' => 'required|array|min:1',
                'contributors.*.nama_depan' => 'sometimes|required|string',
                'contributors.*.nama_belakang' => 'sometimes|required|string',
                'contributors.*.email' => 'sometimes|required|string',
                'contributors.*.nidn' => 'sometimes|nullable|string',
                'contributors.*.prodi' => 'sometimes|required|string',
                'contributors.*.google_scholar' => 'sometimes|nullable|string',
                'contributors.*.role' => 'sometimes|required|string',
            ]);

            $proposalx->contributorsx()->delete();
            
            foreach ($request->contributors as $contribx) {
                $proposalx->contributorsx()->create($contribx);
            }
        }
        return redirect()->route('proposalx.index')->with('success', 'Proposal berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proposalx $proposalx)
    {
        //
    }

    public function nominal(Proposalx $proposalx)
    {
        return view('peneliti.proposal.nominalx', compact('proposalx'));
    }

    public function submit($id)
    {
        $proposalx = Proposalx::findOrFail($id);

        if ($proposalx->status == 'Incomplete') {
            $proposalx->status = 'Submit';
            $proposalx->save();
        }

        return redirect()->back()->with('success', 'Proposal berhasil di submit');
    }

    public function updateReview(Request $request, $id)
    {
        $proposalx = Proposalx::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:Incomplete,Submit,Accept Reviewer,Reject Reviewer,Accept Editor,Reject Editor,Publish,Rejected',
            'review_file' => 'nullable|mimes:pdf|max:2048',
            'comment' => 'nullable|string'
        ]);

        $proposalx->status = $validated['status'];
        $proposalx->save();

        $comment = new ProposalCommentx();
        $comment->proposal_id = $proposalx->id;
        $comment->user_id = auth()->id();
        $comment->role = json_encode(auth()->user()->role);
        $comment->comment = $request->input('comment');

        if ($request->hasFile('review_file')) {
            $filePath = $request->file('review_file')->store('proposal_review', 'public');
            $comment->file_path = $filePath;
        }

        $comment->save();

        return back()->with('success', 'Review berhasil ditambahkan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\ProposalComment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proposals = Proposal::with('nominal')
            ->orderBy('created_at', 'desc')->get();

        $totalProposal = Proposal::count();

        $totalPublish = Proposal::where('status', 'Publish')->count();

        $rejectedStatuses = ['Reject Reviewer', 'Reject Editor', 'Rejected'];
        $totalRejected = Proposal::whereIn('status', $rejectedStatuses)->count();

        $prosesStatuses = ['Submit', 'Accept Reviewer', 'Accept Editor'];
        $totalProses = Proposal::whereIn('status', $prosesStatuses)->count();

        return view('peneliti.proposal.proposal', compact('proposals', 'totalProposal', 'totalPublish', 'totalRejected', 'totalProses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($nominal_id)
    {
        return view('peneliti.proposal.tambahproposal', compact('nominal_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'keyword' => 'required|string',
            'abstract' => 'required|string',
            'referensi' => 'nullable|string',
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
            'nominal_id' => 'required|exists:nominals,id',
        ]);

        if ($request->hasFile('file_pdf')) {
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('pdf_proposal', $filename, 'public');
            $validated['file_pdf'] = $path;
        }

        $validated['status'] = 'Incomplete';

        $proposal = Proposal::create($validated);

        foreach ($request->contributors as $contrib) {
            $proposal->contributors()->create($contrib);
        }

        return redirect()->route('proposal.index')->with('success', 'Proposal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $proposal = Proposal::findOrFail($id);
        $proposalComments = DB::table('proposal_comments')
            ->where('proposal_id', $id)
            ->join('users', 'proposal_comments.user_id', '=', 'users.id')
            ->select('proposal_comments.*', 'users.username')
            ->orderBy('proposal_comments.created_at', 'desc')
            ->get();

        return view('peneliti.proposal.detail.detailproposal', compact('proposal', 'proposalComments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proposal = Proposal::with('contributors')->findOrFail($id);
        return view('peneliti.proposal.editproposal', compact('proposal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $proposal = Proposal::findOrFail($id);

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

        $proposal->update($validated);

        if ($request->has('contributors')) {
            $request->validate([
                'contributors' => 'required|array|min:1',
                'contributors.*.nama_depan' => 'sometimes|required|string',
                'contributors.*.nama_belakang' => 'sometimes|required|string',
                'contributors.*.email' => 'sometimes|required|string',
                'contributors.*.nidn' => 'sometimes|nullable|string',
                'contributors.*.prodi' => 'sometimes|required|string',
                'contributors.*.google_scholar' => 'sometimes|nullable|string',
                'contributors.*.role' => 'sometimes|required|string',
            ]);

            $proposal->contributors()->delete();
            foreach ($request->contributors as $contrib) {
                $proposal->contributors()->create($contrib);
            }
        }

        return redirect()->route('proposal.index')->with('success', 'Proposal berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proposal $proposal)
    {
        //
    }

    public function submit($id)
    {
        $proposal = Proposal::findOrFail($id);

        if ($proposal->status === 'Incomplete') {
            $proposal->status = 'Submit';
            $proposal->save();
        }

        return redirect()->back()->with('success', 'Proposal berhasil di submit');
    }

    public function storeComment(Request $request, $id)
    {
       $proposal = Proposal::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:Incomplete,Submit,Accept Reviewer,Reject Reviewer,Accept Editor,Reject Editor,Publish,Rejected',
            'review_file' => 'nullable|mimes:pdf|max:2048',
            'comment' => 'nullable|string'
        ]);

        $proposal->status = $validated['status'];
        $proposal->save();

        $comment = new ProposalComment();
        $comment->proposal_id = $proposal->id;
        $comment->user_id = auth()->id();
        $comment->role = json_encode(auth()->user()->role);
        $comment->comment = $request->input('comment');

        if ($request->hasFile('review_file')) {
            $filePath = $request->file('review_file')->store('proposal_review', 'public');
            $comment->file_path = $filePath;
        }

        $comment->save();

        return back()->with('success', 'Review berhasil disimpan!');
    }
}

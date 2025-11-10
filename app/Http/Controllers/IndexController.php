<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Proposalx;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proposals = Proposal::where('status', 'Publish')
            ->get()
            ->map(function ($item) {
                $item->source = 'proposal';
                return $item;
            });

        $proposalsx = Proposalx::where('status', 'Publish')
            ->get()
            ->map(function ($item) {
                $item->source = 'proposalx';
                return $item;
            });

        // Gabung datanya
        $allData = $proposals->concat($proposalsx);

        $pengajuan = Proposal::where('status', 'submit')->count()
            + Proposalx::where('status', 'submit')->count();

        // Hitung untuk Review oleh Reviewer (status: accept reviewer)
        $review = Proposal::where('status', 'accept reviewer')->count()
            + Proposalx::where('status', 'accept reviewer')->count();

        // Hitung untuk Revisi (status: reject reviewer atau reject editor)
        $revisi = Proposal::whereIn('status', ['reject reviewer', 'reject editor'])->count()
            + Proposalx::whereIn('status', ['reject reviewer', 'reject editor'])->count();

        // Hitung untuk ACC (status: accept editor)
        $acc = Proposal::where('status', 'accept editor')->count()
            + Proposalx::where('status', 'accept editor')->count();

        // Hitung untuk Publish (status: publish)
        $publish = Proposal::where('status', 'publish')->count()
            + Proposalx::where('status', 'publish')->count();

        $proposals = Proposal::with('nominal.pembiayaan.tema')->get();

        return view('index', compact('allData', 'pengajuan', 'review', 'revisi', 'acc', 'publish', 'proposals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function viewJurnal($id)
    {
        $proposal = Proposal::find($id);

        if ($proposal) {
            return view('peneliti.proposal.detail.detailproposal', compact('proposal'));
        }

        $proposalx = Proposalx::find($id);

        if ($proposalx) {
            return view('peneliti.proposal.detail.detailproposalx', compact('proposalx'));
        }

        abort(404, 'Data tidak ditemukan');
    }
}

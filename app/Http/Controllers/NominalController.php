<?php

namespace App\Http\Controllers;

use App\Models\Nominal;
use App\Models\Pembiayaan;
use Illuminate\Http\Request;

class NominalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $pembiayaan = Pembiayaan::findOrFail($id);

        return view('peneliti.proposal.nominal', compact('pembiayaan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'pembiayaan_id' => 'nullable|exists:pembiayaans,id',
            'total_nominal' => 'required|numeric',
            'nominal_awal' => 'required|numeric',
            'nominal_akhir' => 'required|numeric',
            'status' => 'nullable|in:Belum Cair,Sebagian Cair,Sudah Cair',
            'komentar' => 'nullable|string',
        ]);

        $nominal = Nominal::create([
            'pembiayaan_id' => $id,
            'total_nominal' => $request->total_nominal,
            'nominal_awal' => $request->nominal_awal,
            'nominal_akhir' => $request->nominal_akhir,
            'status' => $request->status ?? 'Belum Cair',
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('proposal.create', ['nominal_id' => $nominal->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nominal $nominal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nominal $nominal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nominal $nominal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nominal $nominal)
    {
        //
    }
}

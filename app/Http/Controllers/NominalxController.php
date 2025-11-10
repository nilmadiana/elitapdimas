<?php

namespace App\Http\Controllers;

use App\Models\Nominalx;
use App\Models\Proposalx;
use App\Models\Tema;
use App\Models\Sumber;
use App\Models\Jenis;
use Illuminate\Http\Request;

class NominalxController extends Controller
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
    public function create($proposal_id)
    {
        $proposalx = Proposalx::findOrFail($proposal_id);
        $sumbers = Sumber::all();
        $jenisPenelitians = Jenis::all();

        return view('peneliti.proposal.nominalx', compact('proposalx', 'sumbers', 'jenisPenelitians'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'proposal_id' => 'required|exists:proposalsx,id',
            'sumber_id' => 'required|exists:sumbers,id',
            'jenis_penelitian_id' => 'required|exists:jenis_penelitians,id',
            'nominal' => 'required|string',
            'status' => 'required|in:Proses Pencairan,Pencairan Selesai',
            'komentar' => 'nullable|string',
        ]);

        Nominalx::create($request->all());

        return redirect()->route('proposalx.index')->with('success', 'Nominal terlah disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nominalx $nominalx)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nominalx $nominalx)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nominalx $nominalx)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nominalx $nominalx)
    {
        //
    }
}

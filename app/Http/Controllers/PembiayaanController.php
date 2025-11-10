<?php

namespace App\Http\Controllers;

use App\Models\Pembiayaan;
use App\Models\Tema;
use App\Models\Jenis;
use App\Models\Sumber;
use Illuminate\Http\Request;

class PembiayaanController extends Controller
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
    public function create()
    {
        $temas = Tema::all();
        $jenis = Jenis::all();
        $sumbers = Sumber::all();

        return view('peneliti.proposal.pembiayaan', compact('temas', 'jenis', 'sumbers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tema_id' => 'required|exists:temas,id',
            'jenis_penelitian_id' => 'required|exists:jenis_penelitians,id',
            'sumber_id' => 'required|exists:sumbers,id',
        ]);

        $pembiayaan = Pembiayaan::create([
            'tema_id' => $request->tema_id,
            'jenis_penelitian_id' => $request->jenis_penelitian_id,
            'sumber_id' => $request->sumber_id,
        ]);

        return redirect()->route('pembiayaan.nominal.create', $pembiayaan->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembiayaan $pembiayaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembiayaan $pembiayaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembiayaan $pembiayaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembiayaan $pembiayaan)
    {
        //
    }
}

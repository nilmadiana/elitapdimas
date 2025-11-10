<?php

namespace App\Http\Controllers;

use App\Models\Sumber;
use Illuminate\Http\Request;

class SumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sumbers = Sumber::all();
        return view('peneliti.proposal.sumberdana', compact('sumbers'));
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
        $request->validate([
            'nama_sumber' => 'required|string',
        ]);

        Sumber::create([
            'nama_sumber' => $request->nama_sumber,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sumber $sumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sumber $sumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sumber $sumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sumber $sumber)
    {
        //
    }
}

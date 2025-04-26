<?php

namespace App\Http\Controllers;

use App\Models\rental;
use Illuminate\Http\Request;

class form extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form.sewa');
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
            'nama' => 'required',
            'phone_number' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'mobil' => 'required'
        ]);

        $data = rental::create([
            'nama' => $request->nama,
            'phone_number' => $request->phone_number,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'mobil' => $request->mobil
        ]);
        
        if ($data) {
            return redirect()->back()->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->back()->with('error', 'Data gagal disimpan');
        } 
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
}
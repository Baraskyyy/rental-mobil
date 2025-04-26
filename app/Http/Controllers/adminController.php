<?php

namespace App\Http\Controllers;

use App\Models\data_mobil;
use App\Models\rental;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        
        return view('admin.dashboard');
    }

    public function tambah_data()
    {
        return view('data.tambah-data');
    }

    public function data()
    {
        $data = data_mobil::all();
        // $data_mobil = data_mobil::all();
        return view('admin.data',compact('data'));
    
    }
    public function pesanan()
    {
        // $data = rental::all();
        return view('admin.pesanan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga_tanpa_sopir' => 'required',
            'harga_dengan_sopir' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = data_mobil::create([
            'nama' => $request->nama,
            'harga_tanpa_sopir' => $request->harga_tanpa_sopir,
            'harga_dengan_sopir' => $request->harga_dengan_sopir        ,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file('gambar')->store('images', 'public'),
        ]);
        
        if ($data) {
            return redirect()->back()->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->back()->with('error', 'Data gagal disimpan');
        } 
    }   
}
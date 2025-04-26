<?php

namespace App\Http\Controllers;

use App\Models\data_mobil;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $data = data_mobil::all();
        return view('home.home', compact('data'));
    }

    public function detail($uuid)
{
    // Menemukan data berdasarkan UUID
    $data = data_mobil::where('uuid', $uuid)->firstOrFail();

    // Mengembalikan view dengan data mobil
    return view('home.detail', compact('data'));
}


    public function mobil()
    {
        return view('home.mobil');
    }
    
}
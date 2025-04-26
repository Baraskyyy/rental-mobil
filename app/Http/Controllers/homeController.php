<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function detail()
    {
        return view('home.detail');
    }

    public function mobil()
    {
        return view('home.mobil');
    }
    
}
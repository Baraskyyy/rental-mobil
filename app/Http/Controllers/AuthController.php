<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function halaman_login()
    {
        return view('auth.login');
    }
}
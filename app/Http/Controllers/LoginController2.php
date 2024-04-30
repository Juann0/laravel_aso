<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController2 extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}

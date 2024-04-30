<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = DB::table('usuarios')->where('email', auth()->user()->email)->first();
        return view('app.home', ['img' => $data->imagen]);
    }
}

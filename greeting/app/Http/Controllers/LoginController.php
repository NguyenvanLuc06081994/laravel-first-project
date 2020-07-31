<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function login(Request $request)
    {
        if ($request->name == 'admin'){
            return view('welcome');
        }
        return view('error');
    }
}

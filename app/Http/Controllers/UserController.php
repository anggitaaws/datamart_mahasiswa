<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login()
    {
        return view('login');
    }

    function doLogin(Request $request)
    {
        $data = [
            'email'=> $request->input('email'),
            'password'=> $request->input('password')
        ];

        if (Auth::attempt($data)){
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Username atau Password salah'])->withInput();
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

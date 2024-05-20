<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show(){
        return view('loginshow');
    }

    public function login()
    {
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();

        if(auth()->attempt(request()->only(['email', 'password']))) {
            return redirect('/admin/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'email invalido']);
    }
}

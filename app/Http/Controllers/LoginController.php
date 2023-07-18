<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $validatedData = $request->validate([
            "email" => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed');
    }
}
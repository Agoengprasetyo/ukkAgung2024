<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData)->all();

        return redirect('/');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $item = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($item)) {
            return redirect('/home')->withSuccess('Login Berhasil');
        }

        return back()->withError('Email atau Password anda salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

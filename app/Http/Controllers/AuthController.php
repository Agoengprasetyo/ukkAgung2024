<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $request['password'] = bcrypt($request['password']);
        AuthUser::create($request->all());
        $user = $request->only('email', 'password');
        return redirect('/login')->withSuccess('Login Berhasil');
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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('layout.Login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);
            
        $kredensil = $request->only('username', 'password');

        if (Auth::attempt($kredensil)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('/dashboard');
            } elseif ($user->level == 'mahasiswa') {
                return redirect()->intended('/awal');
            }
            return redirect()->intended('/')->with('error', "Anda tidak punya akses!");
        }

        return redirect()->intended('/')->with('error', "Kredensial Salah!");
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}

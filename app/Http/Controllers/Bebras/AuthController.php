<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Membuat cookies
            Cookie::queue('google_id', $user->google_id, 60); // expired dalam 60 menit
            Cookie::queue('name', $user->name, 60);

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Menghapus cookies
        $cookie = Cookie::forget('google_id');
        $cookie = Cookie::forget('name');

        return redirect('/')->withCookie($cookie);
    }

    public function showDashboard(Request $request)
    {
        $googleId = $request->cookie('google_id');
        $name = $request->cookie('name');

        return view('dashboard', compact('googleId', 'name'));
    }
}

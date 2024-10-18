<?php

namespace App\Http\Controllers\Bebras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $socialUser = Socialite::driver('google')->user();

        $registeredUser = User::where('google_id', $socialUser->id)->first();
        if (!$registeredUser) {
            $user = User::updateOrCreate([
                'google_id' => $socialUser->id,
            ], [
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => Hash::make('123'),
                'google_token' => $socialUser->token,
                'google_refresh_token' => $socialUser->refreshToken,
            ]);
            Auth::login($registeredUser);
            return redirect('/dashboard');

            // Menyimpan cookies setelah login
            Cookie::queue('google_id', $socialUser->id, 60); // Simpan selama 60 menit
            Cookie::queue('name', $socialUser->name, 60);
        }

        Auth::login($registeredUser);

        return redirect('/dashboard');
    }

    /**
     * Fungsi logout untuk menghapus session dan cookies.
     */
    public function logout(Request $request)
    {
        // Logout pengguna
        Auth::logout();

        // Menghapus cookies
        Cookie::queue(Cookie::forget('google_id'));
        Cookie::queue(Cookie::forget('name'));

        // Redirect ke halaman utama setelah logout
        return redirect('/')->with('message', 'Anda telah berhasil logout.');
    }

    /**
     * Menampilkan dashboard dan mengambil data dari cookies.
     */
    public function showDashboard(Request $request)
    {
        // Mengambil cookies
        $googleId = $request->cookie('google_id');
        $name = $request->cookie('name');

        // Jika tidak ada cookies, redirect ke halaman login
        if (!$googleId || !$name) {
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Menampilkan halaman dashboard dengan data dari cookies
        return view('dashboard', compact('googleId', 'name'));
    }

}

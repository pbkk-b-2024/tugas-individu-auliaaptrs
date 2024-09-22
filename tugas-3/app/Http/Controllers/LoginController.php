<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('pertemuan2.Auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        // Informasi login
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Proses login
        if (Auth::attempt($infoLogin)) {
            if (Auth::user()->status == 'admin') {
                return redirect('dashboard/admin');
            } elseif (Auth::user()->status == 'pengguna') {
                return redirect('dashboard/pengguna');
            }
        }

        // Jika gagal, kembalikan ke halaman login dengan pesan error
        return redirect()->route('login') // Menggunakan named route lebih aman
            ->withErrors('Username dan Password yang dimasukkan tidak sesuai')
            ->withInput();
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/'); // Redirect ke halaman utama setelah logout
    }
}

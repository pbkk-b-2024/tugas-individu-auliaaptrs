<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $status): Response
    {
        // Cek apakah pengguna sudah login dan perannya sesuai dengan role yang ditentukan
        if (Auth::check() && Auth::user()->status == $status) {
            // Jika pengguna sudah login dan perannya sesuai, lanjutkan ke middleware berikutnya
            return $next($request);
        } else {
            // Jika tidak sesuai, kembalikan respons JSON dengan pesan error
            return response()->json(["You don't have permission to access this page"]);
        }
    }
}

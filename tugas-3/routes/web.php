<?php

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});

    Route::middleware(['auth'])->group(function(){
        Route::get('/dashboard', [StatusController::class, 'index']);
        Route::get('/dashboard/admin', [StatusController::class, 'admin']); 
        Route::get('/dashboard/pengguna', [StatusController::class, 'pengguna']);  
        Route::prefix('/dashboard/admin/pertemuan2')->group(function(){
            Route::resource('/crud-buku', BukuController::class)->parameters(['crud-buku' => 'buku']);
            Route::resource('/crud-kategori', KategoriController::class)->parameters(['crud-kategori' => 'kategori']);
        });
        Route::prefix('/dashboard/pengguna/pertemuan2')->group(function(){
            Route::resource('/crud-Pengguna', PenggunaController::class)->parameters(['crud-Pengguna' => 'Pengguna']);
            Route::resource('/crud-role', RoleController::class)->parameters(['crud-role' => 'role']);
        });
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });

Route::fallback(function () {
    return redirect('/');
});
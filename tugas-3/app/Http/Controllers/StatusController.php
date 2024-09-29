<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function index(){
        echo "Halo, Selamat Datang";
        echo "<h1>".Auth::user()->name."</h1>";
        return view('layout.base');
    }
    public function admin(){
        echo "Halo, Selamat Datang admin";
        echo "<h1>".Auth::user()->name."</h1>";
        return view('layout.base');
    }
    public function pengguna(){
        echo "Halo, Selamat Datang pengguna";
        echo "<h1>".Auth::user()->name."</h1>";
        return view('layout.base');
    }


}

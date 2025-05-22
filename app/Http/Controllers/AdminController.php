<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('admin'); // Menampilkan halaman admin
    }
        function operator()
    {
        // echo 'hallo operator';
        // echo "<h1>Selamat datang " . Auth::user()->name . " di halaman operator</h1>"; // Menampilkan nama user dari database yang login
        // echo "<a href='/logout'>Logout</a>"; // Menampilkan link logout
        return view('admin'); // Menampilkan halaman admin
    }
        function keuangan()
    {
        return view('admin'); // Menampilkan halaman admin
    }
        function marketing()
    {
        return view('admin'); // Menampilkan halaman admin
    }
}
 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo 'hallo admin';
        echo "<h1>Selamat datang " . Auth::user()->name . " di halaman admin</h1>"; // Menampilkan nama user dari database yang login
        echo "<a href='/logout'>Logout</a>"; // Menampilkan link logout
    }
        function operator()
    {
        echo 'hallo operator';
        echo "<h1>Selamat datang " . Auth::user()->name . " di halaman operator</h1>"; // Menampilkan nama user dari database yang login
        echo "<a href='/logout'>Logout</a>"; // Menampilkan link logout
    }
        function keuangan()
    {
        echo 'hallo keuangan';
        echo "<h1>Selamat datang " . Auth::user()->name . " di halaman keuangan</h1>"; // Menampilkan nama user dari database yang login
        echo "<a href='/logout'>Logout</a>"; // Menampilkan link logout
    }
        function marketing()
    {
        echo 'hallo marketing';
        echo "<h1>Selamat datang " . Auth::user()->name . " di halaman marketing</h1>"; // Menampilkan nama user dari database yang login
        echo "<a href='/logout'>Logout</a>"; // Menampilkan link logout
    }
}
 
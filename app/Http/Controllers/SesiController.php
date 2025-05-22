<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    //Membuat fungsi index untuk menampilkan halaman index
    
    function index()

    {
       // echo 'hallo';
         return view('login');
    }

    function login(Request $request)
    {
        //Validasi inputan dari form login
      $request->validate([
              'email' => 'required',
              'password' => 'required'
          ],[
              'email.required' => 'Email tidak boleh kosong',
              'password.required' => 'Password tidak boleh kosong'
          ]);

        //Membuat Authentication benar atau nggaknya dan proses validasi database
      $infologin = [
              'email' => $request->email,
              'password' => $request->password  
          ];

        if (Auth::attempt($infologin)) {
            //Jika login berhasil, redirect ke halaman admin sesuai dengan role user
            if(Auth::user()->role == 'operator'){
                return redirect('/admin/operator'); //Redirect ke halaman operator
            } elseif(Auth::user()->role == 'keuangan'){
                return redirect('/admin/keuangan'); //Redirect ke halaman keuangan
            } elseif(Auth::user()->role == 'marketing'){
                return redirect('/admin/marketing'); //Redirect ke halaman marketing
            }
        } else {
            //Jika login gagal, redirect kembali ke halaman login dengan pesan error
            return redirect('')->withErrors('Username atau password tidak sesuai')->withInput(); //Sertakan inputan yang salah
        } 
    }

    //Membuat fungsi logout untuk mengeluarkan user dari sistem
    function logout()
    {
        Auth::logout(); //Logout
        return redirect('/'); //Redirect ke halaman login
    }
}

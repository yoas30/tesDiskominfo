<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

//buat middleware untuk mengarahkan ke halaman login jika belum login
//Akan mendirect ke halaman (/home) jika belum login
Route::middleware(['guest'])->group(function () {
    
        //Tampilkan halaman index
        //Middleware auth akan redirect user yang belum login ke route bernama login
        Route::get('/',[SesiController::class,'index'])->name('login'); //Buat method get untuk menampilkan halaman index

        //Tampilkan halaman login
        Route::post('/',[SesiController::class,'login']); //Buat method post untuk login
});

//ubah home route ke halaman admin
Route::get('/home', function () {
    return redirect('/admin'); //Redirect ke halaman index
});

Route::middleware(['auth'])->group(function () {
        //Hanya bisa diakses jika sudah login
        Route::get('/admin',[AdminController::class,'index']); //Buat method get untuk menampilkan halaman admin
        Route::get('/admin/operator',[AdminController::class,'operator']); //Buat method get untuk operator
        Route::get('/admin/keuangan',[AdminController::class,'keuangan']); //Buat method get untuk menampilkan halaman keuangan
        Route::get('/admin/marketing',[AdminController::class,'marketing']); //Buat method get untuk manampilkan halaman marketing
        Route::get('/logout',[SesiController::class,'logout']); //Buat method get untuk logout
});

 
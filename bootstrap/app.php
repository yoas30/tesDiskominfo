<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    //Tambahkan middleware userAkses untuk mengarahkan ke halaman login jika belum login
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            "userAkses" => App\Http\Middleware\UserAkses::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

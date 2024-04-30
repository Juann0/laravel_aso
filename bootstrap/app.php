<?php

use App\Http\Middleware\AccesoAdministrador;
use App\Http\Middleware\AccessRango;
use App\Http\Middleware\AdminAcceso;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('acceso-admin', [
            AccesoAdministrador::class
        ]);
        $middleware->appendToGroup('acceso-rango', [
            AccessRango::class
        ]);
        $middleware->appendToGroup('acceso-regular', [
            AdminAcceso::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

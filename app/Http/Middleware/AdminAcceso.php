<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAcceso
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $blockAccess = true;
        if (Auth::check() && auth()->user()->rol == 'REGULAR') {
            $blockAccess = false;
        } 

        if (Auth::check() && auth()->user()->rol == 'ADM') {
            $blockAccess = false;
            return redirect('/home');

        }
        if ($blockAccess) {
            return redirect('/login');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {

        // Periksa apakah pengguna memiliki role admin
        if ($request->user() && $request->user()->hasRole('Mahasiswa')) {
            return $next($request);
        }

        // Jika tidak memiliki role admin, redirect atau lakukan tindakan lain
        return redirect('/login')->with('error', 'Unauthorized');
    }
}

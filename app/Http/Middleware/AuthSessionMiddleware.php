<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthSessionMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se o usuário está na sessão
        if (!$request->session()->has('user')) {
            return redirect()->route('login.show')->with('error', 'Por favor, faça login para acessar.');
        }

        return $next($request);
    }
}
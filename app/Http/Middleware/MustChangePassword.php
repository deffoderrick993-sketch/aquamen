<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustChangePassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->must_change_password) {
            if (!$request->routeIs('force_change_password') && !$request->routeIs('update_forced_password') && !$request->routeIs('logout')) {
                return redirect()->route('force_change_password')
                    ->with('warning', 'Pour des raisons de sécurité, vous devez obligatoirement modifier votre mot de passe temporaire lors de votre première connexion.');
            }
        }

        return $next($request);
    }
}

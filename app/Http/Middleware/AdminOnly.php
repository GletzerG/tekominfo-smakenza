<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, \Closure $next, ...$roles)
{
    if (!auth()->check()) {
        abort(403);
    }

    if (!in_array(auth()->user()->role, $roles)) {
        abort(403, 'Tidak punya akses!');
    }

    return $next($request);
}

}

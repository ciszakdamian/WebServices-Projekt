<?php

namespace App\Http\Middleware;

use Closure;

class AuthorizationTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->header('Authorization') === 'Bearer '.env('API_BEARER_TOKEN')) {
            return $next($request);
        } else {
            abort(401);
        }
    }
}

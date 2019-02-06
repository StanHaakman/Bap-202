<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 1: GEBRUIKER OPHALEN
        // 2: ADMIN OP 1?
        // 3: ZO JA? GA NAAR $NEXT
        // ANDERS ACCES DENIED

        if ($user = $request->user()) {
            
            if ($user->is_admin === 1) {
                return $next($request);
            }            
        }
        
        abort(403);
    }
}

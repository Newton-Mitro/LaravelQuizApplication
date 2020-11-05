<?php

namespace App\Http\Middleware;

use Closure;

class ModeratorAuthCheck
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
        if ($request->user()->role_id > 5) {
            return redirect('/')->with('warning','You do not have succicient access.');
        }

        return $next($request);
    }
}

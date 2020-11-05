<?php

namespace App\Http\Middleware;

use Closure;

class EditorAuthCheck
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
        if ($request->user()->role_id > 4) {
            return redirect('/home')->with('warning','You do not have succicient access.');
        }

        return $next($request);
    }
}

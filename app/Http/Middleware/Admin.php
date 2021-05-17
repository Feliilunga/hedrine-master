<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        $user = $request->user();

        if(Auth::check() &&($user && $user->role_id == 1 || $user->role_id == 2 || $user->role_id == 3 || $user->role_id == 4 )){
            return $next($request);
        }

        return redirect()->route('home')->with('error','You have no admin access');
    }
}

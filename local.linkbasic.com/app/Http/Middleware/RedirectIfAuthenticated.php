<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        $user = Auth::user();

        
        if (Auth::guard($guard)->check()) {

            if ($user->is_admin == 1)                
                return redirect('admin/add');
            else

                return redirect('/');
        }
        return $next($request);
    }
}

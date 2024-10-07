<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /*public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()->user->user_type == 'candidat') {
                return redirect(route('auth.profile'));
            }else if (Auth::guard($guard)->check()->user->user_type == 'employer') {
                return redirect(route('auth.createJob'));
            }
        }

        return $next($request);
    }*/

    public function handle(Request $request, Closure $next, string ...$guards): Response
{
    $guards = empty($guards) ? [null] : $guards;

    foreach ($guards as $guard) {
        if (Auth::guard($guard)->check()) {
            $user = Auth::guard($guard)->user();

            if ($user->user_type == 'candidat') {
                return redirect()->route('auth.profile');
            } elseif ($user->user_type == 'employer') {
                return redirect()->route('auth.createJob');
            }
        }
    }

    return $next($request);
}

}

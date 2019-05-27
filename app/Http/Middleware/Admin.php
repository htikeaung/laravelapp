<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        if(Auth::check()){

            if(Auth::user()->isAdmin()){

                return $next($request);

            }

        }

        Session::flash('restricted_user', 'You have no permission to access admin area! Please contact your administrator.');

        return redirect('/');

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class cekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,...$levels)
    {
        if (in_array($request->user()->id_role,$levels)) {
            return $next($request);
        }

        if (Auth::user()->id_role == 1) {
            return Redirect::to('tampilanAdmin');
        }elseif (Auth::user()->id_role == 2) {
            return Redirect::to('dashboard');
        }
        abort(401);
    }
}

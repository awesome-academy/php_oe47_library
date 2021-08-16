<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Illuminate\Http\Request;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Get data from Session, not return default in config
        if (\Session::has('locale')) {
            \App::setlocale(\Session::get('locale'));
        }

        return $next($request);
    }
}

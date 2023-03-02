<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAgeMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        // dd($request->age);

        if ($request->age < 18) {
            return redirect('/')->with('error', 'Sorry, you must be at least 18 years old to access this page.');
            // dd('Redirecting to age-form');
        }

        return $next($request);
    }
}

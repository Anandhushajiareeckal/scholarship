<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has the "admin" role
        if(auth()->check() && auth()->user()->usertype == 'admin') {
            return $next($request);
        }

        // Redirect or perform any other action if the user doesn't have the "admin" role
        return redirect('/login'); // Change the URL to the desired redirection path
    }
}

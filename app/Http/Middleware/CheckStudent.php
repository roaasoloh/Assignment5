<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class CheckStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If the user is not authenticated, redirect to login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // If the user is authenticated, check the graduate status
        $student = Auth::user();

        // If the student is not a graduate, redirect to /not-graduate
        if (!$student->is_graduate) {
            return redirect('/not-graduate');
        }

        // Allow the request to proceed if the user is a graduate
        return $next($request);
    }
}

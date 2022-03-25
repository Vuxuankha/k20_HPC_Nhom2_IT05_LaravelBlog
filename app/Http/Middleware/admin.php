<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request ->input('sinhviem'=='admin1')) {
            return redirect('index');
        }
        elseif ($request ->input('sinhviem'=='admin2')) {
            return redirect('login');
        }
        elseif ($request ->input('sinhviem'=='admin3')) {
            return redirect('password');
        }
        return $next($request);
    }
}

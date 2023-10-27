<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Methods', 'PUT, POST, DELETE, GET, OPTIONS');
        $response->header('Access-Control-Allow-Headers', 'Accept, Authorization, Content-Type');

        return $response;
    }
}
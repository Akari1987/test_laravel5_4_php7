<?php

namespace App\Http\Middleware;

use Closure;

class AmitavCors
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
        $domains = ['https://test-laravel5-4-php7-akariozora.c9users.io:8081'];
        
        if(isset($request->server()['HTTP_ORIGIN'])) {
            $origin = $request->server()['HTTP_ORIGIN'];
            if(in_array($origin, $domains)) {
                    header('Access-Contro;-Allow-Origin: ' . $origin);
                    header('Access-Control-Allow-Headers: Origin, COntent-Type, Authorization');
            }
        }
        return $next($request);
    }
}

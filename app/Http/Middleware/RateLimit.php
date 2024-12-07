<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class RateLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $key = 'contact_form_' . $request->ip();
        $limit = 5; // Количество попыток
        $time = 60; // Время в секундах

        if (Cache::has($key) && Cache::get($key) >= $limit) {
            return response('Слишком много запросов. Пожалуйста, подождите.', 429);
        }

        Cache::put($key, Cache::get($key, 0) + 1, $time);

        return $next($request);
    }
}

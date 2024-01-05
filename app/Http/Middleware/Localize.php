<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Localize
{
    public function handle(Request $request, Closure $next): Response
    {
        if (str_starts_with($request->header("Accept-Language"), "pl")) {
            app()->setLocale("pl");
        }

        return $next($request);
    }
}

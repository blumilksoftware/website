<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelDefaultLanguage
{
    public function handle(Request $request, Closure $next): Response
    {
        app()->setLocale(config("app.dashboard_locale"));

        return $next($request);
    }
}

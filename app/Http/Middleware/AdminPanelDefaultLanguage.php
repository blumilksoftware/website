<?php

namespace Blumilk\Website\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminPanelDefaultLanguage
{
    public function handle(Request $request, Closure $next)
    {
        app()->setLocale(config("app.dashboard_locale"));

        return $next($request);
    }
}

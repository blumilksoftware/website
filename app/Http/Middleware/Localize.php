<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class Localize
{
    public function __construct(protected ResponseFactory $factory)
    {
    }

    public function handle(Request $request, Closure $next): Response
    {
        $uri = $request->getRequestUri();
        $parts = explode("/", $uri);

        if(isset($parts[1])) {
            if(empty($parts[1])) {
                if (str_starts_with($request->header("Accept-Language"), "pl")) {
                    app()->setLocale("pl");
                } else {
                    app()->setLocale("en");
                }
            } else {
                app()->setLocale(match($parts[1]) {
                    "pl" => "pl",
                    default => "en",
                });
            }
        }

        $this->factory->share("locale", app()->getLocale());

        return $next($request);
    }
}

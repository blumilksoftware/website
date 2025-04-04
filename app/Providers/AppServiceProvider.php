<?php

declare(strict_types=1);

namespace Blumilk\Website\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /** @var Request $request */
        $request = app("request");

        if ($request->getRequestUri() === "/" && str_starts_with($request->header("Accept-Language", default: ""), "pl")) {
            $request->setLocale("pl");
            app()->setLocale("pl");
        }
    }
}

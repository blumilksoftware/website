<?php

declare(strict_types=1);

use CodeZero\LocalizedRoutes\Controllers\FallbackController;
use CodeZero\LocalizedRoutes\Middleware\SetLocale;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function (): void {
            Route::localized(function (): void {
                Route::middleware("web")
                    ->group(base_path("routes/web.php"));
            });

            Route::fallback(FallbackController::class);
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->web(remove: [
            SubstituteBindings::class,
        ])->web(append: [
            SetLocale::class,
            SubstituteBindings::class,
        ])->redirectGuestsTo("admin");
    })
    ->withExceptions()
    ->create();

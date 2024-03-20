<?php

declare(strict_types=1);

use CodeZero\LocalizedRoutes\Controllers\FallbackController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function (): void {
            Route::middleware("web")
                ->prefix("dashboard")
                ->group(base_path("routes/dashboard.php"));

            Route::localized(function (): void {
                Route::middleware("web")
                    ->group(base_path("routes/web.php"));
            });

            Route::fallback(FallbackController::class);
        },
    )
    ->withMiddleware()
    ->withExceptions()
    ->create();

<?php

declare(strict_types=1);

namespace Blumilk\Website\Providers;

use Blumilk\Website\Http\Controllers\FallbackController;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = "/home";

    public function boot(): void
    {
        RateLimiter::for("api", fn(Request $request) => Limit::perMinute(60)->by($request->user()?->id ?: $request->ip()));

        $this->routes(function (): void {
            Route::middleware("api")
                ->prefix("api")
                ->group(base_path("routes/api.php"));

            Route::localized(function (): void {
                Route::middleware("web")
                    ->group(base_path("routes/web.php"));
            });

            Route::fallback(FallbackController::class);
        });
    }
}

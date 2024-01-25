<?php

declare(strict_types=1);

namespace Blumilk\Website\Http;

use Blumilk\Website\Http\Middleware\Authenticate;
use Blumilk\Website\Http\Middleware\RedirectIfAuthenticated;
use Blumilk\Website\Http\Middleware\TrimStrings;
use Blumilk\Website\Http\Middleware\TrustProxies;
use CodeZero\LocalizedRoutes\Middleware\SetLocale;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Auth\Middleware\RequirePassword;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Http\Middleware\SetCacheHeaders;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\ValidateSignature;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class Kernel extends HttpKernel
{
    protected $middleware = [
        TrustProxies::class,
        HandleCors::class,
        PreventRequestsDuringMaintenance::class,
        ValidatePostSize::class,
        TrimStrings::class,
        ConvertEmptyStringsToNull::class,
    ];
    protected $middlewareGroups = [
        "web" => [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SetLocale::class,
            SubstituteBindings::class,
        ],
        "api" => [
            ThrottleRequests::class . ":api",
            SubstituteBindings::class,
        ],
    ];
    protected $middlewareAliases = [
        "auth" => Authenticate::class,
        "auth.basic" => AuthenticateWithBasicAuth::class,
        "auth.session" => AuthenticateSession::class,
        "cache.headers" => SetCacheHeaders::class,
        "can" => Authorize::class,
        "guest" => RedirectIfAuthenticated::class,
        "password.confirm" => RequirePassword::class,
        "signed" => ValidateSignature::class,
        "throttle" => ThrottleRequests::class,
        "verified" => EnsureEmailIsVerified::class,
    ];
}

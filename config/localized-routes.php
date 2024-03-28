<?php

declare(strict_types=1);

use CodeZero\LocalizedRoutes\Middleware\Detectors\AppDetector;
use CodeZero\LocalizedRoutes\Middleware\Detectors\BrowserDetector;
use CodeZero\LocalizedRoutes\Middleware\Detectors\CookieDetector;
use CodeZero\LocalizedRoutes\Middleware\Detectors\OmittedLocaleDetector;
use CodeZero\LocalizedRoutes\Middleware\Detectors\RouteActionDetector;
use CodeZero\LocalizedRoutes\Middleware\Detectors\SessionDetector;
use CodeZero\LocalizedRoutes\Middleware\Detectors\UrlDetector;
use CodeZero\LocalizedRoutes\Middleware\Detectors\UserDetector;
use CodeZero\LocalizedRoutes\Middleware\Stores\AppStore;
use CodeZero\LocalizedRoutes\Middleware\Stores\CookieStore;
use CodeZero\LocalizedRoutes\Middleware\Stores\SessionStore;

return [
    "supported_locales" => ["en", "pl"],
    "fallback_locale" => "en",
    "omitted_locale" => null,
    "redirect_to_localized_urls" => true,
    "redirect_status_code" => 301,
    "404_view" => "errors.404",
    "route_action" => "locale",
    "user_attribute" => "locale",
    "session_key" => "locale",
    "cookie_name" => "locale",
    "cookie_minutes" => 60 * 24 * 365,
    "detectors" => [
        RouteActionDetector::class,
        UrlDetector::class,
        OmittedLocaleDetector::class,
        UserDetector::class,
        SessionDetector::class,
        CookieDetector::class,
        BrowserDetector::class,
        AppDetector::class,
    ],
    "trusted_detectors" => [
        RouteActionDetector::class,
    ],
    "stores" => [
        SessionStore::class,
        CookieStore::class,
        AppStore::class,
    ],
];

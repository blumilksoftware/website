<?php

declare(strict_types=1);

use Illuminate\Support\Str;

return [
    "default" => env("CACHE_STORE", "redis"),
    "stores" => [
        "array" => [
            "driver" => "array",
            "serialize" => false,
        ],
        "redis" => [
            "driver" => "redis",
            "connection" => env("REDIS_CACHE_CONNECTION", "cache"),
            "lock_connection" => env("REDIS_CACHE_LOCK_CONNECTION", "default"),
        ],
    ],
    "prefix" => env("CACHE_PREFIX", Str::slug(env("APP_NAME", "laravel"), "_") . "_cache_"),
];

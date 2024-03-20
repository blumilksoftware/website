<?php

declare(strict_types=1);

use Illuminate\Support\Str;

return [
    "default" => env("DB_CONNECTION", "pgsql"),
    "connections" => [
        "pgsql" => [
            "driver" => "pgsql",
            "url" => env("DB_URL"),
            "host" => env("DB_HOST", "127.0.0.1"),
            "port" => env("DB_PORT", "5432"),
            "database" => env("DB_DATABASE", "laravel"),
            "username" => env("DB_USERNAME", "root"),
            "password" => env("DB_PASSWORD", ""),
            "charset" => env("DB_CHARSET", "utf8"),
            "prefix" => "",
            "prefix_indexes" => true,
            "search_path" => "public",
            "sslmode" => "prefer",
        ],
    ],
    "migrations" => [
        "table" => "migrations",
        "update_date_on_publish" => true,
    ],
    "redis" => [
        "client" => env("REDIS_CLIENT", "phpredis"),
        "options" => [
            "cluster" => env("REDIS_CLUSTER", "redis"),
            "prefix" => env("REDIS_PREFIX", Str::slug(env("APP_NAME", "laravel"), "_") . "_database_"),
        ],
        "default" => [
            "url" => env("REDIS_URL"),
            "host" => env("REDIS_HOST", "127.0.0.1"),
            "username" => env("REDIS_USERNAME"),
            "password" => env("REDIS_PASSWORD"),
            "port" => env("REDIS_PORT", "6379"),
            "database" => env("REDIS_DB", "0"),
        ],
        "cache" => [
            "url" => env("REDIS_URL"),
            "host" => env("REDIS_HOST", "127.0.0.1"),
            "username" => env("REDIS_USERNAME"),
            "password" => env("REDIS_PASSWORD"),
            "port" => env("REDIS_PORT", "6379"),
            "database" => env("REDIS_CACHE_DB", "1"),
        ],
    ],
];

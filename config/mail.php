<?php

declare(strict_types=1);

return [
    "default" => env("MAIL_MAILER", "log"),
    "mailers" => [
        "smtp" => [
            "transport" => "smtp",
            "url" => env("MAIL_URL"),
            "host" => env("MAIL_HOST", "127.0.0.1"),
            "port" => env("MAIL_PORT", 2525),
            "encryption" => env("MAIL_ENCRYPTION", "tls"),
            "username" => env("MAIL_USERNAME"),
            "password" => env("MAIL_PASSWORD"),
            "timeout" => null,
            "local_domain" => env("MAIL_EHLO_DOMAIN"),
            "scheme" => env("MAIL_SCHEME", "smtp"),
        ],
        "log" => [
            "transport" => "log",
            "channel" => env("MAIL_LOG_CHANNEL"),
        ],
        "array" => [
            "transport" => "array",
        ],
        "failover" => [
            "transport" => "failover",
            "mailers" => [
                "smtp",
                "log",
            ],
        ],
    ],
    "from" => [
        "address" => env("MAIL_FROM_ADDRESS", "hello@example.com"),
        "name" => env("MAIL_FROM_NAME", "Example"),
    ],
];

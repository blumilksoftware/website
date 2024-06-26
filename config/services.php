<?php

declare(strict_types=1);

return [
    "slack" => [
        "notifications" => [
            "bot_user_oauth_token" => env("SLACK_BOT_USER_OAUTH_TOKEN"),
            "channel" => env("SLACK_BOT_USER_DEFAULT_CHANNEL"),
        ],
    ],
    "mapbox" => [
        "access_token" => env("MAPBOX_ACCESS_TOKEN"),
        "style" => env("MAPBOX_STYLE"),
    ],
];

<?php

declare(strict_types=1);

return [
    "default" => env("FILESYSTEM_DISK", "local"),
    "disks" => [
        "local" => [
            "driver" => "local",
            "root" => storage_path("app"),
            "throw" => false,
        ],
    ],
    "links" => [
        public_path("storage") => storage_path("app/public"),
    ],
];

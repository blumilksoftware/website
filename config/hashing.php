<?php

declare(strict_types=1);

return [
    "driver" => "argon",
    "bcrypt" => [
        "rounds" => env("BCRYPT_ROUNDS", 10),
    ],
    "argon" => [
        "memory" => 65536,
        "threads" => 1,
        "time" => 4,
    ],
];

<?php

declare(strict_types=1);

namespace Database\Seeders;

use Blumilk\Website\Enums\Role;
use Blumilk\Website\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    protected const string DEFAULT_PASSWORD = "password";

    public function run(): void
    {
        User::firstOrCreate(
            ["email" => "admin@example.com"],
            ["role" => Role::Admin,
                "name" => "Administrator",
                "email_verified_at" => now(),
                "password" => Hash::make(static::DEFAULT_PASSWORD),
                "remember_token" => Str::random(10),
                "active" => true,
            ],
        );

        User::firstOrCreate(
            ["email" => "moderator@example.com"],
            ["role" => Role::Moderator,
                "name" => "Moderator",
                "email_verified_at" => now(),
                "password" => Hash::make(static::DEFAULT_PASSWORD),
                "remember_token" => Str::random(10),
                "active" => true,
            ],
        );
    }
}

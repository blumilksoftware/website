<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Enums\Role;
use Blumilk\Website\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "email" => fake()->unique()->safeEmail(),
            "email_verified_at" => now(),
            "password" => Hash::make("password"),
            "remember_token" => Str::random(10),
            "active" => true,
            "role" => Role::Admin,
        ];
    }
}

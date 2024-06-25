<?php

declare(strict_types=1);

namespace Database\Seeders;

use Blumilk\Website\Enums\Role;
use Blumilk\Website\Models\Activity;
use Blumilk\Website\Models\CaseStudy;
use Blumilk\Website\Models\ContactForm;
use Blumilk\Website\Models\MeetupActivity;
use Blumilk\Website\Models\Reference;
use Blumilk\Website\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            "email" => "admin@example.com",
            "role" => Role::Admin,
        ]);
        User::factory()->create([
            "email" => "moderator@example.com",
            "role" => Role::Moderator,
        ]);
    }
}

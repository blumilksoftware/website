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

class BetaSeeder extends Seeder
{
    public function run(): void
    {
        if (config("app.env") !== "local" || User::query()->count() > 0) {
            return;
        }

        $this->call(UsersSeeder::class);

    }
}

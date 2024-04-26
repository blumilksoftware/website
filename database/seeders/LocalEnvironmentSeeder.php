<?php

declare(strict_types=1);

namespace Database\Seeders;

use Blumilk\Website\Models\Activity;
use Blumilk\Website\Models\CaseStudy;
use Blumilk\Website\Models\ContactForm;
use Blumilk\Website\Models\User;
use Illuminate\Database\Seeder;

class LocalEnvironmentSeeder extends Seeder
{
    public function run(): void
    {
        if (config("app.env") !== "local" || User::query()->count() > 0) {
            return;
        }

        User::factory()->create(["email" => "admin@example.com"]);
        Activity::factory()->count(12)->create();
        CaseStudy::factory()->count(12)->create();
        ContactForm::factory()->count(12)->create();
    }
}

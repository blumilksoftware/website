<?php

declare(strict_types=1);

namespace Database\Seeders;

use Blumilk\Website\Models\Activity;
use Blumilk\Website\Models\CaseStudy;
use Blumilk\Website\Models\ContactForm;
use Blumilk\Website\Models\Reference;
use Blumilk\Website\Models\Tag;
use Illuminate\Database\Seeder;

class LocalEnvironmentSeeder extends Seeder
{
    public function run(): void
    {
        if (config("app.env") !== "local") {
            return;
        }

        $this->call(UsersSeeder::class);

        Tag::factory()->count(12)->create();
        Activity::factory()->count(12)->create();
        CaseStudy::factory()->count(12)->create();
        ContactForm::factory()->count(12)->create();
        Reference::factory()->count(12)->create();
    }
}

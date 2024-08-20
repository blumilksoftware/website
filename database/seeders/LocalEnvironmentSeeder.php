<?php

declare(strict_types=1);

namespace Database\Seeders;

use Blumilk\Website\Models\ContactForm;
use Blumilk\Website\Models\News;
use Blumilk\Website\Models\Project;
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
        News::factory()->count(12)->create();
        $this->createSpecificProjects();
        Project::factory()->count(12)->create();
        ContactForm::factory()->count(12)->create();
        Reference::factory()->count(12)->create();
    }

    private function createSpecificProjects(): void
    {
        Project::factory()->create([
            "name_first_part" => [
                "pl" => "Aplikacja do",
                "en" => "Application for",
            ],
            "name_second_part" => [
                "pl" => "zamawiania usług medycznych",
                "en" => "ordering medical services",
            ],
            "name_third_part" => [
                "pl" => "z przychodni Vita+",
                "en" => "from the Vita+ clinic",
            ],
            "color" => "#9676F9",
            "photo" => "factory/case_study.jpg",
            "published" => true,
            "slug" => "vita",
            "template" => "vita",
        ]);

        Project::factory()->create([
            "name_first_part" => [
                "pl" => "Aplikacja shared economy do",
                "en" => "Shared economy application for",
            ],
            "name_second_part" => [
                "pl" => "przewozów przesyłek",
                "en" => "the transport of parcels",
            ],
            "name_third_part" => [
                "pl" => null,
                "en" => null,
            ],
            "color" => "#FAD12A",
            "photo" => "factory/case_study.jpg",
            "published" => true,
            "slug" => "getthebox",
            "template" => "getthebox",
        ]);

        Project::factory()->create([
            "name_first_part" => [
                "pl" => "System",
                "en" => "System for",
            ],
            "name_second_part" => [
                "pl" => "zarządzania licencjami i dystrybucji",
                "en" => "managing licenses and distributing",
            ],
            "name_third_part" => [
                "pl" => "oprogramowania",
                "en" => "Software",
            ],
            "color" => "#FF5555",
            "photo" => "factory/case_study.jpg",
            "published" => true,
            "slug" => "k1",
            "template" => "k1",
        ]);
    }
}

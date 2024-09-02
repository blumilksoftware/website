<?php

declare(strict_types=1);

namespace Database\Seeders;

use Blumilk\Website\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedVita();
        $this->seedGetTheBox();
        $this->seedK1();
        $this->seedCarbon();

        Project::factory()->count(12)->create();
    }

    private function seedVita(): void
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
    }

    private function seedGetTheBox(): void
    {
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
    }

    private function seedK1(): void
    {
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

    private function seedCarbon(): void
    {
        Project::factory()->create([
            "name_first_part" => [
                "pl" => "Aplikacja do zbierania danych i generowania raportów",
                "en" => "Application for collecting data and generating reports",
            ],
            "name_second_part" => [
                "pl" => "dotyczących śladu węglowego",
                "en" => "regarding carbon footprint",
            ],
            "name_third_part" => [
                "pl" => null,
                "en" => null,
            ],
            "color" => "#F39200",
            "photo" => "factory/case_study.jpg",
            "published" => true,
            "slug" => "carbon",
            "template" => "carbon",
        ]);
    }
}

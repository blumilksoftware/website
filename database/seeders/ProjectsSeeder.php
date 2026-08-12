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
        $this->seedEmployeeRequests();
    }

    private function seedVita(): void
    {
        Project::updateOrCreate(
            ["slug" => "vita"],
            [
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
                "template" => "vita",
            ],
        );
    }

    private function seedGetTheBox(): void
    {
        Project::updateOrCreate(
            ["slug" => "getthebox"],
            [
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
                "template" => "getthebox",
            ],
        );
    }

    private function seedK1(): void
    {
        Project::updateOrCreate(
            ["slug" => "k1"],
            [
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
                "template" => "k1",
            ],
        );
    }

    private function seedCarbon(): void
    {
        Project::updateOrCreate(
            ["slug" => "carbon"],
            [
                "name_first_part" => [
                    "pl" => "Aplikacja do kalkulacji śladu węglowego i generowania",
                    "en" => "An app for calculating carbon footprints and generating",
                ],
                "name_second_part" => [
                    "pl" => "raportów emisji CO₂",
                    "en" => "CO₂ emissions reports",
                ],
                "name_third_part" => [
                    "pl" => null,
                    "en" => null,
                ],
                "color" => "#F39200",
                "photo" => "factory/case_study.jpg",
                "published" => true,
                "template" => "carbon",
            ],
        );
    }

    private function seedEmployeeRequests(): void
    {
        Project::updateOrCreate(
            ["slug" => "employee-requests"],
            [
                "name_first_part" => [
                    "pl" => "System do zarządzania wnioskami",
                    "en" => "A system for managing requests",
                ],
                "name_second_part" => [
                    "pl" => "zgłaszanymi przez pracowników firmy",
                    "en" => "submitted by company employees",
                ],
                "name_third_part" => [
                    "pl" => null,
                    "en" => null,
                ],
                "color" => "#000000",
                "photo" => "factory/case_study.jpg",
                "published" => true,
                "template" => "employee-requests",
            ],
        );
    }
}

<?php

declare(strict_types=1);

namespace Database\Seeders;

use Blumilk\Website\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(LocalEnvironmentSeeder::class);
        $this->seedEmployeeRequests();

    }

    private function seedEmployeeRequests(): void
    {
        Project::factory()->create([
            "name_first_part" => [
                "pl" => "System do zarządzania wnioskami zgłaszanymi przez pracowników firmy",
                "en" => "A system for managing requests submitted by company employees",
            ],
            "name_second_part" => [
                "pl" => null,
                "en" => null,
            ],
            "name_third_part" => [
                "pl" => null,
                "en" => null,
            ],
            "color" => "#000000",
            "photo" => "factory/case_study.jpg",
            "published" => true,
            "slug" => "employee-requests",
            "template" => "employee-requests",
        ]);
    }
}

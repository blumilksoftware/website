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

    }
}

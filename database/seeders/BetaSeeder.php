<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BetaSeeder extends Seeder
{
    public function run(): void
    {
        if (config("app.env") === "local") {
            return;
        }

        $this->call(UsersSeeder::class);
    }
}

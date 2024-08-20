<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table("case_studies", function (Blueprint $table): void {
            $table->rename("projects");
        });
    }

    public function down(): void
    {
        Schema::table("projects", function (Blueprint $table): void {
            $table->rename("case_studies");
        });
    }
};

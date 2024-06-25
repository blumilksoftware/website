<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table("case_studies", function (Blueprint $table): void {
            $table->json("slug")->change();
            DB::statement("ALTER TABLE case_studies ALTER COLUMN slug TYPE json USING slug::json");
        });
    }

    public function down(): void
    {
        Schema::table("case_studies", function (Blueprint $table): void {
            $table->string("slug")->change();
        });
    }
};

<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table("activities", function (Blueprint $table): void {
            $table->rename("news");
        });
    }

    public function down(): void
    {
        Schema::table("news", function (Blueprint $table): void {
            $table->rename("activities");
        });
    }
};

<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table("case_studies", function (Blueprint $table): void {
            $table->renameColumn("name", "name_1");
            $table->string("name_2")->nullable();
            $table->string("name_3")->nullable();
        });
    }

    public function down(): void
    {
        Schema::table("case_studies", function (Blueprint $table): void {
            $table->renameColumn("name_1", "name");
            $table->dropColumn("name_2");
            $table->dropColumn("name_3");
        });
    }
};

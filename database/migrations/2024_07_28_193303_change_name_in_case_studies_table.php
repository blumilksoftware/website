<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table("case_studies", function (Blueprint $table): void {
            $table->renameColumn("name", "name_first_part");
            $table->string("name_second_part")->nullable();
            $table->string("name_third_part")->nullable();
        });
    }

    public function down(): void
    {
        Schema::table("case_studies", function (Blueprint $table): void {
            $table->renameColumn("name_first_part", "name");
            $table->dropColumn("name_second_part");
            $table->dropColumn("name_third_part");
        });
    }
};

<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table("contact_forms", function (Blueprint $table): void {
            $table->string("lang")->default("pl");
        });
    }

    public function down(): void
    {
        Schema::table("contact_forms", function (Blueprint $table): void {
            $table->dropColumn("lang");
        });
    }
};

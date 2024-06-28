<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("tags", function (Blueprint $table): void {
            $table->id();
            $table->json("title");
            $table->boolean("is_primary")->default(false);
            $table->boolean("as_person")->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("tags");
    }
};

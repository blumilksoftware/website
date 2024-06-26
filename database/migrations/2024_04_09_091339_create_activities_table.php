<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("activities", function (Blueprint $table): void {
            $table->id();
            $table->string("photo");
            $table->json("title");
            $table->json("subtitle");
            $table->json("description");
            $table->boolean("published")->default(false);
            $table->date("published_at")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("activities");
    }
};

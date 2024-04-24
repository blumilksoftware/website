<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("case_studies", function (Blueprint $table): void {
            $table->id();
            $table->string("photo");
            $table->string("company");
            $table->string("slug");
            $table->string("template")->nullable();
            $table->json("name");
            $table->json("description");
            $table->boolean("published")->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("case_studies");
    }
};

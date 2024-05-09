<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("references", function (Blueprint $table): void {
            $table->id();
            $table->string("creator_name");
            $table->string("photo");
            $table->string("company");
            $table->json("description");
            $table->boolean("published")->default(false);
            $table->string("associate_link")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("references");
    }
};

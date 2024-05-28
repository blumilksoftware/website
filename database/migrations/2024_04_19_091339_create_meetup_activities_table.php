<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("meetup_activities", function (Blueprint $table): void {
            $table->id();
            $table->json("title");
            $table->json("description");
            $table->string("presenter_name");
            $table->string("photo");
            $table->boolean("published")->default(false);
            $table->date("published_at")->nullable();
            $table->string("associate_link")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("meetup_activities");
    }
};

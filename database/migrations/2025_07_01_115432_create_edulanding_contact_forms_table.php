<?php

declare(strict_types=1);

use Blumilk\Website\Enums\ContactFormStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("edulanding_contact_forms", function (Blueprint $table): void {
            $table->id();
            $table->string("email");
            $table->string("full_name");
            $table->string("company_name");
            $table->text("message");
            $table->string("status")->default(ContactFormStatus::Unread->value);
            $table->text("response")->nullable();
            $table->string("lang")->default("pl");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("edulanding_contact_forms");
    }
};

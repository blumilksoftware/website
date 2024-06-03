<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Models\CaseStudy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CaseStudy>
 */
class CaseStudyFactory extends Factory
{
    public function definition(): array
    {
        $locales = config("app.translatable_locales");

        return [
            "name" => $this->translations($locales, $this->faker->sentence),
            "description" => $this->translations($locales, $this->faker->paragraph),
            "photo" => sprintf("%s/%s", CaseStudy::PHOTOS_DIRECTORY, $this->faker->image("public/storage/case-studies", width: 240, height: 240, fullPath: false)),
            "published" => $this->faker->boolean,
            "company" => $this->faker->company,
            "slug" => $this->faker->slug,
            "template" => "base-template.blade.php",
        ];
    }
}

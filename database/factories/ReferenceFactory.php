<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Models\Reference;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reference>
 */
class ReferenceFactory extends Factory
{
    public function definition(): array
    {
        $locales = config("app.translatable_locales");

        return [
            "creator_name" => $this->faker->name,
            "description" => $this->translations($locales, $this->faker->paragraph),
            "photo" => sprintf("%s/%s", Reference::PHOTOS_DIRECTORY, $this->faker->image("public/storage/" . Reference::PHOTOS_DIRECTORY, width: 240, height: 240, fullPath: false)),
            "published" => $this->faker->boolean,
            "company" => $this->faker->company,
            "associate_link" => $this->faker->url,
        ];
    }
}

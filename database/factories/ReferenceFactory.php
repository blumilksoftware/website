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
            "photo" => sprintf("%s/%s", "factory", "reference.jpg"),
            "published" => $this->faker->boolean,
            "company" => $this->faker->boolean ? $this->faker->company : null,
            "sex" => $this->faker->randomElement(["male", "female"]),
            "position" => $this->faker->boolean ? $this->faker->jobTitle : null,
        ];
    }
}

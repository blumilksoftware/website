<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tag>
 */
class TagFactory extends Factory
{
    public function definition(): array
    {
        $locales = config("app.translatable_locales");

        return [
            "title" => $this->translations($locales, $this->faker->lexify("??????")),
            "is_primary" => $this->faker->boolean,
        ];
    }
}

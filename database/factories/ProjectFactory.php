<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    public function definition(): array
    {
        $locales = config("app.translatable_locales");

        return [
            "name_first_part" => $this->translations($locales, $this->faker->words(2, true)),
            "name_second_part" => $this->translations($locales, $this->faker->words(2, true)),
            "name_third_part" => $this->translations($locales, $this->faker->words(2, true)),
            "color" => $this->faker->hexColor,
            "photo" => sprintf("%s/%s", "factory", "case_study.jpg"),
            "published" => $this->faker->boolean,
            "slug" => $this->faker->slug,
            "template" => "base-template",
        ];
    }
}

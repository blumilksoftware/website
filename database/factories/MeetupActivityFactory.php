<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Activity>
 */
class MeetupActivityFactory extends Factory
{
    public function definition(): array
    {
        $locales = config("app.translatable_locales");

        return [
            "title" => $this->translations($locales, $this->faker->sentence),
            "description" => $this->translations($locales, $this->faker->paragraph),
            "presenter_name" => $this->faker->name,
            "photo" => sprintf("%s/%s", "factory", "activity.jpg"),
            "published" => $this->faker->boolean,
            "published_at" => $this->faker->date,
            "associate_link" => $this->faker->url,
        ];
    }
}

<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Models\Activity;
use Blumilk\Website\Models\MeetupActivity;
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
            "photo" => sprintf("%s/%s", MeetupActivity::PHOTOS_DIRECTORY, $this->faker->image("public/storage/activities", width: 240, height: 240, fullPath: false)),
            "published" => $this->faker->boolean,
            "published_at" => $this->faker->date,
            "associate_link" => $this->faker->url,
        ];
    }
}

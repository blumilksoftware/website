<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Models\Activity;
use Blumilk\Website\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Activity>
 */
class ActivityFactory extends Factory
{
    public function definition(): array
    {
        $locales = config("app.translatable_locales");

        return [
            "title" => $this->translations($locales, $this->faker->sentence),
            "subtitle" => $this->translations($locales, $this->faker->sentence),
            "description" => $this->translations($locales, $this->faker->paragraph),
            "slug" => $this->faker->slug,
            "photo" => sprintf("%s/%s", "factory", "activity.jpg"),
            "published" => $this->faker->boolean,
            "published_at" => $this->faker->date,
            "tags" => $this->faker->randomElements(Tag::all()->pluck("id"), $this->faker->numberBetween(0, 5)),
            "url" => $this->faker->url(),
        ];
    }
}

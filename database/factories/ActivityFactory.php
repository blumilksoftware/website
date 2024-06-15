<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Filament\Resources\ActivityResource;
use Blumilk\Website\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Activity>
 */
class ActivityFactory extends Factory
{
    public function definition(): array
    {
        $tags = ActivityResource::getTags();
        $locales = config("app.translatable_locales");

        return [
            "title" => $this->translations($locales, $this->faker->sentence),
            "subtitle" => $this->translations($locales, $this->faker->sentence),
            "description" => $this->translations($locales, $this->faker->paragraph),
            "slug" => $this->translations($locales, $this->faker->slug),
            "photo" => sprintf("%s/%s", "factory", "activity.jpg"),
            "published" => $this->faker->boolean,
            "published_at" => $this->faker->date,
            "tags" => $this->faker->randomElements($tags, $this->faker->numberBetween(0, count($tags))),
            "url" => $this->faker->url(),
        ];
    }
}

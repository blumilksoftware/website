<?php

declare(strict_types=1);

namespace Database\Factories;

use Blumilk\Website\Enums\ContactFormStatus;
use Blumilk\Website\Models\ContactForm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ContactForm>
 */
class ContactFormFactory extends Factory
{
    public function definition(): array
    {
        return [
            "email" => $this->faker->email,
            "topic" => $this->faker->sentence,
            "message" => $this->faker->paragraph,
            "status" => $this->faker->randomElement(ContactFormStatus::cases()),
            "created_at" => $this->faker->dateTimeBetween("-1 year"),
        ];
    }
}

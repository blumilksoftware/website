<?php

declare(strict_types=1);

namespace Tests\Feature;

use Blumilk\Website\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LocalisedAdminPanelTest extends TestCase
{
    use DatabaseMigrations;

    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    public function testAdminPanelShouldHaveAlwaysPolishLanguage(): void
    {
        $this->actingAs($this->user)
            ->get("/admin")
            ->assertSee("Panel")
            ->assertStatus(200);

        $this->actingAs($this->user)
            ->get("/admin", ["Accept-Language" => "en"])
            ->assertSee("Panel")
            ->assertStatus(200);

        $this->actingAs($this->user)
            ->get("/admin", ["Accept-Language" => "fr"])
            ->assertSee("Panel")
            ->assertStatus(200);
    }
}

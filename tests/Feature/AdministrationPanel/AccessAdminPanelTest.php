<?php

declare(strict_types=1);

namespace Tests\Feature\AdministrationPanel;

use Blumilk\Website\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class AccessAdminPanelTest extends TestCase
{
    use DatabaseMigrations;

    protected User $admin;
    protected User $moderator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::factory()->create();
        $this->moderator = User::factory()->create(["role" => "moderator"]);
    }

    public function testAdminCanAccessToAdminPanel(): void
    {
        $this->actingAs($this->admin)
            ->get("/admin")
            ->assertStatus(200);
    }

    public function testModeratorCanAccessToAdminPanel(): void
    {
        $this->actingAs($this->admin)
            ->get("/admin")
            ->assertStatus(200);
    }

    public function testGuestCannotAccessToAdminPanel(): void
    {
        $this->get("/admin")
            ->assertStatus(302)
            ->assertRedirect("/admin/login");
    }
}

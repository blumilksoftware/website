<?php

declare(strict_types=1);

namespace Tests\Feature\AdministrationPanel;

use Blumilk\Website\Filament\Resources\UserResource;
use Blumilk\Website\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Livewire\Livewire;
use Tests\TestCase;

class UserResourceTest extends TestCase
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

    public function testAdminCanAccessToUserResource(): void
    {
        $this->actingAs($this->admin)
            ->get("/admin/users")
            ->assertStatus(200)
            ->assertSee("Użytkownicy")
            ->assertSee($this->admin->name);
    }

    public function testModeratorCannotAccessToUserResource(): void
    {
        $this->actingAs($this->moderator)
            ->get("/admin/users")
            ->assertDontSee("Użytkownicy")
            ->assertDontSee($this->admin->name)
            ->assertStatus(403);
    }

    public function testGuestCannotAccessToUserResource(): void
    {
        $this->get("/admin/users")
            ->assertDontSee("Użytkownicy")
            ->assertDontSee($this->admin->name)
            ->assertStatus(302)
            ->assertRedirect("/admin/login");
    }

    public function testAdminCanCreateUser(): void
    {
        $this->actingAs($this->admin);

        Livewire::test(UserResource\Pages\CreateUser::class)
            ->fillForm([
                "name" => "Test User",
                "email" => "user@example.com",
                "role" => "moderator",
                "password" => "password",
                "password_confirmation" => "password",
            ])
            ->call("create")
            ->assertOK();
    }

    public function testAdminCannotCreateUserWithInvalidData(): void
    {
        $this->actingAs($this->admin);

        Livewire::test(UserResource\Pages\CreateUser::class)
            ->fillForm([
                "name" => null,
                "email" => "invalid-email",
                "role" => "moderator",
                "password" => "password",
                "password_confirmation" => "password123",
            ])
            ->call("create")
            ->assertHasFormErrors([
                "email" => "email",
                "name" => "required",
                "password" => "confirmed",
            ]);
    }
}

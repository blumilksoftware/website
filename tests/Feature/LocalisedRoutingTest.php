<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class LocalisedRoutingTest extends TestCase
{
    public function testExistingRoute(): void
    {
        $response = $this->get("/en/contact");
        $response->assertStatus(200);
    }

    public function testExistingLocalisedRoute(): void
    {
        $response = $this->get("/pl/kontakt");
        $response->assertStatus(200);
    }

    public function testNonExistingRoute(): void
    {
        $response = $this->get("/en/kontakt");
        $response->assertStatus(404);
    }

    public function testNonExistingLocalisedRoute(): void
    {
        $response = $this->get("/pl/contact");
        $response->assertStatus(404);
    }
}

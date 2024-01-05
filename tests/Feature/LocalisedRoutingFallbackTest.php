<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class LocalisedRoutingFallbackTest extends TestCase
{
    public function testFallbackLocaleForDefaultRedirect(): void
    {
        $response = $this->get("/contact");
        $response->assertStatus(301)->assertRedirect("/en/contact");
    }

    public function testFallbackLocaleForPolishRedirect(): void
    {
        $response = $this->get("/contact", ["Accept-Language" => "pl"]);
        $response->assertStatus(301)->assertRedirect("/pl/kontakt");
    }

    public function testFallbackLocaleForNotSupportedLanguageRedirect(): void
    {
        $response = $this->get("/contact", ["Accept-Language" => "kz"]);
        $response->assertStatus(301)->assertRedirect("/en/contact");
    }
}

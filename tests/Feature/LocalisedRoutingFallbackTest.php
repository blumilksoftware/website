<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class LocalisedRoutingFallbackTest extends TestCase
{
    public function testFallbackLocaleForDefaultRedirect(): void
    {
        $response = $this->get("/");
        $response->assertRedirect("/en");
    }

    public function testFallbackLocaleForPolishRedirect(): void
    {
        $response = $this->get("/", ["Accept-Language" => "pl"]);
        $response->assertRedirect("/pl");
    }

    public function testFallbackLocaleForContactPage(): void
    {
        $response = $this->get("/contact");
        $response->assertRedirect("/en/contact");
    }

    public function testFallbackLocaleForPolishContactPage(): void
    {
        $response = $this->get("/contact", ["Accept-Language" => "pl"]);
        $response->assertRedirect("/en/contact");
    }

    public function testFallbackLocaleForNotSupportedLanguageContactPage(): void
    {
        $response = $this->get("/contact", ["Accept-Language" => "kz"]);
        $response->assertRedirect("/en/contact");
    }
}

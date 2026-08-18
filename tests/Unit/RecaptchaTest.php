<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Validator;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;
use Tests\TestCase;

class RecaptchaTest extends TestCase
{
    public function testRecaptchav3ValidationPassesWhenScoreIsHighEnough(): void
    {
        RecaptchaV3::shouldReceive("verify")
            ->once()
            ->andReturn(0.8);

        $data = ["token" => "dummy-token"];
        $rules = ["token" => "recaptchav3:contact,0.5"];

        $validator = Validator::make($data, $rules);

        $this->assertTrue($validator->passes());
    }

    public function testRecaptchav3ValidationFailsWhenScoreIsTooLow(): void
    {
        RecaptchaV3::shouldReceive("verify")
            ->once()
            ->andReturn(0.3);

        $data = ["token" => "dummy-token"];
        $rules = ["token" => "recaptchav3:contact,0.5"];

        $validator = Validator::make($data, $rules);

        $this->assertFalse($validator->passes());
    }

    public function testRecaptchav3ValidationFailsWhenExceptionIsThrown(): void
    {
        RecaptchaV3::shouldReceive("verify")
            ->once()
            ->andThrow(new Exception());

        $data = ["token" => "dummy-token"];
        $rules = ["token" => "recaptchav3:contact,0.5"];

        $validator = Validator::make($data, $rules);

        $this->assertFalse($validator->passes());
    }
}

<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    private const string EMAIL_PATTERN = "regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    public function rules(): array
    {
        return [
            "email" => ["required", "email", "string", "max:255", self::EMAIL_PATTERN],
            "topic" => ["required", "string", "max:255"],
            "message" => ["required", "string", "max:65000"],
            "consents" => ["accepted"],
        ];
    }

    public function data(): array
    {
        return [
            "email" => $this->get("email"),
            "topic" => $this->get("topic"),
            "message" => $this->get("message"),
        ];
    }
}

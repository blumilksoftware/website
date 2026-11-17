<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CookieConsentRequest extends FormRequest
{
    public const array CONSENTS = ["accepted", "declined"];

    public function rules(): array
    {
        return [
            "consent" => ["required", "string", "in:" . implode(",", self::CONSENTS)],
        ];
    }
}

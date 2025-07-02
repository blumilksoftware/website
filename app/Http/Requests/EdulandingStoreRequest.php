<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EdulandingStoreRequest extends FormRequest
{
    private const string EMAIL_PATTERN = "regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    public function rules(): array
    {
        return [
            "email" => ["required", "email", "string", "max:255", self::EMAIL_PATTERN],
            "full_name" => ["required", "string", "max:255"],
            "company_name" => ["required", "string", "max:255"],
            "message" => ["required", "string", "max:65000"],
            "consents" => ["accepted"],
            "g-recaptcha-response" => "required|recaptchav3:contact,0.5",
        ];
    }

    public function getData(): array
    {
        return [
            "email" => mb_convert_encoding($this->get("email"), "UTF-8", "auto"),
            "full_name" => mb_convert_encoding($this->get("full_name"), "UTF-8", "auto"),
            "company_name" => mb_convert_encoding($this->get("company_name"), "UTF-8", "auto"),
            "message" => mb_convert_encoding($this->get("message"), "UTF-8", "auto"),
            "lang" => app()->getLocale(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        $url = parent::getRedirectUrl();

        return $url . "#contact";
    }
}

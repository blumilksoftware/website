<?php

declare(strict_types=1);

namespace Blumilk\Website\DTOs;

use Blumilk\Website\Models\ContactForm;

class ContactFormResponse
{
    public function __construct(
        public string $subject,
        public string $response,
        public string $messageDescription,
        public string $locale,
    ) {}

    public static function fromArray(ContactForm $record, array $data): self
    {
        return new self(
            subject: $data["responseTopic"],
            response: $data["response"],
            messageDescription: $record->message,
            locale: $record->lang,
        );
    }
}

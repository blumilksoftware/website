<?php

declare(strict_types=1);

namespace Blumilk\Website\Mail;

use Blumilk\Website\DTOs\ContactFormResponse;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormResponded extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public ContactFormResponse $details,
    ) {}

    public function build(): self
    {
        return $this->subject($this->details->subject)
            ->view("email");
    }
}

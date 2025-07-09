<?php

declare(strict_types=1);

namespace Blumilk\Website\Mail;

use Blumilk\Website\DTOs\EdulandingContactFormResponse;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EdulandingContactFormResponded extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public EdulandingContactFormResponse $details,
    ) {}

    public function build(): self
    {
        return $this->subject($this->details->subject)
            ->view("email")
            ->with(["details" => $this->details]);
    }
}

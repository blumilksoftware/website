<?php

declare(strict_types=1);

namespace Blumilk\Website\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormResponded extends Mailable
{
    use Queueable;
    use SerializesModels;

    public array $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build(): self
    {
        return $this->subject($this->details["subject"])
            ->view("email");
    }
}

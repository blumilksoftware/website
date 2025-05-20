<?php

declare(strict_types=1);

namespace Blumilk\Website\Mail;

use Blumilk\Website\Filament\Resources\ContactFormResource;
use Blumilk\Website\Models\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormCreated extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public ContactForm $contactForm,
    ) {}

    public function build(): static
    {
        return $this->subject($this->contactForm->topic)
            ->view("notification")
            ->with([
                "topic" => $this->contactForm->topic,
                "email" => $this->contactForm->email,
                "content" => $this->contactForm->message,
                "url" => ContactFormResource::getUrl("edit", ["record" => $this->contactForm->id]),
            ]);
    }
}

<?php

declare(strict_types=1);

namespace Blumilk\Website\Mail;

use Blumilk\Website\Filament\Resources\EdulandingContactFormResource;
use Blumilk\Website\Models\EdulandingContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EdulandingContactFormCreated extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        protected EdulandingContactForm $edulandingContactForm,
    ) {}

    public function build(): static
    {
        return $this->subject($this->edulandingContactForm->company_name)
            ->view("edulanding.notification")
            ->with([
                "full_name" => $this->edulandingContactForm->full_name,
                "company_name" => $this->edulandingContactForm->company_name,
                "email" => $this->edulandingContactForm->email,
                "content" => $this->edulandingContactForm->message,
                "url" => EdulandingContactFormResource::getUrl("edit", ["record" => $this->edulandingContactForm->id]),
            ]);
    }
}

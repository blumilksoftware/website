<?php

declare(strict_types=1);

namespace Blumilk\Website\Observers;

use Blumilk\Website\Mail\ContactFormCreated;
use Blumilk\Website\Models\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactFormObserver
{
    public function created(ContactForm $contactForm): void
    {
        Mail::to(config("app.contact_form_notify_email"))->send(new ContactFormCreated($contactForm));
    }
}

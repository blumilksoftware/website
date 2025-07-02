<?php

declare(strict_types=1);

namespace Blumilk\Website\Observers;

use Blumilk\Website\Mail\EdulandingContactFormCreated;
use Blumilk\Website\Models\EdulandingContactForm;
use Illuminate\Support\Facades\Mail;

class EdulandingContactFormObserver
{
    public function created(EdulandingContactForm $contactForm): void
    {
        Mail::to(config("app.contact_form_notify_email"))->send(new EdulandingContactFormCreated($contactForm));
    }
}

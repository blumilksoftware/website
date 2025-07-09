<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Requests\EdulandingStoreRequest;
use Blumilk\Website\Models\EdulandingContactForm;
use Illuminate\Http\RedirectResponse;

class EdulandingContactController extends Controller
{
    public function store(EdulandingStoreRequest $request): RedirectResponse
    {
        EdulandingContactForm::create($request->getData());

        return redirect()->back()->with(["success" => __("toast.contact.success")])->withFragment("contact");
    }
}

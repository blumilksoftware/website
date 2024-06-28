<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Requests\StoreRequest;
use Blumilk\Website\Models\ContactForm;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function index(Factory $factory): View
    {
        return $factory->make("contact");
    }

    public function store(StoreRequest $request):RedirectResponse
    {
        ContactForm::create($request->data());

        return redirect()->back()->with(["success" => __("Message sent.")]);
    }
}

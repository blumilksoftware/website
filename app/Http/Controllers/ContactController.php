<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Inertia\Response;
use Inertia\ResponseFactory;

class ContactController extends Controller
{
    public function __invoke(ResponseFactory $factory): Response
    {
        return $factory->render("Contact");
    }
}

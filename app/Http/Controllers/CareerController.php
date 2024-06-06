<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CareerController extends Controller
{
    public function index(Factory $factory): View
    {
        return $factory->make("career");
    }

    public function get(Factory $factory, string $slug): View
    {
        return $factory->make("$slug");
    }
}

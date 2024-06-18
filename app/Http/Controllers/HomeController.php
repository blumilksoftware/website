<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Models\Reference;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(Factory $factory): View
    {
        $references = Reference::query()->where("published", true)->get();

        return $factory->make("home")
            ->with("references", $references);
    }
}

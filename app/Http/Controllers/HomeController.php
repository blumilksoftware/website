<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Models\Activity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(Factory $factory): View
    {
        $events = Activity::query()->where("published", true)->get();

        return $factory->make("home")
            ->with("events", $events);
    }
}

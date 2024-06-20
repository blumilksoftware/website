<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Resources\ActivityResource;
use Blumilk\Website\Models\Activity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(Factory $factory): View
    {
        $activities = Activity::query()->where("published", true)->get();

        return $factory->make("home")
            ->with("activities", ActivityResource::collection($activities));
    }
}

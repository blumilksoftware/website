<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Filament\Resources\ActivityResource;
use Blumilk\Website\Models\Activity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class EventsController extends Controller
{
    public function index(Factory $factory): View
    {
        $events = Activity::query()->where("published", true)->get();
        $tags = ActivityResource::getTags();

        return $factory->make("events")
            ->with("events", $events)
            ->with("tags", $tags);
    }

    public function get(Factory $factory, string $id): View
    {
        $event = Activity::query()->where("id", $id)->firstOrFail();

        return $factory->make("event")
            ->with("event", $event);
    }
}

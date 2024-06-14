<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Filament\Resources\ActivityResource;
use Blumilk\Website\Models\Activity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;

class ActivitiesController extends Controller
{
    public function index(Factory $factory): View
    {
        $activities = Activity::query()->where("published", true)->get();
        $tags = ActivityResource::getTags();

        return $factory->make("activities")
            ->with("activities", $activities)
            ->with("tags", $tags);
    }

    public function get(Factory $factory, string $slug): View
    {
        $locale = App::getLocale();
        $activity = Activity::query()->where("slug->{$locale}", $slug)->firstOrFail();

        return $factory->make("activity")
            ->with("activity", $activity);
    }
}

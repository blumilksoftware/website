<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Resources\ActivityResource;
use Blumilk\Website\Models\Activity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;

class ActivitiesController extends Controller
{
    public function index(Factory $factory): View
    {
        $activities = Activity::query()->where("published", true)->paginate(9);
        $tags = ActivityResource::getTags();

        return $factory->make("activities")
            ->with("activities", ActivityResource::collection($activities))
            ->with("tags", $tags);
    }

    public function get(Factory $factory, string $slug): View
    {
        $locale = App::getLocale();
        $activity = Activity::query()->where("slug->{$locale}", $slug)->firstOrFail();
        $recommendedActivities = Activity::all()
            ->shuffle()
            ->take(2);


        return $factory->make("activity")
            ->with("activity", new ActivityResource($activity))
            ->with("recommendedActivities", ActivityResource::collection($recommendedActivities));
    }
}

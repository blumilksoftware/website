<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Resources\ActivityResource;
use Blumilk\Website\Models\Activity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ActivitiesController extends Controller
{
    public function index(Factory $factory): View
    {
        $activities = Activity::query()->where("published", true)->latest("published_at")->paginate(9);
        $tags = ActivityResource::getTags();

        return $factory->make("activities")
            ->with("activities", ActivityResource::collection($activities))
            ->with("tags", $tags);
    }

    public function get(Factory $factory, string $slug): View
    {
        $activity = Activity::query()->whereJsonContains("slug->en", $slug)->orWhereJsonContains("slug->pl", $slug)->firstOrFail();

        $nextActivities = Activity::query()->where("id", ">", $activity->id)->where("published", true)->orderBy("id", "asc")->take(2)->get();
        $previousActivities = Activity::query()->where("id", "<", $activity->id)->where("published", true)->orderBy("id", "desc")->take(2)->get();

        if (!$previousActivities->first()) {
            $recommendedActivities = $nextActivities;
        } elseif (!$nextActivities->first()) {
            $recommendedActivities = $previousActivities;
        } else {
            $recommendedActivities = [$previousActivities->first(), $nextActivities->first()];
        }

        return $factory->make("activity")
            ->with("activity", new ActivityResource($activity))
            ->with("recommendedActivities", ActivityResource::collection($recommendedActivities)->resolve());
    }
}

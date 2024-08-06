<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Resources\ActivityResource;
use Blumilk\Website\Http\Resources\TagResource;
use Blumilk\Website\Models\Activity;
use Blumilk\Website\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index(Request $request, Factory $factory): View
    {
        $tagFromQuery = $request->get("tag");
        $tag = $tagFromQuery
            ? Tag::query()
                ->where("title->pl", "LIKE", $tagFromQuery)
                ->orWhere("title->en", "LIKE", $tagFromQuery)
                ->firstOrFail()
            : null;
        $allActivitiesCount = Activity::query()
            ->where("published", true)
            ->count();
        $activities = Activity::query()
            ->where("published", true)
            ->when($tag, fn($query, $tag) => $query->whereJsonContains("tags", $tag->id))
            ->latest("published_at")
            ->paginate(7)
            ->appends(["tag" => $tagFromQuery]);
        $tags = Tag::query()
            ->where("is_primary", true)
            ->get();

        $tagsActivitiesCount = [];

        foreach ($tags as $singleTag) {
            $tagsActivitiesCount[$singleTag->title] = $singleTag->activitiesCount();
        }

        return $factory->make("activities")
            ->with("activities", ActivityResource::collection($activities))
            ->with("tags", $tags->pluck("title"))
            ->with("tagsActivitiesCount", $tagsActivitiesCount)
            ->with("selectedTag", $tag?->title)
            ->with("allActivitiesCount", $allActivitiesCount);
    }

    public function get(Request $request, Factory $factory, string $slug): View
    {
        $urlPath = $request->getRequestUri();
        $articleUrl = config("app.url") . $urlPath;

        $activity = Activity::query()->where("slug", $slug)->firstOrFail();
        $activityTags = $activity->getRelatedTagModels();

        $nextActivities = Activity::query()->where("id", ">", $activity->id)->where("published", true)->orderBy("id", "asc")->take(2)->get();
        $previousActivities = Activity::query()->where("id", "<", $activity->id)->where("published", true)->orderBy("id", "desc")->take(2)->get();

        if (!$previousActivities->first()) {
            $recommendedActivities = $nextActivities;
        } elseif (!$nextActivities->first()) {
            $recommendedActivities = $previousActivities;
        } else {
            $recommendedActivities = [$previousActivities->first(), $nextActivities->first()];
        }

        $tagsActivitiesCount = [];

        foreach ($activityTags as $singleTag) {
            $tagsActivitiesCount[$singleTag->title] = $singleTag->activitiesCount();
        }

        $activity = new ActivityResource($activity);

        return $factory->make("activity")
            ->with("activity", $activity->resolve())
            ->with("tags", TagResource::collection($activityTags->where("as_person", false))->resolve())
            ->with("tagsActivitiesCount", $tagsActivitiesCount)
            ->with("peopleTags", TagResource::collection($activityTags->where("as_person", true))->resolve())
            ->with("recommendedActivities", ActivityResource::collection($recommendedActivities)->resolve())
            ->with("articleUrl", $articleUrl);
    }
}

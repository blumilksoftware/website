<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Resources\ActivityResource;
use Blumilk\Website\Models\Activity;
use Blumilk\Website\Models\Reference;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request, Factory $factory): View
    {
        $locale = $request->getLocale();

        $caseStudy = json_decode(file_get_contents(public_path("main_case_study.json")), true)[$locale];
        $activities = Activity::query()->where("published", true)->latest("published_at")->get();
        $references = Reference::query()->where("published", true)->get();

        $referencesCount = $references->count();

        return $factory->make("home")
            ->with("activities", ActivityResource::collection($activities)->resolve())
            ->with("references", $references)
            ->with("caseStudy", $caseStudy)
            ->with("referencesCount", $referencesCount);
    }
}

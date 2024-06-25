<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Models\Reference;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Factory $factory, Request $request): View
    {
        $references = Reference::query()->where("published", true)->get();
        $locale = $request->getLocale();

        $caseStudy = json_decode(file_get_contents(public_path("main_case_study.json")), true)[$locale];
        $articles = json_decode(file_get_contents(public_path("articles.json")), true);
        $referencesCount = $references->count();

        return $factory->make("home")
            ->with("references", $references)
            ->with("caseStudy", $caseStudy)
            ->with("articles", $articles)
            ->with("referencesCount", $referencesCount);
    }
}

<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Models\Reference;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function __invoke(Factory $factory): View
    {
        $references = Reference::query()->where("published", true)->get();
        $locale = App::currentLocale();

        $caseStudy = $locale === "en" ? json_decode(file_get_contents(public_path("main_case_study.json")), true)["en"] : json_decode(file_get_contents(public_path("main_case_study.json")), true)["pl"];
        $articles = json_decode(file_get_contents(public_path("articles.json")), true);
        $referencesCount = count($references);

        return $factory->make("home")
            ->with("references", $references)
            ->with("caseStudy", $caseStudy)
            ->with("articles", $articles)
            ->with("referencesCount", $referencesCount);
    }
}

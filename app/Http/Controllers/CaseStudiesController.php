<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Models\CaseStudy;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;

class CaseStudiesController extends Controller
{
    public function index(Factory $factory): View
    {
        $caseStudies = CaseStudy::query()->where("published", true)->get();

        return $factory->make("case-studies")
            ->with("caseStudies", $caseStudies);
    }

    public function get(Factory $factory, string $slug): View
    {
        $locale = App::getLocale();

        $caseStudy = CaseStudy::query()
            ->where("slug->{$locale}", $slug)
            ->firstOrFail();
        $view = preg_replace('/\.blade\.php$/', "", $caseStudy->template);

        return $factory->make("case-studies/$view")
            ->with("caseStudy", $caseStudy);
    }
}

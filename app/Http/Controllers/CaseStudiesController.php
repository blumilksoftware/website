<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Models\CaseStudy;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CaseStudiesController extends Controller
{
    public function index(Factory $factory): View
    {
        $caseStudies = CaseStudy::query()->where("published", true)->paginate(4);

        return $factory->make("projects")
            ->with("caseStudies", $caseStudies);
    }

    public function get(Factory $factory, string $slug): View
    {
        $caseStudy = CaseStudy::query()->where("slug", $slug)->firstOrFail();

        $view = preg_replace('/\.blade\.php$/', "", $caseStudy->template);

        $locale = app()->getLocale();

        return $factory->make("case-studies/$view")
            ->with("caseStudy", $caseStudy)
            ->with("locale", $locale);
    }
}

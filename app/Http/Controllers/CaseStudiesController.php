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
        $caseStudies = CaseStudy::all()->where("published", true);

        return $factory->make("case_studies", compact("caseStudies"));
    }

    public function get(Factory $factory, string $slug): View
    {
        $caseStudy = CaseStudy::where("slug", $slug)->firstOrFail();
        $view = preg_replace('/\.blade\.php$/', "", $caseStudy->template);

        return $factory->make("case-studies/$view", compact("caseStudy"));
    }
}

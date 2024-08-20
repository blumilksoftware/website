<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProjectsController extends Controller
{
    public function index(Factory $factory): View
    {
        $projects = Project::query()->where("published", true)->paginate(4);

        return $factory->make("projects")
            ->with("projects", $projects);
    }

    public function get(Factory $factory, string $slug): View
    {
        $project = Project::query()->where("slug", $slug)->firstOrFail();

        $view = "projects/" . $project->template;
        $view = $factory->exists($view) ? $view : "projects/base-template";

        $locale = app()->getLocale();

        return $factory->make($view)
            ->with("project", $project)
            ->with("locale", $locale);
    }
}

<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Models\Reference;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request, Factory $factory): View
    {
        $clients = config("clients");
        $references = Reference::query()->where("published", true)->orderBy("sort_order")->get();

        return $factory->make("home")
            ->with("references", $references)
            ->with("clients", $clients);
    }

    public function eduLanding(): View
    {
        return view("edulanding/edu-landing");
    }
}

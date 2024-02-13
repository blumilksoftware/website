<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers\Dashboard;

use Blumilk\Website\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function __invoke(Factory $factory): View
    {
        return $factory->make("dashboard.dashboard");
    }
}

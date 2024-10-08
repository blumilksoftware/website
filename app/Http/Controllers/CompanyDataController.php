<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CompanyDataController extends Controller
{
    public function __invoke(Factory $factory): View
    {
        return $factory->make("company-data");
    }
}

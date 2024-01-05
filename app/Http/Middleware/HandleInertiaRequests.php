<?php

declare(strict_types=1);

namespace BlumilkWebsite\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = "app";

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), []);
    }
}

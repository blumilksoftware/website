<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use CodeZero\LocalizedRoutes\Controllers\FallbackController as OriginalFallbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Translation\Translator;

class FallbackController extends OriginalFallbackController
{
    public function __construct(
        protected Translator $translator,
        protected Request $request,
    ) {}

    protected function redirectResponse()
    {
        if (!$this->shouldRedirect()) {
            return false;
        }

        $localizedUrl = Route::localizedUrl();
        $route = $this->findRouteByUrl($localizedUrl);

        if ($route->isFallback) {
            return false;
        }

        return Redirect::to($route->uri(), $this->getRedirectStatusCode())
            ->header("Cache-Control", "no-store, no-cache, must-revalidate");
    }

    protected function findRouteByUrl(string $url): \Illuminate\Routing\Route
    {
        $parts = explode("/", $url);
        $path = implode("/", array_splice($parts, 4));
        $url = $this->translator->uri($path);

        $domain = implode("/", array_splice($parts, -4));

        return Route::getRoutes()->match(Request::create($domain . "/" . $url));
    }
}

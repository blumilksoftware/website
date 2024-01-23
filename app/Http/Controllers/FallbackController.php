<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use CodeZero\LocalizedRoutes\Controllers\FallbackController as OriginalFallbackController;
use CodeZero\LocalizedRoutes\LocalizedUrlGenerator;
use CodeZero\UriTranslator\UriTranslator;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class FallbackController extends OriginalFallbackController
{
    public function __construct(
        protected Router $router,
        protected LocalizedUrlGenerator $urlGenerator,
        protected UriTranslator $translator,
    ) {}

    protected function redirectResponse(): RedirectResponse|false
    {
        if (!$this->shouldRedirect()) {
            return false;
        }

        $localizedUrl = $this->urlGenerator->generateFromRequest();
        $route = $this->findRouteByUrl($localizedUrl);

        if ($route->isFallback) {
            return false;
        }

        return Redirect::to($route->uri(), $this->getRedirectStatusCode())
            ->header("Cache-Control", "no-store, no-cache, must-revalidate");
    }

    protected function findRouteByUrl(string $url): Route
    {
        $parts = explode("/", $url);
        $path = implode("/", array_splice($parts, 4));
        $url = $this->translator->translate($path);

        $domain = implode("/", array_splice($parts, -4));

        return $this->router->getRoutes()->match(Request::create($domain . "/" . $url));
    }
}

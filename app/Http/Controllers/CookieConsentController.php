<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Requests\CookieConsentRequest;
use Illuminate\Contracts\Cookie\Factory as CookieFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieConsentController extends Controller
{
    public const string COOKIE_NAME = "cookie_consent";
    public const int COOKIE_MINUTES = 60 * 24 * 90;

    public function __invoke(CookieConsentRequest $request, CookieFactory $cookie): Response
    {
        return response()->noContent()->withCookie(
            $cookie->make(self::COOKIE_NAME, $request->validated("consent"), self::COOKIE_MINUTES),
        );
    }

    public static function current(Request $request): string
    {
        $consent = $request->cookie(self::COOKIE_NAME);

        return in_array($consent, CookieConsentRequest::CONSENTS, true) ? $consent : "unknown";
    }
}

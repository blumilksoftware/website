<?php

declare(strict_types=1);

namespace Blumilk\Website\Providers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /** @var Request $request */
        $request = app("request");

        if ($request->getRequestUri() === "/" && str_starts_with($request->header("Accept-Language", default: ""), "pl")) {
            $request->setLocale("pl");
            app()->setLocale("pl");
        }

        $this->app["validator"]->extend("recaptchav3", function ($attribute, $value, $parameters) {
            $action = $parameters[0];
            $minScore = isset($parameters[1]) ? (float)$parameters[1] : 0.5;

            try {
                $score = RecaptchaV3::verify($value, $action);

                return $score && $score >= $minScore;
            } catch (Exception) {
                return false;
            }
        });
    }
}

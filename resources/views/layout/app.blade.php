<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">
    <head>
        <title>Blumilk</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/krzysztofrewak/flat-flags-iconset@latest/style.css">
        @vite("resources/js/app.ts")
    </head>
    <body>

        <div class="p-12 flex justify-center gap-4">
            <a href="{{ route("home") }}">{{ __("content.pages.home") }}</a>
            <a href="{{ route("home") }}">{{ __("content.pages.about") }}</a>
            <a href="{{ route("home") }}">{{ __("content.pages.case_study") }}</a>
            <a href="{{ route("home") }}">{{ __("content.pages.partners") }}</a>
            <a href="{{ route("home") }}">{{ __("content.pages.career") }}</a>
            <a href="{{ route("contact") }}">{{ __("content.pages.contact") }}</a>

            <div class="flex-1 flex justify-end gap-4">
                @foreach(LocaleConfig::getLocales() as $locale)
                    @if (!App::isLocale($locale))
                        <a href="{{ route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale) }}">
                            <i class="large {{ $locale === "en" ? "gb" : $locale }} flat flag"></i> </a>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="p-12">
            @yield("content")
        </div>
    </body>
</html>

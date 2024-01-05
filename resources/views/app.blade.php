<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/krzysztofrewak/flat-flags-iconset@latest/style.css">
    @vite("resources/js/app.ts")
    @inertiaHead
</head>
<body>
    @if (Route::isLocalized() || Route::isFallback())
        <ul class="p-4 top-0 right-0 absolute">
            @foreach(LocaleConfig::getLocales() as $locale)
                @if ( ! App::isLocale($locale))
                    <li>
                        <a href="{{ route(Route::currentRouteName(), [], true, $locale) }}">
                            <i class="shadow-lg large {{ $locale === "en" ? "gb" : $locale }} flat flag"></i>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif

    @inertia
</body>
</html>

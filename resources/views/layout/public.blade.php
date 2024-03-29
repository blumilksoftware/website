<!doctype html>
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
    <div class="left-0 right-0 bg-background">
        @include("layout.navigation")
        <div class="min-height-100vh pl-52 pr-52">
        @yield("content")
        </div>
        @include("layout.footer")
    </div>
    </body>
</html>

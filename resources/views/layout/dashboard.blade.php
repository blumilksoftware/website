<!doctype html>
<html lang="{{ App::currentLocale() }}">
    <head>
        <title>Blumilk</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
        @vite("resources/js/app.ts")
    </head>
    <body>
        <div class="p-12">
            @yield("content")
        </div>
    </body>
</html>

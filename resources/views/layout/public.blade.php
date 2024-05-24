<!doctype html>
<html lang="{{ App::currentLocale() }}">
    <head>
        <title>Blumilk</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/krzysztofrewak/flat-flags-iconset@latest/style.css">
        @vite("resources/js/app.ts")
        <script src="https://kit.fontawesome.com/f6187d55ef.js" crossorigin="anonymous"></script>
        <script>document.documentElement.classList.add('js')</script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    </head>
    <body>
    <div class="font-sora">
        @include("layout.navigation")
        <div class="min-height-100vh relative z-10 font-sora">
        @yield("content")
        </div>
        @include("layout.footer")
    </div>
    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    </body>
</html>

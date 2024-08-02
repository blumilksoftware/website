<!doctype html>
<html lang="{{ App::currentLocale() }}">

<head>
    <title>@yield('title') - Blumilk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content=@yield('description')>
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="{{ asset('identification/sygnet.svg') }}" type="image/x-icon">
    @vite('resources/js/app.ts')
    <script src="https://kit.fontawesome.com/f6187d55ef.js" crossorigin="anonymous"></script>
    <script>
        document.documentElement.classList.add('js')
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <script src='https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.css' rel='stylesheet' />

</head>

<body class="font-sora">
    <div class="relative z-30">
        @include('layout.navigation')
    </div>
    <div class="relative 2xl:max-w-screen-3xl 2xl:mx-auto">
        <div class="absolute -z-10 left-[8%] md:-left-0 top-16">
            <x-bubble size="100"/>
        </div>
        <div class="absolute left-[8%] md:left-[6%] top-10">
            <x-bubble size="50"/>
        </div>
        <div class="absolute -z-10 hidden lg:block -left-[10%] lg:-left-[3%] top-[600px]">
            <x-bubble size="250"/>
        </div>
        <div class="absolute right-[8%] md:right-[12%] top-0">
            <x-bubble size="50"/>
        </div>
        <div class="absolute -z-10 right-14 md:right-[5%] top-[480px]">
            <x-bubble size="110"/>
        </div>
        <div class="absolute -z-10 hidden lg:block -right-[10%] lg:right-[4%] top-[650px]">
            <x-bubble size="210"/>
        </div>
    </div>
    <div class="min-h-screen z-20 overflow-hidden">
        @yield('content')
    </div>
    @if (!isset($excludeFooter) || !$excludeFooter)
        @include('layout.footer')
    @endif
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>

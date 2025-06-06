<!doctype html>
<html lang="{{ App::currentLocale() }}">

<head>
    <title>@yield('title') - Blumilk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="QCB2LFVYnUSGvJgRjtceHW6LDr8p8ksYCWAVDTcYyTM" />
    @yield('meta')
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />

    <script src='https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.css' rel='stylesheet'/>
    <script
        defer src="https://analytics.blumilk.pl/script.js"
        data-website-id="a60fb021-70a4-4829-9209-a690f6fcb79f"
        data-domains="blumilk.pl">
    </script>
    {!! RecaptchaV3::initJs() !!}
</head>

<body class="font-sora flex flex-col h-screen justify-between">
    <div class="relative z-10">
        @include('layout.navigation')
    </div>
    <div class="my-auto">
        <div class="relative hidden sm:block -z-10 2xl:max-w-screen-3xl mx-auto">
            <div class="absolute left-[8%] md:-left-0 top-28 xl:top-16">
                <x-bubble size="100"/>
            </div>
            <div class="absolute left-[8%] md:left-[6%] top-10">
                <x-bubble size="50"/>
            </div>
            <div class="absolute right-[8%] md:right-[12%] top-0">
                <x-bubble size="50"/>
            </div>

            @if (!@isset($excludeBigBubbles) || !$excludeBigBubbles)
                <div class="absolute right-14 md:right-[5%] top-[480px]">
                    <x-bubble size="110"/>
                </div>
                <div class="absolute hidden lg:block -right-[10%] lg:right-[4%] top-[650px]">
                    <x-bubble size="210"/>
                </div>
                <div class="absolute hidden lg:block -left-[10%] lg:-left-[3%] top-[600px]">
                    <x-bubble size="250"/>
                </div>
            @endif
        </div>
        @yield('content')
        @include('components.cookies')
    </div>

    @include('layout.footer')
</body>

</html>

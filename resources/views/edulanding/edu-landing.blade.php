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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />

    {!! RecaptchaV3::initJs() !!}
</head>

<body class="font-outfit flex flex-col h-screen justify-between">
<div class="relative z-10">
    @include('edulanding.navigation')
        <section id="key_benefits" class="bg-white">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 py-24 grid grid-cols-1 lg:grid-cols-2 items-center gap-12">
                <div>
                    <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start">
                    <h2 class="font-semibold text-gray-900 leading-7 md:leading-tight">
                        <span class="block">{{ __("edulanding.hero_section.title_1") }}</span>
                        <span class="text-edu-normal block"> {{ __("edulanding.hero_section.title_2") }} </span>
                        <span class="block">{{ __("edulanding.hero_section.title_3") }}</span>
                    </h2>
                    </div>
                    <p class="mt-6 text-lg text-gray-600 max-w-xl">
                        {{ __("edulanding.hero_section.description") }}
                    </p>
                    <a href="#"
                       class="mt-10 inline-flex items-center gap-2 bg-edu-normal text-white text-base font-medium px-6 py-3 rounded-lg shadow hover:bg-edu-dark transition">
                        {{ __("edulanding.hero_section.button") }}
                        <i class="ti ti-arrow-right"></i>
                    </a>
                </div>
                <div>
                    <img src="{{ asset('images/edulanding/hero-section.webp') }}"
                         alt=""
                         class="rounded-[32px] w-full h-auto object-cover"/>
                </div>
            </div>
        </section>
    <div id="our_solutions">
        Co oferujemy?
    </div>
    <div id="case_studies">
        Realizacje
    </div>
    <div id="contact">
        Kontakt
    </div>
</div>
</body>

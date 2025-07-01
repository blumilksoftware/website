<!doctype html>
<html lang="{{ App::currentLocale() }}">

<head>
    <title>@yield('title') - Blumilk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="QCB2LFVYnUSGvJgRjtceHW6LDr8p8ksYCWAVDTcYyTM"/>
    @yield('meta')
    <link rel="shortcut icon" href="{{ asset('identification/sygnet.svg') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/f6187d55ef.js" crossorigin="anonymous"></script>
    @vite('resources/js/app.ts')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"/>

    {!! RecaptchaV3::initJs() !!}
</head>

<body class="font-outfit flex flex-col h-screen justify-between">
<div class="relative z-20">
    @include('edulanding.navigation')
    <section class="relative flex flex-col xl:flex-row items-center justify-center pt-8 xl:pt-24 pb-16 sm:pb-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:gap-6">
        <div class="text-4xl flex flex-col md:text-5xl lg:text-6xl text-center justify-center items-center gap-y-3 lg:gap-y-6">
            <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                <span class="text-k1 inline">{{ __("edulanding.k1.hero_section.title_1") }}</span>
                <span class="inline"> {{ __("edulanding.k1.hero_section.title_2") }} </span>
            </h2>
            <p class="leading-6 sm:leading-7 font-light text-sm sm:text-md tablet:text-lg lg:text-xl text-edu-gray max-w-4xl text-center">
                {{ __("edulanding.k1.hero_section.description") }}
            </p>
            <div class="border border-gray-extra-dark shadow-md rounded-2xl">
                <img src="{{ asset('images/edulanding/k1-desktop.webp') }}" alt="" class="object-cover mx-auto rounded-2xl"/>
            </div>

        </div>
    </section>
    <section class="relative">
        <div class="mx-[10%] 2xl:max-w-[1200px] 2xl:mx-auto space-y-10 pt-8 sm:pt-20 lg:pt-40 lg:pb-28 pb-10">
            <div class="pb-6 flex text-center flex-col items-center gap-y-6">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="inline">{{ __("edulanding.k1.challenges.title") }}</span>
                    </h2>
                </div>
                <div
                    class="font-light leading-7 text-sm sm:text-md lg:text-lg text-edu-gray max-w-4xl">{{ __("edulanding.k1.challenges.description") }}</div>
            </div>
            <div class="flex flex-col gap-4 2xl:gap-12">
                <div class="flex flex-col xl:flex-row xl:justify-between gap-4 2xl:gap-12">
                    <x-edulanding.tile title="{{ __('edulanding.k1.challenges.tile_1.title') }}"
                                       description="{{ __('edulanding.k1.challenges.tile_1.description') }}"
                                       class="bg-k1-light xl:w-1/3">
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.k1.challenges.tile_2.title') }}"
                                       description="{{ __('edulanding.k1.challenges.tile_2.description') }}"
                                       class="bg-edu-gray-light xl:w-1/3">
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.k1.challenges.tile_3.title') }}"
                                       description="{{ __('edulanding.k1.challenges.tile_3.description') }}"
                                       class="bg-k1-light xl:w-1/3">
                    </x-edulanding.tile>
                </div>
                <div class="flex flex-col xl:flex-row xl:justify-center gap-4 2xl:gap-12">
                   <x-edulanding.tile title="{{ __('edulanding.k1.challenges.tile_4.title') }}"
                                      description="{{ __('edulanding.k1.challenges.tile_4.description') }}"
                                      class="bg-k1-light xl:max-w-[32%]">
                   </x-edulanding.tile>
                   <x-edulanding.tile title="{{ __('edulanding.k1.challenges.tile_5.title') }}"
                                      description="{{ __('edulanding.k1.challenges.tile_5.description') }}"
                                      class="bg-edu-gray-light xl:max-w-[32%]">
                   </x-edulanding.tile>
               </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="px-4 sm:px-6 lg:px-12 2xl:max-w-[1200px] mx-auto space-y-10 py-8 sm:pt-20 lg:pb-28">
            <div class="flex text-center flex-col items-center gap-y-6 lg:gap-y-12">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="inline">{{ __("edulanding.k1.features.title") }}</span>
                    </h2>
                </div>
                <p class="leading-7 text-sm sm:text-lg text-edu-gray max-w-4xl text-center">
                    {{ __("edulanding.k1.features.description") }}
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-4 xl:place-items-stretch max-w-4xl mx-auto lg:mt-20">
                <x-edulanding.card title="{{ __('edulanding.k1.features.tile_1') }}" class="bg-k1-light">
                    <i class="ti ti-device-desktop text-2xl text-k1"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.k1.features.tile_2') }}" class="bg-k1-light">
                    <i class="ti ti-database text-2xl text-k1"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.k1.features.tile_3') }}" class="bg-k1-light">
                    <i class="ti ti-robot text-2xl text-k1"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.k1.features.tile_4') }}" class="bg-k1-light">
                    <i class="ti ti-info-square text-2xl text-k1"></i>
                </x-edulanding.card>
                <div class="md:col-span-2">
                    <x-edulanding.card title="{{ __('edulanding.k1.features.tile_5') }}" class="bg-k1-light">
                    <i class="ti ti-calendar-week text-2xl text-k1"></i>
                    </x-edulanding.card>
                </div>
            </div>
        </div>
        <section class="relative">
            <div class="mx-[10%] 2xl:max-w-[1200px] 2xl:mx-auto space-y-10 pt-8 sm:pt-20 lg:pt-40 lg:pb-28 pb-10">
                <div class="pb-6 flex text-center flex-col items-center gap-y-6">
                    <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                        <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                            <span class="text-k1 inline">{{ __("edulanding.k1.benefits.title_1") }}</span>
                            <span class="inline"> {{ __("edulanding.k1.benefits.title_2") }} </span>
                        </h2>
                    </div>
                    <div
                        class="font-light leading-7 text-sm sm:text-md lg:text-lg text-edu-gray max-w-3xl">{{ __("edulanding.k1.benefits.description") }}</div>
                </div>
                <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-12 xl:place-items-stretch">
                    <x-edulanding.tile title="{{ __('edulanding.k1.benefits.tile_1') }}" class="xl:col-span-2">
                        <x-edulanding.progress-circle :value="80" color="text-k1"/>
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.k1.benefits.tile_2') }}" class="xl:col-span-2">
                        <x-edulanding.progress-circle :value="70" color="text-k1"/>
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.k1.benefits.tile_3') }}" class="xl:col-span-2">
                        <x-edulanding.progress-circle :value="90" color="text-k1"/>
                    </x-edulanding.tile>

                    <x-edulanding.tile title="{{ __('edulanding.k1.benefits.tile_4') }}" class="xl:col-span-3">
                        <x-edulanding.progress-circle :value="100" color="text-k1"/>
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.k1.benefits.tile_5') }}" class="xl:col-span-3">
                        <x-edulanding.progress-circle :value="100" color="text-k1"/>
                    </x-edulanding.tile>
                </div>
            </div>
        </section>
        <section>
            <img src="{{ asset('images/edulanding/k1-laptop.webp') }}" alt="" class="w-full object-cover h-auto"/>
        </section>
        <section class="mt-8 lg:mt-48 lg:mb-8">
            <img src="{{ asset('images/edulanding/k1-architecture-'.$locale.'.webp') }}" alt="" class="h-auto mx-auto"/>
        </section>

        <x-edulanding.security-tile
            :title="__('edulanding.k1.security.title')"
            :description="__('edulanding.k1.security.description')"
        />
        <x-edulanding.contact-form
            :title="__('edulanding.k1.contact.title')"
            :description="__('edulanding.k1.contact.description')"
        />
    @include('layout.footer')
</div>
</body>

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
                <span class="text-edu-normal inline">{{ __("edulanding.erasmus.hero_section.title_1") }}</span>
                <span class="inline"> {{ __("edulanding.erasmus.hero_section.title_2") }} </span>
            </h2>
            <p class="leading-6 sm:leading-7 font-light text-sm sm:text-md tablet:text-lg lg:text-xl text-edu-gray max-w-4xl text-center">
                {{ __("edulanding.erasmus.hero_section.description") }}
            </p>
            <div class="rounded-xl p-2 border border-gray-extra-dark shadow-md mt-2 lg:mt-8">
                <img src="{{ asset('images/edulanding/erasmus-desktop.webp') }}" alt="" class="w-full max-w-4xl aspect-[3/2] object-cover mx-auto"/>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="mx-[10%] 2xl:max-w-[1200px] 2xl:mx-auto space-y-10 pt-8 sm:pt-20 lg:pt-40 lg:pb-28 pb-10">
            <div class="pb-6 flex text-center flex-col items-center gap-y-6">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="inline">{{ __("edulanding.erasmus.challenges.title") }}</span>
                    </h2>
                </div>
                <div
                    class="font-light leading-7 text-sm sm:text-md lg:text-lg text-edu-gray max-w-4xl">{{ __("edulanding.erasmus.challenges.description") }}</div>
            </div>
            <div class="grid xl:grid-cols-3 gap-4 2xl:gap-12 xl:place-items-stretch">
                <x-edulanding.tile title="{{ __('edulanding.erasmus.challenges.tile_1.title') }}"
                                   description="{{ __('edulanding.erasmus.challenges.tile_1.description') }}"
                                   class="bg-edu-light">
                </x-edulanding.tile>
                <x-edulanding.tile title="{{ __('edulanding.erasmus.challenges.tile_2.title') }}"
                                   description="{{ __('edulanding.erasmus.challenges.tile_2.description') }}"
                                   class="bg-edu-gray-light">
                </x-edulanding.tile>
                <x-edulanding.tile title="{{ __('edulanding.erasmus.challenges.tile_3.title') }}"
                                   description="{{ __('edulanding.erasmus.challenges.tile_3.description') }}"
                                   class="bg-edu-light">
                </x-edulanding.tile>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="px-4 sm:px-6 lg:px-12 2xl:max-w-[1200px] mx-auto space-y-10 py-8 sm:pt-20 lg:pb-28">
            <div class="flex text-center flex-col items-center gap-y-6 lg:gap-y-12">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="inline">{{ __("edulanding.erasmus.features.title") }}</span>
                    </h2>
                </div>
                <p class="leading-7 text-sm sm:text-lg text-edu-gray max-w-4xl text-center">
                    {{ __("edulanding.erasmus.features.description_1") }}
                    <span class="font-semibold">
                    {{ __("edulanding.erasmus.features.description_2") }}
                    </span>
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-4 xl:place-items-stretch max-w-4xl mx-auto lg:mt-20">
                <x-edulanding.card title="{{ __('edulanding.erasmus.features.tile_1') }}">
                    <i class="ti ti-device-mobile text-2xl text-edu-dark"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.erasmus.features.tile_2') }}">
                    <i class="ti ti-info-square text-2xl text-edu-dark"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.erasmus.features.tile_3') }}">
                    <i class="ti ti-clipboard text-2xl text-edu-dark"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.erasmus.features.tile_4') }}">
                    <i class="ti ti-database text-2xl text-edu-dark"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.erasmus.features.tile_5') }}">
                    <i class="ti ti-device-desktop text-2xl text-edu-dark"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.erasmus.features.tile_6') }}">
                    <i class="ti ti-refresh text-2xl text-edu-dark"></i>
                </x-edulanding.card>
            </div>
        </div>
        <section class="relative">
            <div class="mx-[10%] 2xl:max-w-[1200px] 2xl:mx-auto space-y-10 pt-8 sm:pt-20 lg:pt-40 lg:pb-28 pb-10">
                <div class="pb-6 flex text-center flex-col items-center gap-y-6">
                    <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                        <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                            <span class="text-edu-normal inline">{{ __("edulanding.erasmus.benefits.title_1") }}</span>
                            <span class="inline"> {{ __("edulanding.erasmus.benefits.title_2") }} </span>
                        </h2>
                    </div>
                    <div
                        class="font-light leading-7 text-sm sm:text-md lg:text-lg text-edu-gray max-w-3xl">{{ __("edulanding.erasmus.benefits.description") }}</div>
                </div>
                <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-12 xl:place-items-stretch">
                    <x-edulanding.tile title="{{ __('edulanding.erasmus.benefits.tile_1') }}" class="xl:col-span-2">
                        <x-edulanding.progress-circle :value="80"/>
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.erasmus.benefits.tile_2') }}" class="xl:col-span-2">
                        <x-edulanding.progress-circle :value="70"/>
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.erasmus.benefits.tile_3') }}" class="xl:col-span-2">
                        <x-edulanding.progress-circle :value="90"/>
                    </x-edulanding.tile>

                    <x-edulanding.tile title="{{ __('edulanding.erasmus.benefits.tile_4') }}" class="xl:col-span-3">
                        <x-edulanding.progress-circle :value="100"/>
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.erasmus.benefits.tile_5') }}" class="xl:col-span-3">
                        <x-edulanding.progress-circle :value="100"/>
                    </x-edulanding.tile>
                </div>
            </div>
        </section>
        <section>
            <img src="{{ asset('images/edulanding/erasmus-mobile.webp') }}" alt="" class="w-full object-cover h-auto"/>
        </section>
        <section>
            <div class="mx-[10%] 2xl:max-w-[1200px] 2xl:mx-auto space-y-10 lg:space-x-32 pt-8 mt-16 md:mt-48 lg:mt-54 flex flex-col lg:flex-row items-stretch">
                <div class="bg-edu-light rounded-xl px-4 lg:px-16 lg:pt-16 overflow-visible relative">
                    <img src="{{ asset('images/edulanding/scientific-publication.webp') }}" alt="" class="max-w-[200px] lg:max-w-md -mt-8 lg:-mt-36 mx-auto"/>
                </div>
                <div class="flex flex-col gap-y-4 my-auto">
                 <div class="uppercase text-edu-normal font-bold">{{ __('edulanding.erasmus.scientific_publication.label') }}</div>
                    <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-edu-gray-dark leading-7 md:leading-tight">{{ __('edulanding.erasmus.scientific_publication.title') }}</h2>
                <div class="leading-7 text-sm sm:text-lg text-edu-gray lg:max-w-xl">
                    <span class="font-semibold"> {{ __('edulanding.erasmus.scientific_publication.description_1') }}</span>
                     {{ __('edulanding.erasmus.scientific_publication.description_2') }}
                </div>
                    <a href="https://ludzie.nauka.gov.pl/ln/profiles/krzysztof.rewak.J7BAUthOF6v/publications/866d4a86-ca9d-45ab-a5a1-2b417aeb306c" target="_blank" rel="noopener noreferrer" class="text-edu-normal font-semibold underline hover:text-edu-dark break-all">
                        https://ludzie.nauka.gov.pl/ln/profiles/krzysztof.rewak.J7BAUthOF6v/publications/866d4a86-ca9d-45ab-a5a1-2b417aeb306c
                    </a>
                    <div class="font-semibold text-md lg:text-lg">{{ __('edulanding.erasmus.scientific_publication.authors') }} Krzysztof Rewak, Kamil Piech</div>
             </div>
            </div>
        </section>
        <x-edulanding.security-tile
            :title="__('edulanding.erasmus.security.title')"
            :description="__('edulanding.erasmus.security.description')"
        />
        <x-edulanding.contact-form
        :title="__('edulanding.erasmus.contact.title')"
        :description="__('edulanding.erasmus.contact.description')"
        />
    @include('layout.footer')
</div>
</body>

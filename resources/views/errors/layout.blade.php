<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title') - Blumilk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="{{ asset('identification/sygnet.svg') }}" type="image/x-icon">
    @vite('resources/js/app.ts')
    <script src="https://kit.fontawesome.com/f6187d55ef.js" crossorigin="anonymous"></script>
    <script>
        document.documentElement.classList.add('js');
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
</head>

<body class="font-sora flex flex-col h-screen justify-between">
<div class="relative z-10">
    @php
        $currentLocale = app()->getLocale();
        $suffix = str_replace(url("/"), "", url()->current());

        foreach ( LocaleConfig::getLocales() as $locale )
            {
                $suffix = str_replace("/".$locale."/", "/", $suffix);
            }
    @endphp

    <nav x-data="{ openLang: false, openMobileMenu: false }" class="w-auto">
        <div :class="{'flex': ! openMobileMenu, 'hidden': openMobileMenu}"
             class="flex items-center justify-between px-14 md:px-6 2xl:px-0 py-8 relative mx-auto max-w-7xl">
            <div>
                <a class="tablet:hidden lg:block items-start" href="{{ route('home') }}">
                    <img class="w-32 shrink-0" src="{{ asset('identification/logo.svg') }}" alt="Blumilk"/>
                </a>
                <a class="hidden tablet:block lg:hidden items-start" href="{{ route('home') }}">
                    <img class="h-8" src="{{ asset('identification/sygnet.svg') }}" alt="Blumilk"/>
                </a>
            </div>
            <div class="tablet:flex hidden justify-center items-center text-sm 3xl:text-md">
                <div class="font-medium flex items-center text-center gap-2">
                    <a href="{{ route('about') }}" class="hover:text-website-normal rounded-3xl px-2">
                        {{ __("content.pages.about") }}
                    </a>
                    <a href="{{ route('projects') }}" class="hover:text-website-normal rounded-3xl px-2">
                        {{ __("content.pages.projects") }}
                    </a>
                    <a href="{{ route('career') }}" class="hover:text-website-normal rounded-3xl px-2">
                        {{ __("content.pages.career") }}
                    </a>
                    <a href="{{ route('news') }}" class="hover:text-website-normal rounded-3xl px-2">
                        {{ __("content.pages.news") }}
                    </a>
                    <a href="{{ route('contact') }}" class="hover:text-website-normal rounded-3xl px-2">
                        {{ __("content.pages.contact") }}
                    </a>
                </div>
            </div>
            <div class="tablet:flex hidden gap-4">
                <div class="items-center">
                    <x-small-primary-button href="{{ route('contact') }}">{{ __("buttons.lets_talk") }}</x-small-primary-button>
                </div>
                <div class="relative inline-block text-left">
                    <button type="button"
                            @click="openLang = ! openLang"
                            class="flex rounded-lg h-full items-center place-content-center gap-x-1.5 bg-white px-4 py-2 text-sm 3xl:text-md font-semibold text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 uppercase"
                            id="desktopLocalesButton" aria-expanded="true" aria-haspopup="true">
                        {{ $currentLocale }}
                        <i :class="{'rotate-0': openLang, 'rotate-180': ! openLang}" class="fa-solid fa-chevron-up text-gray-500"></i>
                    </button>
                    <div id="desktopLocalesMenu"
                         :class="{'block': openLang, 'hidden': ! openLang}"
                         class="hidden absolute right-0 z-10 w-full mt-2 origin-top-right bg-white shadow-lg ring-1 ring-black ring-opacity-5 rounded-lg focus:outline-none"
                         tabindex="-1">
                        <div class="text-start" role="none">
                            @foreach ( LocaleConfig::getLocales() as $locale )
                                <a href="{{ url($locale) . $suffix }}"
                                   class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-light uppercase"
                                   role="menuitem" tabindex="-1">
                                    {{ $locale }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <button class="flex tablet:hidden" @click="openMobileMenu = ! openMobileMenu">
                <i :class="{'block': ! openMobileMenu, 'hidden': openMobileMenu}"
                   class="fa-solid fa-bars text-xl text-black block"></i>
            </button>
        </div>
        <nav :class="{'block': openMobileMenu, 'hidden': ! openMobileMenu}"
             class="w-full h-screen px-14 right-0 tablet:hidden flex flex-col justify-between font-semibold text-xl sm:text-2xl text-start items-start"
             x-trap.noscroll="openMobileMenu">

            <div class="w-full">
                <div class="flex items-center justify-between left-0 right-0 py-8 xl:px-[15%] relative">
                    <a class="items-start" href="{{ route('home') }}">
                        <img class="w-32 shrink-0" src="{{ asset('identification/logo.svg') }}" alt="Blumilk"/>
                    </a>
                    <button @click="openMobileMenu = ! openMobileMenu">
                        <i :class="{'block': openMobileMenu, 'hidden': ! openMobileMenu}"
                           class="fa-solid fa-xmark text-xl text-black hidden"></i>
                    </button>
                </div>
                <div class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start">
                    <a href="{{ route('about') }}" class="my-4 p-2 start">
                        {{ __("content.pages.about") }}
                    </a>
                </div>
                <div class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start">
                    <a href="{{ route('projects') }}" class="my-4 p-2">
                        {{ __("content.pages.projects") }}
                    </a>
                </div>
                <div class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start">
                    <a href="{{ route('career') }}" class="my-4 p-2">
                        {{ __("content.pages.career") }}
                    </a>
                </div>
                <div class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start">
                    <a href="{{ route('news') }}" class="my-4 p-2">
                        {{ __("content.pages.news") }}
                    </a>
                </div>
                <div class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start">
                    <a href="{{ route('contact') }}" class="my-4 p-2">
                        {{ __("content.pages.contact") }}
                    </a>
                </div>
                <div class="w-full px-2">
                    <div class="relative flex flex-col text-left">
                        <button type="button"
                                @click="openLang = ! openLang"
                                class="flex w-full h-full justify-between items-center place-content-center gap-x-1.5 mt-4 text-lg sm:text-xl font-semibold text-black hover:text-website-normal uppercase"
                                id="mobileLocalesButton" aria-expanded="true" aria-haspopup="true">
                            {{ $currentLocale }}
                            <i :class="{'rotate-0': openLang, 'rotate-180': ! openLang}" class="fa-solid fa-chevron-up text-gray-500"></i>
                        </button>
                        <div id="mobileLocalesMenu"
                             :class="{'block': openLang, 'hidden': ! openLang}"
                             class="hidden">
                            <div class="text-end" role="none">
                                @foreach ( LocaleConfig::getLocales() as $locale )
                                    <a href="{{ url($locale) . $suffix }}"
                                       class="text-gray-500 block text-lg font-normal pt-4 sm:text-xl hover:text-website-normal uppercase text-start"
                                       role="menuitem" tabindex="-1">
                                        {{ $locale }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full pb-14">
                <x-small-primary-button icon="text" href="{{ route('contact') }}">{{ __("buttons.lets_talk") }}</x-small-primary-button>
            </div>
        </nav>
    </nav>
</div>
<div class="my-auto">
    <div class="relative hidden sm:block -z-10 2xl:max-w-screen-3xl 2xl:mx-auto">
        <div class="absolute left-[8%] md:-left-0 top-28 xl:top-16">
            <x-bubble size="100"/>
        </div>
        <div class="absolute left-[8%] md:left-[6%] top-10">
            <x-bubble size="50"/>
        </div>
        <div class="absolute right-[8%] md:right-[12%] top-0">
            <x-bubble size="50"/>
        </div>
    </div>
    @yield('message')
</div>

@include('layout.footer')
</body>
</html>

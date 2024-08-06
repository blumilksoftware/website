@php
    use Illuminate\Support\Facades\Route;
    $current = substr(Route::currentRouteName(), 3);
@endphp

<nav x-data="{ openLang: false, openMobileMenu: false}"
     class="w-auto bg-navigation">
    <div :class="{'flex': ! openMobileMenu, 'hidden': openMobileMenu}"
         class="flex items-center justify-between px-14 md:px-6 2xl:px-0 py-8 relative mx-auto max-w-7xl">
        <div>
            <a class="tablet:hidden lg:block items-start" href="{{ route("home") }}">
                <img class="w-32 shrink-0" src="{{ asset('identification/logo.svg') }}" alt="Blumilk"/>
            </a>
            <a class="hidden tablet:block lg:hidden items-start" href="{{ route("home") }}">
                <img class="h-8" src="{{ asset('identification/sygnet.svg') }}" alt="Blumilk"/>
            </a>
        </div>
        <div class="tablet:flex hidden justify-center items-center text-sm 3xl:text-md">
            <div class="font-medium flex items-center text-center gap-2">
                <a href="{{ route('about') }}"
                   @class([
                        'hover:text-website-normal rounded-3xl px-2',
                        'text-website-normal' => Str::contains($current, 'about')])>{{ __("content.pages.about") }}
                </a>
                <a href="{{ route('case-studies') }}"
                   @class([
                        'hover:text-website-normal rounded-3xl px-2',
                        'text-website-normal' => Str::contains($current, 'case-studies')])>{{ __("content.pages.case_study") }}
                </a>
                <a href="{{ route('career') }}"
                   @class([
                        'hover:text-website-normal rounded-3xl px-2',
                        'text-website-normal' => Str::contains($current, 'career')])>{{ __("content.pages.career") }}
                </a>
                <a href="{{ route('activities') }}"
                   @class([
                        'hover:text-website-normal rounded-3xl px-2',
                        'text-website-normal' => Str::contains($current, 'activities')])>{{ __("content.pages.activities") }}
                </a>
                <a href="{{ route('contact') }}"
                   @class([
                        'hover:text-website-normal rounded-3xl px-2',
                        'text-website-normal' => Str::contains($current, 'contact')])>{{ __("content.pages.contact") }}
                </a>
            </div>
        </div>
        <div class="tablet:flex hidden gap-4">
            <div class="items-center">
                <x-small-primary-button href="{{ route('contact') }}">{{ __("buttons.lets_talk") }}</x-small-primary-button>
            </div>
            <div class="relative inline-block text-left">
                @foreach(LocaleConfig::getLocales() as $locale)
                    @if (App::isLocale($locale))
                        <button type="button"
                                @click="openLang = ! openLang"
                                class="flex rounded-lg h-full items-center place-content-center gap-x-1.5 bg-white px-4 py-2 text-sm 3xl:text-md font-semibold text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 uppercase"
                                id="desktopLocalesButton" aria-expanded="true" aria-haspopup="true">
                            {{ $locale }}
                            <i :class="{'rotate-0': openLang, 'rotate-180': ! openLang}" class="fa-solid fa-chevron-up text-gray-500"></i>
                        </button>
                    @endif
                @endforeach
                <div id="desktopLocalesMenu"
                     :class="{'block': openLang, 'hidden': ! openLang}"
                     class="hidden absolute right-0 z-10 w-full mt-2 origin-top-right bg-white shadow-lg ring-1 ring-black ring-opacity-5 rounded-lg focus:outline-none"
                     tabindex="-1">
                    <div class="text-start" role="none">
                        @foreach(LocaleConfig::getLocales() as $locale)
                            <a href="{{route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale)}}"
                               class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-light uppercase"
                               role="menuitem" tabindex="-1">
                                {{$locale}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <button class="flex tablet:hidden" @click="openMobileMenu = ! openMobileMenu">
            <i :class="{'block': ! openMobileMenu, 'hidden': openMobileMenu}"
               class="fa-solid fa-bars text-2xl text-brand block"></i>
        </button>
    </div>
    <nav :class="{'block': openMobileMenu, 'hidden': ! openMobileMenu}"
         class="w-full h-screen px-14 right-0 tablet:hidden flex flex-col justify-between font-semibold text-xl sm:text-2xl text-start items-start"
         x-trap.noscroll="openMobileMenu">

        <div class="w-full">
            <div class="flex items-center justify-between left-0 right-0 py-8 xl:px-[15%] relative">
                <a class="items-start" href="{{ route("home") }}">
                    <img class="w-32 shrink-0" src="{{ asset('identification/logo.svg') }}" alt="Blumilk"/>
                </a>
                <button @click="openMobileMenu = ! openMobileMenu">
                    <i :class="{'block': openMobileMenu, 'hidden': ! openMobileMenu}"
                       class="fa-solid fa-xmark text-2xl text-brand hidden"></i>
                </button>
            </div>
            <div @class([
                'w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start',
                'text-website-normal' => Str::contains($current, 'about')])>
                <a href="{{ route('about') }}" class="my-4 p-2 start">
                    {{ __("content.pages.about") }}
                </a>
            </div>
            <div @class([
                'w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start',
                'text-website-normal' => Str::contains($current, 'case-studies')])>
                <a href="{{ route('case-studies') }}" class="my-4 p-2">
                    {{ __("content.pages.case_study") }}
                </a>
            </div>
            <div @class([
                'w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start',
                'text-website-normal' => Str::contains($current, 'career')])>
                <a href="{{ route('career') }}" class="my-4 p-2">
                    {{ __("content.pages.career") }}
                </a>
            </div>
            <div @class([
                'w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start',
                'text-website-normal' => Str::contains($current, 'activities')])>
                <a href="{{ route('activities') }}" class="my-4 p-2">
                    {{ __("content.pages.activities") }}
                </a>
            </div>
            <div @class([
                'w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start',
                'text-website-normal' => Str::contains($current, 'contact')])>
                <a href="{{ route('contact') }}" class="my-4 p-2">
                    {{ __("content.pages.contact") }}
                </a>
            </div>
            <div class="w-full px-2">
                <div class="relative flex flex-col text-left">
                    @foreach(LocaleConfig::getLocales() as $locale)
                        @if (App::isLocale($locale))
                            <button type="button"
                                    @click="openLang = ! openLang"
                                    class="flex w-full h-full justify-between items-center place-content-center gap-x-1.5 mt-4 text-lg sm:text-xl font-semibold text-black hover:text-website-normal uppercase"
                                    id="mobileLocalesButton" aria-expanded="true" aria-haspopup="true">
                                {{ $locale }}
                                <i :class="{'rotate-0': openLang, 'rotate-180': ! openLang}" class="fa-solid fa-chevron-up text-gray-500"></i>
                            </button>
                        @endif
                    @endforeach
                    <div id="mobileLocalesMenu"
                         :class="{'block': openLang, 'hidden': ! openLang}"
                         class="hidden">
                        <div class="text-end" role="none">
                            @foreach(LocaleConfig::getLocales() as $locale)
                                <a href="{{route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale)}}"
                                   class="text-gray-500 block text-lg font-normal pt-4 sm:text-xl hover:text-website-normal uppercase text-start"
                                   role="menuitem" tabindex="-1">
                                    {{$locale}}
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

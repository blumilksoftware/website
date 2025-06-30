@php
    use Illuminate\Support\Facades\Route;
    $current = substr(Route::currentRouteName(), 3);
@endphp

<nav x-data="{ openLang: false, openMobileMenu: false, openCaseStudies: false}"
     class="w-auto">
    <div :class="{'flex': ! openMobileMenu, 'hidden': openMobileMenu}"
         class="flex items-center justify-between px-14 md:px-6 2xl:px-0 py-8 relative mx-auto max-w-7xl">
        <div>
            <a class="tablet:hidden lg:block items-start" href="{{ route("home") }}">
                <img class="w-[128px] h-[32px] shrink-0" src="{{ asset('identification/logo.svg') }}" alt="Blumilk logo"/>
            </a>
            <a class="hidden tablet:block lg:hidden items-start" href="{{ route("home") }}">
                <img class="h-[32px] w-[26px]" src="{{ asset('identification/sygnet.svg') }}" alt="Blumilk logo"/>
            </a>
        </div>
        <div class="tablet:flex hidden justify-end items-center text-base text-edu-gray">
            <div class="font-normal flex items-center text-center gap-2">
                <a href="#key_benefits" class="hover:text-edu-gray-dark px-4">
                    {{ __("edulanding.navigation.key_benefits") }}
                </a>
                <a href="#our_solutions" class="hover:text-edu-gray-dark px-4">
                    {{ __("edulanding.navigation.our_solutions") }}
                </a>
                <div class="relative text-start">
                    <button @click="openCaseStudies = !openCaseStudies"
                            class="hover:text-edu-gray-dark px-4 flex items-center gap-1">
                        {{ __("edulanding.navigation.case_studies") }}
                        <i :class="{'rotate-180': openCaseStudies}" class="ti ti-chevron-down"></i>
                    </button>
                    <div
                        x-show="openCaseStudies"
                        @click.away="openCaseStudies = false"
                        x-transition
                        class="absolute left-0 mt-2 w-24 z-50 bg-white shadow-lg/15 rounded-lg px-2 py-3 focus:outline-hidden"
                    >
                        <a href="/k1"
                           class="block px-3 py-2 text-sm text-edu-gray hover:text-edu-gray-dark hover:text-blue-normal">
                            K1
                        </a>
                        <a href="/erasmus"
                           class="block px-3 py-2 text-sm text-edu-gray hover:text-edu-gray-dark hover:text-blue-normal">
                            Erasmus
                        </a>
                    </div>
                </div>
                <a href="#contact" class="hover:text-edu-gray-dark px-4">
                    {{ __("edulanding.navigation.contact") }}
                </a>
            </div>
            <div class="tablet:flex hidden px-2">
                <div class="relative inline-block text-left">
                    @foreach( LocaleConfig::getLocales() as $locale )
                        @if ( App::isLocale($locale) )
                            <button type="button"
                                    @click="openLang = ! openLang"
                                    class="flex rounded-lg h-full items-center place-content-center gap-x-1.5 bg-white px-4 py-2 text-sm 3xl:text-md font-semibold text-edu-gray shadow-xs ring-1 ring-inset ring-gray-300 hover:bg-gray-50 uppercase"
                                    id="desktopLocalesButton" aria-expanded="true" aria-haspopup="true">
                                {{ $locale }}
                                <i :class="{'rotate-180': openLang}" class="ti ti-chevron-down"></i>
                            </button>
                        @endif
                    @endforeach
                    <div id="desktopLocalesMenu"
                         :class="{'block': openLang, 'hidden': ! openLang}"
                         class="hidden absolute right-0 z-10 w-full mt-2 origin-top-right bg-white shadow-lg ring-1 ring-gray-200 ring-opacity-5 rounded-lg focus:outline-hidden"
                         tabindex="-1">
                            <div class="text-start" role="none">
                                @foreach( LocaleConfig::getLocales() as $locale )
                                    <a href="{{ route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale) }}"
                                       class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-light uppercase"
                                       role="menuitem" tabindex="-1">
                                        {{ $locale }}
                                    </a>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="flex tablet:hidden" @click="openMobileMenu = ! openMobileMenu" aria-label="{{ __('alt.openMenu') }}">
            <i :class="{'block': ! openMobileMenu, 'hidden': openMobileMenu}"
               class="ti ti-menu-2 text-2xl text-black block"></i>
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
                       class="ti ti-x text-2xl text-black hidden" aria-label="{{ __('alt.closeMenu') }}"></i>
                </button>
            </div>
            <div @class([
                'w-full group hover:text-blue-normal py-4 text-lg sm:text-xl text-start',
                'text-blue-normal' => Str::contains($current, 'about')])>
                <a href="{{ route('about') }}" class="my-4 p-2 start">
                    {{ __("edulanding.navigation.key_benefits") }}
                </a>
            </div>
            <div @class([
                'w-full group hover:text-blue-normal py-4 text-lg sm:text-xl text-start',
                'text-blue-normal' => Str::contains($current, 'projects')])>
                <a href="{{ route('projects') }}" class="my-4 p-2">
                    {{ __("edulanding.navigation.our_solutions") }}
                </a>
            </div>
            <div @class([
                'w-full group hover:text-blue-normal py-4 text-lg sm:text-xl text-start',
                'text-blue-normal' => Str::contains($current, 'career')])>
                <a href="{{ route('career') }}" class="my-4 p-2">
                    {{ __("edulanding.navigation.case_studies") }}
                </a>
            </div>
            <div @class([
                'w-full group hover:text-blue-normal py-4 text-lg sm:text-xl text-start',
                'text-blue-normal' => Str::contains($current, 'contact')])>
                <a href="{{ route('contact') }}" class="my-4 p-2">
                    {{ __("edulanding.navigation.contact") }}
                </a>
            </div>
            <div class="w-full px-2">
                <div class="relative flex flex-col text-left">
                    @foreach( LocaleConfig::getLocales() as $locale )
                        @if ( App::isLocale($locale) )
                            <button type="button"
                                    @click="openLang = ! openLang"
                                    class="flex w-full h-full justify-between items-center place-content-center gap-x-1.5 mt-4 text-lg sm:text-xl font-semibold text-edu-gray hover:text-edu-gray-dark uppercase"
                                    id="mobileLocalesButton" aria-expanded="true" aria-haspopup="true">
                                {{ $locale }}
                                <i :class="{'rotate-0': openLang, 'rotate-180': ! openLang}" class="ti ti-chevron-up"></i>
                            </button>
                        @endif
                    @endforeach
                    <div id="mobileLocalesMenu"
                         :class="{'block': openLang, 'hidden': ! openLang}"
                         class="hidden">
                        <div class="text-end" role="none">
                            @foreach( LocaleConfig::getLocales() as $locale )
                                <a href="{{ route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale) }}"
                                   class="text-gray-500 block text-lg font-normal pt-4 sm:text-xl hover:text-blue-normal uppercase text-start"
                                   role="menuitem" tabindex="-1">
                                    {{ $locale }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</nav>

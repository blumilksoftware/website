@php
    use Illuminate\Support\Facades\Route;
    $current = substr(Route::currentRouteName(), 3);
@endphp

<nav id="mobile-nav"
     class="sidebar bg-navigation hidden h-screen w-screen justify-between absolute z-30 right-0 md:hidden flex-col font-semibold text-xl sm:text-2xl text-start items-start">
    <div class="flex justify-between relative bg-navigation p-8 px-14 w-full">
        <a class="flex lowercase font-bold items-center" href="{{ route("home") }}">
            <img class="w-32" src="{{asset('/logo.svg')}}" alt="Blumilk"/>
        </a>
        <button type="button" aria-label="Close sidebar"><i class="fa-solid fa-xmark text-2xl text-brand"
                                                            onclick="hideSidebar()"></i></button>
    </div>
    <div class="w-full h-full px-14">
        <button
            class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start @if($current === "about") text-website-normal @endif"
            onclick="window.location='{{ route("about") }}';">
            <a class="my-4 p-2 start">{{ __("content.pages.about") }}</a>
        </button>
        <button
            class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start @if($current === "case-studies") text-website-normal @endif"
            onclick="window.location='{{ route("case-studies") }}';">
            <a class="my-4 p-2">{{ __("content.pages.case_study") }}</a>
        </button>
        <button
            class="w-full hover:text-website-normal py-4 text-lg sm:text-xl text-start @if($current === "partners") text-website-normal @endif"
            onclick="window.location='{{ route("partners") }}';">
            <a class="my-4 p-2">{{ __("content.pages.partners") }}</a>
        </button>
        <button
            class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start @if($current === "career") text-website-normal @endif"
            onclick="window.location='{{ route("career") }}';">
            <a class="my-4 p-2">{{ __("content.pages.career") }}</a>
        </button>
        <button
            class="w-full group hover:text-website-normal py-4 text-lg sm:text-xl text-start @if($current === "contact") text-website-normal @endif"
            onclick="window.location='{{ route("contact") }}';">
            <a class="my-4 p-2">{{ __("content.pages.contact") }}</a>
        </button>
        <div class="w-full px-2">
            <div class="relative flex flex-col text-left">
                @foreach(LocaleConfig::getLocales() as $locale)
                    @if (App::isLocale($locale))
                        <button type="button"
                                class="flex w-full h-full justify-between items-center place-content-center gap-x-1.5 mt-4 text-lg sm:text-xl font-semibold text-black hover:text-website-normal uppercase"
                                id="mobileLocalesButton" aria-expanded="true" aria-haspopup="true">
                            {{ $locale }}
                            <i class="fa-solid fa-chevron-up fa-rotate-180 langArrow text-gray-500"></i>
                        </button>
                    @endif
                @endforeach
                <div id="mobileLocalesMenu"
                     class="hidden">
                    <div class="text-end" role="none">
                        @foreach(LocaleConfig::getLocales() as $locale)
                            <a href="{{route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale)}}"
                               class="text-gray-500 block text-lg pt-4 sm:text-xl hover:text-website-normal uppercase text-start"
                               role="menuitem" tabindex="-1">
                                {{$locale}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full pb-14 px-14">
        <x-small-primary-button icon="text" href="#">{{ __("buttons.lets_talk") }}</x-small-primary-button>
    </div>
</nav>

<nav id="desktop-nav" class="left-0 right-0 py-8 duration-300 xl:px-[20%] bg-navigation relative">
    <div class="mx-auto flex items-center justify-between px-14 md:px-6 xl:px-0">
        <div>
            <a class="md:hidden tablet:block items-start" href="{{ route("home") }}">
                <img class="w-32 shrink-0" src="{{asset('/logo.svg')}}" alt="Blumilk"/>
            </a>
            <a class="hidden md:block tablet:hidden items-start" href="{{ route("home") }}">
                <img class="h-8" src="{{asset('/sygnet.svg')}}" alt="Blumilk"/>
            </a>
        </div>
        <div class="md:flex hidden justify-center items-center text-sm 3xl:text-lg">
            <p class="font-medium flex items-center text-center gap-2">
                <a href="{{route('about')}}"
                   class="hover:bg-website-extra_light hover:text-website-normal rounded-3xl px-2 @if($current === "about") bg-website-extra_light text-website-normal @endif"
                   href="{{ route("about") }}">{{ __("content.pages.about") }}</a>
                <a href="{{ route("case-studies") }}"
                   class="hover:bg-website-extra_light hover:text-website-normal rounded-3xl px-2 @if($current === "case-studies") bg-website-extra_light text-website-normal @endif">{{ __("content.pages.case_study") }}</a>
                <a href="{{ route("partners") }}"
                   class="hover:bg-website-extra_light hover:text-website-normal rounded-3xl px-2 @if($current === "partners") bg-website-extra_light text-website-normal @endif">{{ __("content.pages.partners") }}</a>
                <a href="{{ route("career") }}"
                   class="hover:bg-website-extra_light hover:text-website-normal rounded-3xl px-2 @if($current === "career") bg-website-extra_light text-website-normal @endif">{{ __("content.pages.career") }}</a>
                <a href="{{ route("contact") }}"
                   class="hover:bg-website-extra_light hover:text-website-normal rounded-3xl px-2 @if($current === "contact") bg-website-extra_light text-website-normal @endif">{{ __("content.pages.contact") }}</a>
            </p>
        </div>
        <div class="md:flex hidden gap-4">
            <div class="items-center">
                <x-small-primary-button href="#">{{ __("buttons.lets_talk") }}</x-small-primary-button>
            </div>
            <div class="relative inline-block text-left">
                @foreach(LocaleConfig::getLocales() as $locale)
                    @if (App::isLocale($locale))
                        <button type="button"
                                class="flex h-full items-center place-content-center gap-x-1.5 bg-white px-3 py-2 text-sm 3xl:text-md font-semibold text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 uppercase"
                                id="desktopLocalesButton" aria-expanded="true" aria-haspopup="true">
                            {{ $locale }}
                            <svg class="-mr-1 h-5 w-5 text-gray-400 langArrow" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    @endif
                @endforeach
                <div id="desktopLocalesMenu"
                     class="hidden absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                     tabindex="-1">
                    <div class="text-end" role="none">
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

        <button class="flex md:hidden" onclick="showSidebar()">
            <i class="fa-solid fa-bars hamburger-menu text-2xl text-brand"></i>
        </button>
    </div>
</nav>

<script>
    function showSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.style.display = "flex";
        document.body.style.overflow = 'hidden';
    }

    function hideSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.style.display = "none";
        document.body.style.overflow = '';
    }
    document.addEventListener('DOMContentLoaded', () => {
        let dropdownButton;
        let dropdownMenu;

        function setDropdownElements() {
            const isMobile = window.matchMedia('(max-width: 767px)').matches;
            dropdownButton = document.getElementById(isMobile ? 'mobileLocalesButton' : 'desktopLocalesButton');
            dropdownMenu = document.getElementById(isMobile ? 'mobileLocalesMenu' : 'desktopLocalesMenu');
            setupDropdownButton();
        }

        function toggleDropdown() {
            const langArrow = document.getElementsByClassName('langArrow');

            if (dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.remove('hidden');
                setTimeout(() => {
                    dropdownMenu.classList.remove('opacity-0', 'scale-95');
                    dropdownMenu.classList.add('opacity-100', 'scale-100');
                    for (let arrow of langArrow) {
                        arrow.classList.add('rotate-0');
                    }
                }, 10);
            } else {
                dropdownMenu.classList.remove('opacity-100', 'scale-100');
                dropdownMenu.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    dropdownMenu.classList.add('hidden');
                    for (let arrow of langArrow) {
                        arrow.classList.remove('rotate-0');
                    }
                }, 100);
            }
        }

        function setupDropdownButton() {
            dropdownButton.addEventListener('click', toggleDropdown);
        }

        setDropdownElements();
        window.matchMedia('(max-width: 767px)').addEventListener('change', setDropdownElements);
    });


</script>

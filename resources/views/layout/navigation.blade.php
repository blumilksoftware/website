@php
    use Illuminate\Support\Facades\Route;
    $current = substr(Route::currentRouteName(), 3);


    define("navButtons", [
    "about" => __("content.pages.about"),
    "case-studies" => __("content.pages.case_study"),
    "partners" => __("content.pages.partners"),
    "career" => __("content.pages.career"),
    "contact" => __("content.pages.contact"),
    ]);
@endphp

<nav id="mobile-nav"
     class="sidebar bg-navigation hidden h-screen w-screen justify-between absolute z-30 right-0 md:hidden flex-col font-semibold text-2xl text-center items-center">
    <div class="flex justify-between relative bg-navigation p-4 px-6 w-full">
        <a class="flex lowercase font-bold items-center" href="{{ route("home") }}">
            <img class="w-40" src="/logo.svg" alt="Blumilk"/>
        </a>
        <button type="button" aria-label="Close sidebar"><i class="fa-solid fa-xmark text-2xl text-brand"
                                                            onclick="hideSidebar()"></i></button>
    </div>
    <div class="w-full h-full">
        @foreach(navButtons as $slug => $value)
            <button class="w-full group hover:bg-website-light hover:text-website-normal hover:bg-opacity-25 p-8 @if($current === $slug) bg-website-light text-website-normal bg-opacity-25 @endif"
                    onclick="window.location='{{ route($slug) }}';">
                <a class="my-4 p-2 rounded-2xl">{{ $value }}</a>
            </button>
        @endforeach
        <div class="w-full p-8">
            @foreach(LocaleConfig::getLocales() as $locale)
                @if (!App::isLocale($locale))
                    <a href="{{ route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale) }}">
                        <i class="large {{ $locale === "en" ? "gb" : $locale }} flat flag"></i>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
    <x-primary-button-with-icon icon="text" href="#">{{ __("buttons.lets_talk") }}</x-primary-button-with-icon>
</nav>

<nav id="desktop-nav" class="left-0 right-0 py-4 duration-300 xl:px-[15%] bg-navigation relative">
    <div class="mx-auto flex items-center justify-between px-6">
        <div>
            <a class="flex items-start" href="{{ route("home") }}">
                <img class="w-40 shrink-0" src="/logo.svg" alt="Blumilk"/>
            </a>
        </div>
        <div class="md:flex hidden justify-center items-center text-lg lg:text-xl">
            <p class="font-medium flex items-center text-center gap-2 nav-list">
                @foreach(navButtons as $slug => $value)
                    <a onclick="{{route($slug)}}"
                    class="hover:bg-website-light hover:text-website-normal hover:bg-opacity-25 hover:rounded-3xl p-1 @if($current === "$slug") bg-website-light text-website-normal bg-opacity-25 rounded-3xl @endif"
                    href="{{ route($slug) }}">{{ $value }}</a>
                @endforeach
            </p>
            <div class="m-2">
                <x-primary-button-with-icon icon="text"
                                            href="#">{{ __("buttons.lets_talk") }}</x-primary-button-with-icon>
            </div>
        </div>
        <div class="md:flex hidden items-center">
            @foreach(LocaleConfig::getLocales() as $locale)
                @if (!App::isLocale($locale))
                    <a href="{{ route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale) }}">
                        <i class="large {{ $locale === "en" ? "gb" : $locale }} flat flag"></i>
                    </a>
                @endif
            @endforeach
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
</script>

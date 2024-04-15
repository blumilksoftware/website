<nav id="mobile nav" class="sidebar bg-navigation hidden h-screen w-screen justify-between absolute z-30 right-0 md:hidden flex-col font-semibold text-2xl text-center items-center" lang="en">
    <div class="flex justify-between relative bg-navigation p-4 px-6 w-full">
        <a class="flex lowercase font-bold items-center" href="{{ route("home") }}">
            <img class="w-40" src="/logo.svg" alt="Blumilk"/>
        </a>
        <button type="button" aria-label="Close sidebar"><i class="fa-solid fa-xmark text-2xl" onclick="hideSidebar()"></i></button>
    </div>
    <div class="w-full h-full capitalize">
        <button class="w-full nav-item p-8" onclick="window.location='{{ route("about") }}';">
            <a class="my-4 p-2 rounded-2xl">{{ __("content.pages.about") }}</a>
        </button>
        <button class="w-full nav-item p-8" onclick="window.location='{{ route("case-studies") }}';">
            <a class="my-4 p-2 rounded-2xl">{{ __("content.pages.case_study") }}</a>
        </button>
        <button class="w-full nav-item p-8" onclick="window.location='{{ route("partners") }}';">
            <a class="my-4 p-2 rounded-2xl">{{ __("content.pages.partners") }}</a>
        </button>
        <button class="w-full nav-item p-8" onclick="window.location='{{ route("career") }}';">
            <a class="my-4 p-2 rounded-2xl">{{ __("content.pages.career") }}</a>
        </button>
        <button class="w-full nav-item p-8" onclick="window.location='{{ route("contact") }}';">
            <a class="my-4 p-2 rounded-2xl">{{ __("content.pages.contact") }}</a>
        </button>
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
    <x-primary-button-with-icon icon="text" href="">{{ __("buttons.lets_talk") }}</x-primary-button-with-icon>
</nav>

<nav id="desktop nav" class="left-0 right-0 py-4 duration-300 bg-navigation relative" lang="en">
    <div class="mx-auto flex items-center justify-between px-6">
        <div>
            <a class="flex items-center" href="{{ route("home") }}">
                <img class="w-40" src="/logo.svg" alt="Blumilk"/>
            </a>
        </div>
        <div class="md:flex flex-1 hidden justify-center items-center text-lg lg:text-xl">
            <p class="font-medium flex items-center text-center">
                <a href="{{ route("about") }}" class="lg:ml-6 ml-2 active nav-item p-2 rounded-2xl">{{ __("content.pages.about") }}</a>
                <a href="{{ route("case-studies") }}" class="lg:ml-6 ml-2 nav-item  p-2 rounded-2xl">{{ __("content.pages.case_study") }}</a>
                <a href="{{ route("partners") }}" class="lg:ml-6 ml-2 nav-item p-2 rounded-2xl">{{ __("content.pages.partners") }}</a>
                <a href="{{ route("career") }}" class="lg:ml-6 ml-2 nav-item p-2 rounded-2xl">{{ __("content.pages.career") }}</a>
                <a href="{{ route("contact") }}" class="lg:ml-6 ml-2 nav-item p-2 rounded-2xl">{{ __("content.pages.contact") }}</a>
            </p>
            <div class="ml-8">
                <x-primary-button-with-icon icon="text" href="">{{ __("buttons.lets_talk") }}</x-primary-button-with-icon>
            </div>
        </div>
        <div class="md:flex hidden items-center justify-end m-1">
            @foreach(LocaleConfig::getLocales() as $locale)
                @if (!App::isLocale($locale))
                    <a href="{{ route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale) }}">
                        <i class="large {{ $locale === "en" ? "gb" : $locale }} flat flag"></i>
                    </a>
                @endif
            @endforeach
        </div>
        <button class="flex md:hidden justify-end" onclick="showSidebar()">
            <i class="fa-solid fa-bars hamburger-menu text-2xl"></i>
        </button>
    </div>
</nav>

<script>
    function showSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.style.display = "flex";
    }

    function hideSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.style.display = "none";
    }
</script>

<div class="left-0 right-0 py-4 duration-300 bg-navigation">
    <div class="md:container mx-auto flex items-center px-6">
        <div class="text-3xl">
            <a class="flex lowercase font-bold items-center" href="{{ route("home") }}">
                <img class="w-40" src="/logo.svg" alt="Blumilk"/>
            </a>
        </div>
        <div class="md:flex flex-1 hidden justify-center items-center">
            <span class="font-medium flex">
                <a href="{{ route("about") }}" class="btn lg:ml-8 ml-2 active hover:bg-website-light hover:text-website-normal bg-opacity-20 p-2 rounded-2xl">{{ __("content.pages.about") }}</a>
                <a href="{{ route("case-studies") }}" class="btn lg:ml-8 ml-2 hover:bg-website-light hover:text-website-normal bg-opacity-20 p-2 rounded-2xl">{{ __("content.pages.case_study") }}</a>
                <a href="{{ route("partners") }}" class="btn lg:ml-8 md:ml-2 hover:bg-website-light hover:text-website-normal bg-opacity-20 p-2 rounded-2xl">{{ __("content.pages.partners") }}</a>
                <a href="{{ route("career") }}" class="btn lg:ml-8 md:ml-2 hover:bg-website-light hover:text-website-normal bg-opacity-20 p-2 rounded-2xl">{{ __("content.pages.career") }}</a>
                <a href="{{ route("contact") }}" class="btn lg:ml-8 md:ml-2 hover:bg-website-light hover:text-website-normal bg-opacity-20 p-2 rounded-2xl">{{ __("content.pages.contact") }}</a>
            </span>
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
        <div class="flex flex-1 md:hidden justify-end">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</div>

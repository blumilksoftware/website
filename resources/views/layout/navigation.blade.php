<div class="left-0 right-0 py-4 duration-300">
    <div class=" md:container mx-auto flex items-center px-6">
        <div class="text-2xl">
            <a class="flex lowercase font-bold items-center" href="{{ route("home") }}">
                <img class="w-32" src="/logo.svg" alt="Blumilk" />
            </a>
        </div>
        <div class="flex-1 justify-center items-center md:flex">
            <span class="font-medium">
            <a href="{{ route("about") }}" class="ml-8">{{ __("content.pages.about") }}</a>
            <a href="{{ route("case-studies") }}" class="ml-8">{{ __("content.pages.case_study") }}</a>
            <a href="{{ route("partners") }}" class="ml-8">{{ __("content.pages.partners") }}</a>
            <a href="{{ route("career") }}" class="ml-8">{{ __("content.pages.career") }}</a>
            <a href="{{ route("contact") }}" class="ml-8">{{ __("content.pages.contact") }}</a>
                </span>
            <div class="ml-8">
                <x-primary-button-with-icon icon="text" href="">{{ __("buttons.lets_talk") }}</x-primary-button-with-icon>
            </div>
        </div>
        <div class="flex items-center justify-end">
            @foreach(LocaleConfig::getLocales() as $locale)
                @if (!App::isLocale($locale))
                    <a href="{{ route(Route::currentRouteName(), Route::getCurrentRoute()->parameters(), true, $locale) }}">
                        <i class="large {{ $locale === "en" ? "gb" : $locale }} flat flag"></i> </a>
                @endif
            @endforeach
        </div>
    </div>
</div>

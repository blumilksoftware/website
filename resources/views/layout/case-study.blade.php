<div class="relative max-w-screen-3xl mx-auto">
    <div class="absolute left-[8%] md:-left-0 top-16">
        <x-bubble size="100"/>
    </div>
    <div class="absolute left-[8%] md:left-[6%] top-10">
        <x-bubble size="50"/>
    </div>
    <div class="absolute -z-10 hidden lg:block -left-[10%] lg:-left-[3%] top-[600px]">
        <x-bubble size="250"/>
    </div>
    <div class="absolute right-[8%] md:right-[12%] top-0">
        <x-bubble size="50"/>
    </div>
    <div class="absolute -z-10 right-14 md:right-[5%] top-[480px]">
        <x-bubble size="110"/>
    </div>

    <div class="absolute -z-10 hidden lg:block -right-[10%] lg:right-[4%] top-[650px]">
        <x-bubble size="210"/>
    </div>
</div>


@yield('case-study-content')

<section class="relative mx-[10%] 2xl:max-w-screen-3xl 2xl:mx-auto">
    <div class="w-full py-12 sm:py-32">
        <div class="relative isolate overflow-hidden bg-blue-normal py-24 text-center shadow-2xl px-8  rounded-3xl">
            <h2 class="mx-auto max-w-5xl text-3xl font-bold tracking-tight text-white sm:text-5xl">{{ __("content.home.section_6.title_1") }}</h2>
            <p class="mx-auto max-w-7xl mt-6 text-lg leading-8 text-gray-300">{{ __("content.home.section_6.subtitle_1") }}
                <span class="font-bold text-white block">{{ __("content.home.section_6.subtitle_2") }}</span>
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <x-primary-button href="{{ route('contact') }}" class="px-16 bg-blue-dark opacity-80">
                    {{ __("buttons.text_us") }}
                </x-primary-button>
            </div>
        </div>
    </div>
</section>


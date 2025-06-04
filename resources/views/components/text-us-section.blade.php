<section class="relative mx-[10%] 2xl:max-w-[1340px] 2xl:mx-auto">
    <div class="w-full pb-10 pt-12 md:pt-24 sm:py-32">
        <div class="relative isolate overflow-hidden bg-blue-normal py-8 md:py-16 text-center shadow-2xl px-8 max-h-[417px] rounded-3xl">
            <img src="{{ asset('graphics/waves/wave_1.svg') }}" class="absolute -left-44 2xl:-left-16 -bottom-44 xl:-bottom-32" alt="" />
            <img src="{{ asset('graphics/waves/wave_2.svg') }}" class="absolute -z-20 -left-32 -top-24 xl:-top-16 2xl:-top-8 3xl:top-0" alt="" />
            <img src="{{ asset('graphics/waves/wave_3.svg') }}" class="absolute -z-20 -right-16 2xl:-right-8 3xl:right-0 top-0" alt="{{ __('alt.wave') }}" />
            <img src="{{ asset('graphics/waves/wave_4.svg') }}" class="absolute -z-20 -bottom-64 2xl:-bottom-44 3xl:-bottom-32 -right-44 xl:right-6 2xl:right-16" alt=""/>
            <h2 class="mx-auto max-w-5xl text-3xl font-bold tracking-tight text-white sm:text-5xl">{{ __("content.home.section_6.title_1") }}</h2>
            <p class="mx-auto max-w-7xl mt-6 text-xs md:text-lg leading-7.5 text-gray-200">{{ __("content.home.section_6.subtitle_1") }}
                <span class="font-bold text-white block">{{ __("content.home.section_6.subtitle_2") }}</span>
            </p>
            <div class="mt-4 md:mt-10 flex items-center justify-center gap-x-6">
                <x-primary-button href="{{ route('contact') }}" class="w-full md:w-auto md:px-16 py-4 bg-blue-dark bg-opacity-85 font-semibold">
                    {{ __("buttons.text_us") }}
                </x-primary-button>
            </div>
        </div>
    </div>
</section>

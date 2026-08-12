@extends("layout.public")

@section("title", __("meta.home.title"))
@section("description", __("meta.home.description"))

@section("meta")
    <meta property="og:description" content="{{ __("meta.home.description") }}"/>
@endsection

@section("content")
    <section class="relative overflow-hidden">
        <section class="flex flex-col-reverse xl:flex-row pt-8 xl:pt-24 pb-16 sm:pb-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:gap-5">
            <div class="flex basis-2/5 relative flex-col self-center gap-5">
                <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start">
                    <h1 class="font-semibold text-gray-900 leading-7 md:leading-snug">
                        <span class="inline text-blue-normal">{{ __("content.home.section_1.title_1") }} </span>
                        <span class="inline">{{ __("content.home.section_1.title_2") }}</span>
                    </h1>
                </div>
                <div class="flex flex-col items-center xl:items-start">
                    <p class="text-sm sm:text-lg lg:text-xl font-light text-center xl:text-start pb-10">
                        <span class="leading-7 font-semibold">{{ __("content.home.section_1.subtitle_1") }}</span>  <span class="leading-7 ">{{ __("content.home.section_1.subtitle_2") }}</span>
                    </p>
                    <x-primary-button href="{{ route('offer') }}"
                                      class="w-full sm:w-auto sm:px-12 -ml-1 shadow-xl bg-blue-normal">{{ __("buttons.see_how_we_can_help") }}</x-primary-button>
                </div>
            </div>
            <div class="flex basis-3/5 relative self-center pb-8 md:pb-24 xl:pb-4 xl:left-16">
                <img src="{{ asset('graphics/home.webp') }}"
                     class="w-full max-w-[280px] sm:max-w-[350px] tablet:max-w-[750px] h-auto object-contain mx-auto"
                     alt=""/>
            </div>
        </section>
        <section class="relative text-center px-[10%] md:px-[15%]">
            <div class="text-lg sm:text-xl lg:text-2xl font-semibold text-gray-500">
                {{ __("content.home.section_2.title_1") }}
                <span class="text-blue-normal">{{ __("content.home.section_2.title_2") }}</span>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 xl:gap-8 pb-12 text-gray-400 mt-10 2xl:max-w-7xl 2xl:mx-auto">
                @foreach ($clients as $client)
                    <div class="m-4 flex justify-center h-16 w-fit">
                        <img src="{{ asset($client['src']) }}"
                             class="client-icon grayscale hover:grayscale-0 transform transition hover:scale-110"
                             alt="{{ $client['alt'] }}"/>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="flex flex-col-reverse xl:flex-row pt-8 xl:pt-24 pb-12 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:gap-5">
            <div class="flex basis-3/5 relative self-center xl:right-16 pt-8 xl:pt-0">
                <img src="{{ asset('graphics/home_2.webp') }}"
                     class="w-full max-w-[280px] sm:max-w-[350px] tablet:max-w-[750px] h-auto object-contain mx-auto"
                     alt=""/>
            </div>

            <div class="flex basis-2/5 relative flex-col self-center gap-5">
                <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:text-start">
                    <h2 class="font-semibold text-gray-900 leading-7 md:leading-snug">
                        {{ __('content.home.section_3.title_1') }}
                    </h2>
                </div>

                <div class="flex flex-col items-center xl:items-start text-sm sm:text-lg lg:text-xl font-light text-center xl:text-start">
                    <p class="leading-7 pb-4">
                        {{ __('content.home.section_3.subtitle_1') }}
                    </p>

                    <p class="leading-7 mb-4">
                        {{ __('content.home.section_3.subtitle_2') }}
                        <span class="font-semibold">{{ __('content.home.section_3.subtitle_3') }}</span>
                    </p>

                    <p class="leading-7">
                        {{ __('content.home.section_3.subtitle_4') }}
                    </p>
                </div>
            </div>
        </section>

        <section class="relative">
            <div class="mx-[10%] 2xl:max-w-[1400px] 2xl:mx-auto space-y-10 pt-8 sm:pt-20 lg:pt-40 lg:pb-28">
                <div class="pb-6 lg:pb-14 text-center">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.home.section_4.title_1") }}</h2>
                    <span class="font-light leading-7 text-sm sm:text-md lg:text-lg relative">{{ __("content.home.section_4.subtitle_1") }}</span>
                </div>
                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4 2xl:gap-12 xl:place-items-stretch">
                    <x-tile title="{{ __('content.home.section_4.tile_2.title') }}"
                            description="{{ __('content.home.section_4.tile_2.subtitle') }}">
                        <x-icons.site-alt accent="stroke-website-normal"/>
                    </x-tile>

                    <x-tile title="{{ __('content.home.section_4.tile_6.title') }}"
                            description="{{ __('content.home.section_4.tile_6.subtitle') }}">
                        <x-icons.user-robot accent="stroke-website-normal"/>
                    </x-tile>

                    <x-tile title="{{ __('content.home.section_4.tile_4.title') }}"
                            description="{{ __('content.home.section_4.tile_4.subtitle') }}">
                        <x-icons.magnifier-chart accent="stroke-black"/>
                    </x-tile>

                    <x-tile title="{{ __('content.home.section_4.tile_3.title') }}"
                            description="{{ __('content.home.section_4.tile_3.subtitle') }}">
                        <x-icons.audit accent="stroke-website-normal"/>
                    </x-tile>

                    <x-tile title="{{ __('content.home.section_4.tile_1.title') }}"
                            description="{{ __('content.home.section_4.tile_1.subtitle') }}">
                        <x-icons.window-alt accent="stroke-website-normal"/>
                    </x-tile>

                    <x-tile title="{{ __('content.home.section_4.tile_5.title') }}"
                            description="{{ __('content.home.section_4.tile_5.subtitle') }}">
                        <x-icons.graphic accent="stroke-website-normal"/>
                    </x-tile>
                </div>
            </div>
        </section>

        <section class="relative">
            <div class="relative mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto pt-28 pb-20 md:pb-32 lg:pb-44">
                <div class="pb-8 text-center">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-4 md:pb-8">{{ __("content.home.section_5.title_1") }}</h2>
                    <span class="font-normal leading-7 text-sm sm:text-md lg:text-lg">{{ __("content.home.section_5.subtitle_1") }}</span>
                    <span class="font-bold leading-7 text-sm sm:text-md lg:text-lg">{{ __("content.home.section_5.subtitle_2") }}</span>
                </div>

                <x-main-project/>

                <div>
                    <div class="absolute -z-10 -left-64 top-28">
                        <x-bubble size="140"/>
                    </div>
                    <div class="absolute -z-10 -left-4 2xl:-left-24 top-64">
                        <x-bubble size="60"/>
                    </div>
                    <div class="absolute -z-10 -right-8 sm:-right-28 xl:right-0 3xl:right-0 bottom-40 sm:bottom-[400px]">
                        <x-bubble size="60"/>
                    </div>
                    <div class="absolute -z-10 right-8 sm:-right-12 xl:right-12 3xl:right-32 bottom-60 sm:bottom-[450px]">
                        <x-bubble size="40"/>
                    </div>
                </div>
                <div class="flex md:gap-2 justify-center flex-col sm:flex-row md:pt-8">
                    <x-small-primary-button href="{{ route('projects') }}" class="px-10 justify-center">{{ __("buttons.see_our_projects") }}</x-small-primary-button>
                </div>
            </div>
        </section>

        <section @class([
    'hidden' => $references->isEmpty(),
    'px-[10%] md:px-[15%] items-center sm:pb-16 relative overflow-hidden'
])>
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 items-center text-center xl:text-left bg-blue-light p-4 lg:p-8 rounded-3xl 2xl:max-w-7xl 2xl:mx-auto">

                <div class="px-4">
            <span class="inline-block rounded-full bg-[#EEF2FF] text-website-normal text-xs font-semibold px-3 py-2 mb-4 uppercase">
                {{ __('content.home.section_6.tag') }}
            </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900 mb-6">
                        {{ __('content.home.section_6.title_1') }}
                    </h2>
                    <p class="text-tile-content text-base md:text-lg mb-8 max-w-md mx-auto xl:mx-0">
                        {{ __('content.home.section_6.subtitle_1') }}
                    </p>
                    <a href="{{ route('contact') }}"
                       class="inline-block bg-website-normal text-white font-semibold rounded-lg px-6 py-3 hover:bg-website-dark transition mb-6 lg:mb-0">
                        {{ __('buttons.join_happy_customers') }}
                    </a>
                </div>

                <div class="relative h-[600px] overflow-y-hidden px-4 mask-[linear-gradient(to_bottom,transparent,black_8%,black_92%,transparent)]">
                    <div
                        class="flex flex-col gap-4 cursor-grab active:cursor-grabbing select-none touch-none"
                        x-data="verticalScroller()"
                        x-init="init($el)"
                        :style="{ transform: `translateY(${-position}px)` }"
                        @pointerdown="onPointerDown"
                        @pointermove="onPointerMove"
                        @pointerup="onPointerUp"
                        @pointercancel="onPointerUp"
                        @pointerleave="onPointerUp"
                    >
                        @foreach ($references as $reference)
                            <x-references.review-card :reference="$reference"/>
                        @endforeach
                        @foreach ($references as $reference)
                            <x-references.review-card :reference="$reference" aria-hidden="true"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <x-text-us-section/>
    </section>
@endsection

@extends("layout.public")

@section("title", __("meta.home.title"))
@section("description", __("meta.home.description"))

@section("content")
    <section class="relative overflow-hidden">
        <div class="relative md:block">
            <div class="absolute -left-[15%] md:-left-[2%] lg:left-0 top-28 md:top-40">
                <x-bubble size="100"/>
            </div>
            <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
                <x-bubble size="50"/>
            </div>
        </div>

        <section class="relative flex flex-col-reverse xl:flex-row pt-36 pb-24 mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto gap-12">
            <div class="absolute right-8 md:right-20 xl:right-44 top-16">
                <x-bubble size="60"/>
            </div>
            <div class="flex basis-1/2 relative flex-col self-start gap-5">
                <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start">
                    <h2 class="font-semibold text-gray-900">
                        <span class="inline">{{ __("content.home.section_1.title_1") }}</span>
                        <span class="text-website-normal inline"> {{ __("content.home.section_1.title_2") }} </span>
                        <span class="inline">{{ __("content.home.section_1.title_3") }}</span>
                    </h2>
                </div>
                <div class="flex flex-col items-center xl:items-start">
                    <p class="text-lg lg:text-xl font-light text-center xl:text-start pb-10">
                        <span class="leading-relaxed">{{ __("content.home.section_1.subtitle_1") }}</span>
                        <span class="font-semibold leading-relaxed">{{ __("content.home.section_1.subtitle_2") }}</span>
                    </p>
                    <x-primary-button href="{{ route('about') }}"
                                      class="px-12 -ml-1 shadow-xl bg-website-normal">{{ __("buttons.about") }}</x-primary-button>
                </div>
            </div>
            <div class="flex basis-1/2 relative place-content-center xl:place-content-end">
                <img src="{{ asset('graphics/web-1.png') }}" class="h-auto max-w-2xl w-full aspect-auto object-center shrink-0"
                     alt="placeholder"/>
            </div>
        </section>

        <section class="relative text-center px-[10%] md:px-[15%]">
            <div class="text-2xl lg:text-3xl font-semibold text-gray-400">{{ __("content.home.section_2.title_1") }}
                <span class="text-website-normal">{{ __("content.home.section_2.title_2") }}</span>
            </div>
            <div class="absolute -z-10 right-14 md:right-28 -top-48">
                <x-bubble size="120"/>
            </div>
            <div class="absolute -z-10 hidden lg:block -left-[10%] lg:-left-[3%] top-0">
                <x-bubble size="250"/>
            </div>
            <div class="absolute -z-10 hidden lg:block -right-[10%] lg:right-[5%] -top-8">
                <x-bubble size="200"/>
            </div>
            <div class="grid grid-cols-2 md:flex md:flex-row pb-12 text-gray-400 items-center justify-center mt-10 2xl:gap-12 2xl:max-w-7xl 2xl:mx-auto">
                @foreach ($clients as $client)
                    <div class="m-6">
                        <img src="{{ asset($client['src']) }}"
                             class="client-icon h-auto w-44 m-auto grayscale hover:grayscale-0 transform transition hover:scale-110"
                             alt="{{ $client['alt'] }}"/>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="relative">
            <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-20 lg:pt-40 lg:pb-28">
                <div class="pb-8 lg:pb-14 text-center">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.home.section_3.title_1") }}</h2>
                    <span class="font-light leading-relaxed text-md lg:text-lg relative">{{ __("content.home.section_3.subtitle_1") }}</span>
                </div>
                <div
                    class="grid md:grid-cols-2 xl:grid-cols-3 gap-4 2xl:gap-12 place-items-center xl:place-items-stretch">
                    <x-tile image="{{ asset('graphics/icons/app-window.svg') }}"
                            alt="benefit-1"
                            title="{{ __('content.home.section_3.tile_1.title') }}"
                            description="{{ __('content.home.section_3.tile_1.subtitle') }}"/>
                    <x-tile image="{{ asset('graphics/icons/report-search.svg') }}"
                            alt="benefit-1"
                            title="{{ __('content.home.section_3.tile_2.title') }}"
                            description="{{ __('content.home.section_3.tile_2.subtitle') }}"/>
                    <x-tile image="{{ asset('graphics/icons/desktop-analytics.svg') }}"
                            alt="benefit-1"
                            title="{{ __('content.home.section_3.tile_3.title') }}"
                            description="{{ __('content.home.section_3.tile_3.subtitle') }}"/>
                    <x-tile image="{{ asset('graphics/icons/search.svg') }}"
                            alt="benefit-1"
                            title="{{ __('content.home.section_3.tile_4.title') }}"
                            description="{{ __('content.home.section_3.tile_4.subtitle') }}"/>
                    <x-tile image="{{ asset('graphics/icons/photo-scan.svg') }}"
                            alt="benefit-1"
                            title="{{ __('content.home.section_3.tile_5.title') }}"
                            description="{{ __('content.home.section_3.tile_5.subtitle') }}"/>
                    <x-tile image="{{ asset('graphics/icons/robot.svg') }}"
                            alt="benefit-1"
                            title="{{ __('content.home.section_3.tile_2.title') }}"
                            description="{{ __('content.home.section_3.tile_2.subtitle') }}"/>
                </div>
            </div>
        </section>

        <!-- TODO: Update case study -->
        <section class="relative mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
            <div class="relative pt-28 pb-28 md:pb-32 lg:pb-44">
                <div class="pb-8 text-center">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.home.section_4.title_1") }}</h2>
                    <span
                        class="font-normal leading-relaxed text-md lg:text-lg relative">{{ __("content.home.section_4.subtitle_1") }}</span>
                    <span
                        class="font-bold leading-relaxed text-md lg:text-lg relative">{{ __("content.home.section_4.subtitle_2") }}</span>
                </div>

                <x-main-case-study/>

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
                <div class="flex gap-4 justify-center flex-col sm:flex-row">
                    <x-primary-button href="" class="px-10 bg-website-normal">{{ __("buttons.case_study") }}</x-primary-button>
                    <x-secondary-button href="{{ route('case-studies') }}" class="px-10 justify-center">{{ __("buttons.all_projects") }}</x-secondary-button>
                </div>
            </div>

        </section>

        <section @class([ 'hidden' => $references->isEmpty(), 'px-[10%] md:px-[15%] text-center items-center sm:pb-16 relative' ])>
            <div class="absolute -z-10 -right-80 -bottom-64">
                <img src="{{ asset('graphics/shadow.svg') }}" alt="blob"/>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900 mb-6">{{ __("content.home.section_5.title_1") }}</h2>
            <span class="font-normal text-md lg:text-lg">{{ __("content.home.section_5.subtitle_1") }}</span>
            <div class="relative">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    @includeWhen(count($references), 'components.references', ['references' => $references])
                </div>
            </div>
        </section>
        <section class="relative mx-[10%] 2xl:max-w-screen-2xl 2xl:mx-auto">
            <div class="w-full py-12 sm:py-32">
                <div class="relative isolate overflow-hidden bg-blue-normal py-24 text-center shadow-2xl px-8  rounded-3xl">
                    <img src="{{ asset('graphics/blobs/blob_1.svg') }}" class="absolute -left-44 2xl:-left-16 -bottom-44 xl:-bottom-32" alt="blob"/>
                    <img src="{{ asset('graphics/blobs/blob_2.svg') }}" class="absolute -z-20 -left-32 -top-24 xl:-top-16 2xl:-top-8 3xl:top-0" alt="blob"/>
                    <img src="{{ asset('graphics/blobs/blob_3.svg') }}" class="absolute -z-20 -right-16 2xl:-right-8 3xl:right-0 top-0" alt="blob"/>
                    <img src="{{ asset('graphics/blobs/blob_4.svg') }}" class="absolute -z-20 -bottom-64 2xl:-bottom-44 3xl:-bottom-32 -right-44 xl:right-6 2xl:right-16" alt="blob"/>
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
    </section>
@endsection

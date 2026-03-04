@extends("layout.public")

@section("title", __("meta.offer.title"))
@section("description", __("meta.offer.description"))

@section("content")
    <section class="relative flex flex-col-reverse 2xl:flex-row pt-12 pb-0 md:pb-14 md:pt-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto place-items-center">
        <div class="flex basis-2/5 flex-col self-center">
            <div class="text-3xl md:text-4xl xl:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4 pt-4 md:pt-0">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    <span class="text-blue-normal"> {{ __("content.offer.section_1.title_1") }}</span>
                    {{ __("content.offer.section_1.title_2") }}
                </h2>
            </div>
            <div class="items-center 2xl:items-start text-sm md:text-lg max-w-[886px]">
                <p class="font-normal text-center 2xl:text-start pb-8 leading-7">
                    <span class="font-semibold">{{ __("content.offer.section_1.subtitle_1") }}</span>
                    {{ __("content.offer.section_1.subtitle_2") }}
                </p>
            </div>
        </div>
        <div class="flex basis-3/5">
            <img src="{{ asset('graphics/about.webp') }}" class="size-full align-middle m-4 relative 2xl:left-24"
                 alt=""/>
        </div>
    </section>
    <section class="relative">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:space-y-10 pt-28 pb-20 md:pb-36">
            <div class="pb-10 md:pb-14 text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.offer.section_2.title_1") }}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 2xl:gap-12">
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.clock accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_2.requirement_1") }}
            </span>
                    </div>
                </div>
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.school accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_2.requirement_2") }}
            </span>
                    </div>
                </div>
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.stethoscope accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_2.requirement_3") }}
            </span>
                    </div>
                </div>
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.treadmill accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_2.requirement_4") }}
            </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:space-y-10 pt-28 pb-20 md:pb-36">
            <div class="pb-10 md:pb-14 text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.offer.section_3.title_1") }}</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-4 2xl:gap-12 xl:place-items-stretch">
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.clock accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_3.item_1") }}
            </span>
                    </div>
                </div>
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.school accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_3.item_2") }}
            </span>
                    </div>
                </div>
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.stethoscope accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_3.item_3") }}
            </span>
                    </div>
                </div>
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.stethoscope accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_3.item_4") }}
            </span>
                    </div>
                </div>
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.stethoscope accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_3.item_5") }}
            </span>
                    </div>
                </div>
                <div class="bg-gray-extra-light rounded-xl px-6">
                    <div class="flex flex-row gap-5 py-6 h-full items-center">
                        <div class="shrink-0">
                            <x-icons.stethoscope accent="text-website-normal" class="size-12" />
                        </div>
                        <span class="font-semibold text-lg leading-7">
                {{ __("content.offer.section_3.item_6") }}
            </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:space-y-10 pt-28 pb-20 md:pb-36">
            <div class="pb-10 md:pb-14 text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.offer.section_4.title_1") }}</h2>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-4 2xl:gap-12 xl:place-items-stretch">
                <x-tile-top-icon title="{{ __('content.offer.section_4.item_1.title') }}"
                                 description="{{ __('content.offer.section_4.item_1.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.offer.section_4.item_2.title') }}"
                                 description="{{ __('content.offer.section_4.item_2.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.offer.section_4.item_3.title') }}"
                                 description="{{ __('content.offer.section_4.item_3.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.offer.section_4.item_4.title') }}"
                                 description="{{ __('content.offer.section_4.item_4.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.offer.section_4.item_5.title') }}"
                                 description="{{ __('content.offer.section_4.item_5.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.offer.section_4.item_6.title') }}"
                                 description="{{ __('content.offer.section_4.item_6.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.offer.section_4.item_7.title') }}"
                                 description="{{ __('content.offer.section_4.item_7.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.offer.section_4.item_8.title') }}"
                                 description="{{ __('content.offer.section_4.item_8.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:space-y-4 pt-28 pb-10 md:pb-16">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.offer.section_5.title_1") }}</h2>
            </div>
            <div class="flex justify-center">
                <ul class="list-square font-normal text-gray-600 text-xs md:text-sm">
                    @for($stackListItem = 1; $stackListItem <= 6; $stackListItem++)
                        <li class="text-md leading-7">
                            {{ __("content.offer.section_5.goal_$stackListItem") }}
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="text-center">
                <h4 class="text-lg md:text-xl lg:text-2xl font-semibold pb-8">{{ __("content.offer.section_5.slogan") }}</h4>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="flex flex-col md:mt-10 md:pb-5 xl:flex-row mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto gap-x-36">
            <div class="self-center basis-3/5">
                <img src="{{ asset('graphics/career_3.webp') }}" class="h-auto w-full object-center shrink-0 pb-10 md:pb-0"
                     alt=""/>
            </div>
            <div class="flex basis-2/5 relative flex-col justify-center md:pb-24 xl:pb-0">
                <div class="text-center xl:justify-start xl:text-start pb-5 xl:pb-10">
                    <h2 class="font-semibold text-gray-900 leading-12 text-md md:text-4xl lg:text-5xl mb-4 md:mb-10">{{ __("content.offer.section_6.title_1") }}</h2>
                    <p class="font-normal text-center 2xl:text-start pb-8 leading-7">
                        {{ __("content.offer.section_6.subtitle_1") }}
                        <span class="font-semibold">{{ __("content.offer.section_6.subtitle_2") }} </span>
                        {{ __("content.offer.section_6.subtitle_3") }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative mx-[10%] 2xl:max-w-[1340px] 2xl:mx-auto">
        <div class="w-full pb-10 pt-12 md:pt-24 sm:py-32">
            <div class="relative isolate overflow-hidden bg-blue-normal py-8 md:py-16 text-center shadow-2xl px-8 max-h-[417px] rounded-3xl">
                <img src="{{ asset('graphics/waves/wave_1.svg') }}" class="absolute -left-44 2xl:-left-16 -bottom-44 xl:-bottom-32" alt="" />
                <img src="{{ asset('graphics/waves/wave_2.svg') }}" class="absolute -z-20 -left-32 -top-24 xl:-top-16 2xl:-top-8 3xl:top-0" alt="" />
                <img src="{{ asset('graphics/waves/wave_3.svg') }}" class="absolute -z-20 -right-16 2xl:-right-8 3xl:right-0 top-0" alt="{{ __('alt.wave') }}" />
                <img src="{{ asset('graphics/waves/wave_4.svg') }}" class="absolute -z-20 -bottom-64 2xl:-bottom-44 3xl:-bottom-32 -right-44 xl:right-6 2xl:right-16" alt=""/>
                <h2 class="mx-auto max-w-5xl text-3xl font-bold tracking-tight text-white sm:text-5xl">{{ __("content.offer.section_7.title") }}</h2>
                <p class="mx-auto max-w-7xl mt-6 text-xs md:text-lg leading-7 text-gray-200">{{ __("content.offer.section_7.subtitle") }}
                </p>
                <div class="mt-4 md:mt-10 flex items-center justify-center gap-x-6">
                    <x-primary-button href="{{ route('contact') }}" class="w-full md:w-auto md:px-16 py-4 bg-blue-dark/85 font-semibold">
                        {{ __("buttons.schedule_free_consultation") }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </section>
@endsection

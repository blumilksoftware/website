@extends("layout.public")

@section("title", __("meta.offer.title"))
@section("description", __("meta.offer.description"))

@section("content")
    <section class="relative flex flex-col-reverse 2xl:flex-row pt-12 pb-0 md:pb-14 md:pt-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto place-items-center">
        <div class="flex basis-2/5 flex-col self-center">
            <div class="text-3xl md:text-4xl xl:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4 pt-4 md:pt-0">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    {{ __("content.offer.section_1.title_1") }}
                    <span class="text-blue-normal"> {{ __("content.offer.section_1.title_2") }} </span>
                </h2>
            </div>
            <div class="items-center 2xl:items-start text-sm md:text-lg max-w-[500px] mx-auto 2xl:mx-0">
                <p class="font-normal text-center 2xl:text-start pb-8 leading-7">
                    {{ __("content.offer.section_1.subtitle_1") }}
                    <span class="font-semibold"> {{ __("content.offer.section_1.subtitle_2") }} </span>
                </p>
            </div>
        </div>
        <div class="flex basis-3/5">
            <img src="{{ asset('graphics/offer_2.webp') }}" class="size-full align-middle m-4 relative 2xl:left-24"
                 alt=""/>
        </div>
    </section>
    <section class="relative">
        <div class="mx-[10%] lg:mx-[15%] md:space-y-10 pt-28 pb-20 md:pb-36">
            <div class="pb-10 md:pb-14 text-center max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.offer.section_2.title_1") }}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 2xl:gap-12 2xl:max-w-[1580px] 2xl:mx-auto">
                <x-tile title="{{ __('content.offer.section_2.requirement_1') }}"
                        class="bg-gray-extra-light">
                    <x-icons.automation accent="text-website-normal"/>
                </x-tile>

                <x-tile title="{{ __('content.offer.section_2.requirement_2') }}"
                        class="bg-gray-extra-light">
                    <x-icons.file-info accent="text-website-normal"/>
                </x-tile>

                <x-tile title="{{ __('content.offer.section_2.requirement_3') }}"
                        class="bg-gray-extra-light">
                    <x-icons.database-import accent="text-website-normal"/>
                </x-tile>

                <x-tile title="{{ __('content.offer.section_2.requirement_4') }}"
                        class="bg-gray-extra-light">
                    <x-icons.gavel accent="text-website-normal"/>
                </x-tile>
            </div>
        </div>
    </section>
    <section class="relative">
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 left-1/2  top-0"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 -right-96 bottom-0"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 -left-96 top-0"/>

        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto pt-28 pb-20 md:pb-36">
            <div class="flex flex-col xl:flex-row gap-10 xl:gap-16 items-center">
                <div class="flex basis-2/5 justify-center">
                    <img src="{{ asset('graphics/about.webp') }}"
                         class="h-[250px] w-[350px] tablet:h-[550px] tablet:w-[700px] aspect-auto object-center shrink-0"
                         alt=""/>
                </div>

                <div class="flex basis-3/5 flex-col gap-4 w-full">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">
                    <span class="md:whitespace-nowrap">
                        {{ __("content.offer.section_3.title_1") }}<span class="text-blue-normal">{{ __("content.offer.section_3.title_2") }}</span>
                    </span>
                        {{ __("content.offer.section_3.title_3") }}
                    </h2>
                    <div class="bg-white rounded-xl px-6 py-5 shadow-sm">
                        <span class="font-semibold text-lg leading-7">{{ __("content.offer.section_3.item_1") }}</span>
                    </div>
                    <div class="bg-white rounded-xl px-6 py-5 shadow-sm">
                        <span class="font-semibold text-lg leading-7">{{ __("content.offer.section_3.item_2") }}</span>
                    </div>
                    <div class="bg-white rounded-xl px-6 py-5 shadow-sm">
                        <span class="font-semibold text-lg leading-7">{{ __("content.offer.section_3.item_3") }}</span>
                    </div>
                    <div class="bg-white rounded-xl px-6 py-5 shadow-sm">
                        <span class="font-semibold text-lg leading-7">{{ __("content.offer.section_3.item_4") }}</span>
                    </div>
                    <div class="bg-white rounded-xl px-6 py-5 shadow-sm">
                        <span class="font-semibold text-lg leading-7">{{ __("content.offer.section_3.item_5") }}</span>
                    </div>
                    <div class="bg-white rounded-xl px-6 py-5 shadow-sm">
                        <span class="font-semibold text-lg leading-7">{{ __("content.offer.section_3.item_6") }}</span>
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
            <div class="flex flex-wrap justify-center gap-4 2xl:gap-12">
                <x-tile title="{{ __('content.offer.section_4.item_1.title') }}" class="w-full items-center justify-center md:w-[340px] xl:w-[380px]">
                    <x-icons.audit accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.offer.section_4.item_2.title') }}" class="w-full items-center justify-center md:w-[340px] xl:w-[380px]">
                    <x-icons.magnifier-chart accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.offer.section_4.item_3.title') }}" class="w-full items-center justify-center md:w-[340px] xl:w-[380px]">
                    <x-icons.alert-triangle accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.offer.section_4.item_4.title') }}" class="w-full items-center justify-center md:w-[340px] xl:w-[380px]">
                    <x-icons.math-max-min accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.offer.section_4.item_5.title') }}" class="w-full items-center justify-center md:w-[340px] xl:w-[380px]">
                    <x-icons.automation accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.offer.section_4.item_6.title') }}" class="w-full items-center justify-center md:w-[340px] xl:w-[380px]">
                    <x-icons.brand-wechat accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.offer.section_4.item_7.title') }}" class="w-full items-center justify-center md:w-[340px] xl:w-[380px]">
                    <x-icons.shield accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.offer.section_4.item_8.title') }}" class="w-full items-center justify-center md:w-[340px] xl:w-[380px]">
                    <x-icons.checks accent="stroke-blue-normal-neon"/>
                </x-tile>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="flex flex-col md:mt-10 md:pb-5 xl:flex-row mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto gap-x-8">
            <div class="flex basis-1/2 relative flex-col justify-center md:pb-24 xl:pb-0">
                <div class="text-center xl:justify-start xl:text-start pb-5 xl:pb-10">
                    <h2 class="font-semibold text-gray-900 leading-12 text-md md:text-4xl lg:text-5xl mb-4 md:mb-10">{{ __("content.offer.section_6.title_1") }}</h2>
                    <p class="font-normal text-center 2xl:text-start pb-8 leading-7 max-w-[450px]">
                        {{ __("content.offer.section_6.subtitle_1") }}
                        <span class="font-semibold">{{ __("content.offer.section_6.subtitle_2") }} </span>
                        {{ __("content.offer.section_6.subtitle_3") }}
                    </p>
                    <x-primary-button href="{{ route('contact') }}" class="w-full md:w-fit md:px-16 py-4 bg-blue-normal font-semibold">
                        {{ __("buttons.schedule_free_consultation") }}
                    </x-primary-button>
                </div>
            </div>
            <div class="self-center basis-1/2">
                <img src="{{ asset('graphics/career_3.webp') }}" class="h-[250px] w-[350px] tablet:h-[500px] tablet:w-[700px] aspect-auto object-center shrink-0"
                     alt=""/>
            </div>
        </div>
    </section>
    <x-text-us-section></x-text-us-section>
@endsection

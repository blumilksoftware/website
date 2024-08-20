@extends("layout.public")

@section("title", __("meta.about.title"))
@section("description", __("meta.about.description"))

@section("content")
    <section class="relative flex flex-col-reverse 2xl:flex-row pt-12 pb-0 md:pb-14 md:pt-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto place-items-center">
        <div class="flex basis-2/5 flex-col self-center">
            <div class="text-3xl md:text-4xl xl:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4 pt-4 md:pt-0">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    <span class="text-website-normal"> {{ __("content.about.section_1.title_1") }}</span>
                    {{ __("content.about.section_1.title_2") }}
                </h2>
            </div>
            <div class="items-center 2xl:items-start text-sm md:text-lg">
                <p class="font-normal text-center 2xl:text-start pb-8 leading-loose md:leading-relaxed">
                    {{ __("content.about.section_1.subtitle_1") }}
                    <span class="font-semibold">{{ __("content.about.section_1.subtitle_2") }}</span>
                    <span class="leading-relaxed">{{ __("content.about.section_1.subtitle_3") }}</span>
                </p>
                <p class="font-normal text-center 2xl:text-start leading-loose md:leading-relaxed">
                    <span class="font-semibold">{{ __("content.about.section_1.subtitle_4") }}</span>
                    {{ __("content.about.section_1.subtitle_5") }}
                </p>
            </div>
        </div>
        <div class="flex basis-3/5">
            <img src="{{ asset('graphics/about.svg') }}" class="size-full align-middle m-4 relative 2xl:left-24"
                 alt="placeholder"/>
        </div>
    </section>
    <section class="bg-white py-12 sm:py-16 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:flex xl:justify-between overflow-hidden text-center text-[#0E0B3D] gap-16 md:gap-8">
            <div class="flex flex-col gap-4">
                <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_1") }}</dt>
                <dd class="order-first text-6xl font-semibold">+25</dd>
            </div>
            <div class="flex flex-col gap-4">
                <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_2") }}</dt>
                <dd class="order-first text-6xl font-semibold">155</dd>
            </div>
            <div class="flex flex-col gap-4">
                <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_3") }}</dt>
                <dd class="order-first text-6xl font-semibold">82</dd>
            </div>
            <div class="flex flex-col gap-4">
                <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_4") }}</dt>
                <dd class="order-first text-6xl font-semibold">1000+</dd>
            </div>
        </div>

    </section>
    <section class="relative pt-14 pb-12 md:pb-24 text-center">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:space-y-10">
            <div class="pb-14">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_3.title_1") }}</h2>
                <span class="font-normal leading-loose md:leading-relaxed text-sm md:text-lg md:block">{{ __("content.about.section_3.subtitle_1") }}</span>
                <span class="font-normal leading-loose md:leading-relaxed text-sm md:text-lg">{{ __("content.about.section_3.subtitle_2") }}</span>
            </div>
            <div class="grid xl:grid-cols-3 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
                <x-tile title="{{ __('content.about.section_3.content_1') }}"
                        description="{{ __('content.about.section_3.content_2') }}"
                        class="size-full 2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normalNeon" />
                </x-tile>
                <x-tile title="{{ __('content.about.section_3.content_3') }}"
                        description="{{ __('content.about.section_3.content_4') }}"
                        class="size-full 2xl:place-items-start">
                    <x-icons.bulb accent="stroke-blue-normalNeon" />
                </x-tile>
                <x-tile title="{{ __('content.about.section_3.content_5') }}"
                        description="{{ __('content.about.section_3.content_6') }}"
                        class="size-full 2xl:place-items-start">
                    <x-icons.diamond accent="stroke-blue-normalNeon" />
                </x-tile>
            </div>
        </div>
    </section>
    <section class="relative pt-10 pb-14 md:pt-24 md:pb-28">
        <img src="{{ asset('graphics/shadow.svg') }}" alt="blob" class="absolute -z-10 -right-96 -bottom-0"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="blob" class="absolute -z-10 -left-[800px] -bottom-64"/>

        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
            <div class="pb-28 text-center">
                <h2 class="text-3xl md:text-3xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_4.title_1") }}</h2>
                <span
                    class="font-normal leading-loose md:leading-relaxed text-sm md:text-xl relative">{{ __("content.about.section_4.subtitle_1") }}</span>
            </div>
            <div class="grid md:grid-cols-10 md:grid-rows-4 gap-10">
                <div class="md:col-span-5 2xl:row-span-2 2xl:col-span-3 order-1 2xl:order-none">
                    <img src="{{ asset('images/photos/projects.jpg') }}"
                         class="w-full 2xl:w-[350px] 2xl:h-[440px] h-[440px] md:h-[330px] lg:h-[250px] object-cover rounded-xl" alt="placeholder"/>
                </div>
                <div class="md:col-span-5 2xl:row-span-2 2xl:col-span-3 order-3 2xl:order-none">
                    <img src="{{ asset('images/photos/lmt.jpg') }}"
                         class="w-full 2xl:w-[350px] 2xl:h-[440px] h-[440px] md:h-[330px] lg:h-[250px] object-cover rounded-xl" alt="placeholder"/>
                </div>
                <div class="md:block md:col-span-5 2xl:col-span-4 items-center 2xl:items-start order-2 2xl:order-none">
                    <p class="text-sm font-normal text-center md:text-start 2xl:pr-4">
                        <span class="leading-relaxed font-bold block pb-2">{{ __("content.about.section_4.activity_1.title") }}</span>
                        <span class="leading-relaxed text-gray-400">{{ __("content.about.section_4.activity_1.subtitle") }}</span>
                    </p>
                </div>
                <div class="md:block md:col-span-5 2xl:col-span-4 items-center 2xl:items-start order-4 2xl:order-none">
                    <p class="text-sm font-normal text-center md:text-start 2xl:pr-4">
                        <span class="leading-relaxed font-bold block pb-2">{{ __("content.about.section_4.activity_2.title") }}</span>
                        <span class="leading-relaxed text-gray-400">{{ __("content.about.section_4.activity_2.subtitle") }}</span>
                    </p>
                </div>
                <div class="md:block md:col-span-5 2xl:col-span-4 items-center 2xl:place-content-center order-6 md:order-5 2xl:order-none">
                    <p class="text-sm font-normal text-center md:text-start 2xl:pr-4">
                        <span class="leading-relaxed font-bold block pb-2">{{ __("content.about.section_4.activity_3.title") }}</span>
                        <span class="leading-relaxed text-gray-400">{{ __("content.about.section_4.activity_3.subtitle") }}</span>
                    </p>
                </div>
                <div class="md:col-span-5 2xl:row-span-2 2xl:col-span-3 order-5 md:order-6 2xl:order-none">
                    <img src="{{ asset('images/photos/interns.png') }}"
                         class="w-full 2xl:w-[350px] 2xl:h-[440px] h-[440px] md:h-[330px] lg:h-[250px] object-cover rounded-xl" alt="placeholder"/>
                </div>
                <div class="md:col-span-5 2xl:row-span-2 2xl:col-span-3 order-7 md:order-8 2xl:order-none h-full">
                    <img src="{{ asset('images/photos/soda.png') }}"
                         class="w-full 2xl:w-[350px] 2xl:h-[440px] h-[440px] md:h-[330px] lg:h-[250px] object-cover rounded-xl" alt="placeholder"/>
                </div>
                <div class="md:block md:col-span-5 2xl:col-span-4 items-center 2xl:items-start order-8 md:order-7">
                    <p class="text-sm font-normal text-center md:text-start 2xl:pr-4">
                        <span class="leading-relaxed font-bold block pb-2">{{ __("content.about.section_4.activity_4.title") }}</span>
                        <span class="leading-relaxed text-gray-400">{{ __("content.about.section_4.activity_4.subtitle") }}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative md:pb-16 pt-14 md:pt-28 sm:pt-32 mx-[8%] lg:mx-[15%] 2xl:mx-auto 2xl:max-w-7xl px-6 lg:px-8">
            <div class="pb-2 text-center">
                <h2 class="text-3xl md:text-3xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_5.title_1") }}</h2>
                <span
                    class="md:font-light leading-8 md:leading-relaxed text-sm md:text-xl relative">{{ __("content.about.section_5.subtitle_1") }}</span>
            </div>
            <div class="mx-auto mt-8 md:mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
                <figure class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
                    <img class="md:h-96 w-full object-cover rounded-2xl transition hover:scale-105" src="{{ asset('images/photos/archery.jpg') }}" alt="">
                </figure>
                <div class="space-y-8 xl:contents xl:space-y-0">
                    <div class="space-y-8 xl:row-span-2">
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl transition hover:scale-110" src="{{ asset('images/photos/czech.jpg') }}" alt="">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-48 w-full object-cover rounded-2xl transition hover:scale-110" src="{{ asset('images/photos/lasertag.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="space-y-8 xl:row-start-1 hidden sm:block">
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-60 w-full object-cover rounded-2xl transition hover:scale-110" src="{{ asset('images/photos/energylandia.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="space-y-8 xl:contents xl:space-y-0 hidden sm:block">
                    <div class="space-y-8 xl:row-start-1">
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-60 w-full object-cover rounded-2xl transition hover:scale-110" src="{{ asset('images/photos/laravel.jpg') }}" alt="">
                        </figure>
                    </div>
                    <div class="space-y-8 xl:row-span-2">
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl transition hover:scale-110" src="{{ asset('images/photos/beer.jpg') }}" alt="">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl transition hover:scale-110" src="{{ asset('images/photos/fireplace.jpg') }}" alt="">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl transition hover:scale-110" src="{{ asset('images/photos/sea.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
    </section>
    <x-text-us-section/>
@endsection

@extends("layout.public")

@section("title", __("meta.about.title"))
@section("description", __("meta.about.description"))

@section("content")
    <div class="relative md:block -z-10">
        <div class="relative md:block">
            <div class="absolute -left-[15%] sm:-left-[8%] md:-left-[2%] lg:left-0 top-28 md:top-40">
                <x-bubble size="100"/>
            </div>
            <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
                <x-bubble size="50"/>
            </div>
            <div class="absolute right-[4%] top-36">
                <x-bubble size="40"/>
            </div>
        </div>
    </div>
    <section class="relative flex flex-col-reverse 2xl:flex-row pt-20 pb-44 md:py-36 px-[10%] md:px-[20%] place-items-center">
        <div class="flex basis-2/5 flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl xl:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    <span class="text-website-normal"> {{__("content.about.section_1.title_1")}}</span>
                    {{__("content.about.section_1.title_2")}}
                </h2>
            </div>
            <div class="items-center 2xl:items-start ">
                <p class="text-lg lg:text-xl font-light text-center 2xl:text-start 2xl:pr-12">
                    <span class="leading-relaxed">{{__("content.about.section_1.subtitle_1")}}</span>
                    <span class="font-medium leading-relaxed ">{{__("content.about.section_1.subtitle_2")}}</span>
                </p>
            </div>
        </div>
        <div class="flex basis-3/5">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-max w-auto align-middle xl:h-auto xl:w-11/12 xl:p-12 "
                 alt="placeholder"/>
        </div>
        <div class="absolute hidden md:block right-[5%] bottom-64">
            <x-bubble size="100"/>
        </div>
        <div class="absolute hidden md:block -left-[10%] lg:-left-[3%] bottom-24">
            <x-bubble size="250"/>
        </div>
        <div class="absolute hidden md:block -right-[10%] md:right-[5%] bottom-14">
            <x-bubble size="200"/>
        </div>
    </section>
    <section class="bg-gray-extraLight">
        <div class="flex flex-col gap-x-8 lg:flex-row py-20 px-[10%] md:px-[20%]">
            <div class="hidden lg:flex basis-1/2 relative self-center">
                <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-min aspect-auto" alt="placeholder"/>
            </div>
            <div class="flex basis-1/2 relative flex-col self-center gap-5">
                <div class="text-3xl md:text-4xl lg:text-5xl text-center lg:justify-start lg:text-start pb-4">
                    <h2 class="font-semibold text-gray-900">
                        <span class="text-website-normal">{{__("content.about.section_2.title_1")}}</span>
                        {{__("content.about.section_2.title_2")}}
                    </h2>
                </div>

                <div class="items-center lg:items-start">
                    <p class="text-lg lg:text-xl font-light text-center lg:text-start">
                        <span class="leading-relaxed">{{__("content.about.section_2.subtitle_1")}}</span>
                        <span class="font-medium leading-relaxed">{{__("content.about.section_2.subtitle_2")}}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative pt-20 pb-24 text-center">
        <div class="px-[10%] md:px-[20%] space-y-10">
            <div class="pb-14">
                <h2 class="text-3xl md:text-3xl lg:text-5xl font-semibold pb-8">{{__("content.about.section_3.title_1")}}</h2>
                <span
                    class="font-light leading-relaxed text-xl relative">{{__("content.about.section_3.subtitle_1")}}</span>
            </div>
            <div class="grid lg:grid-cols-3 my-6 md:justify-between lg:justify-center items-start gap-y-12 xl:gap-x-24">
                <div
                    class="flex flex-col items-center gap-y-6 leading-relaxed">
                    <x-icons.passion/>
                    <p class="text-lg lg:text-xl font-light text-center">
                        <span class="font-medium leading-relaxed">{{__("content.about.section_3.content_1")}}</span>
                        <span class="leading-relaxed">{{__("content.about.section_3.content_2")}}</span>
                    </p>
                </div>
                <div
                    class="flex flex-col items-center gap-y-6 leading-relaxed">
                    <x-icons.innovation/>
                    <p class="text-lg lg:text-xl font-light text-center">
                        <span class="font-medium leading-relaxed">{{__("content.about.section_3.content_3")}}</span>
                        <span class="leading-relaxed">{{__("content.about.section_3.content_4")}}</span>
                    </p>
                </div>
                <div
                    class="flex flex-col items-center gap-y-6 leading-relaxed">
                    <x-icons.perfection/>
                    <p class="text-lg lg:text-xl font-light text-center">
                        <span class="font-medium leading-relaxed">{{__("content.about.section_3.content_5")}}</span>
                        <span class="leading-relaxed">{{__("content.about.section_3.content_6")}}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-gradient-to-b from-gray-light to-white">
        <x-waves.wave-2.top></x-waves.wave-2.top>
        <div class="grid xl:grid-cols-2 2xl:grid-cols-3 gap-2 text-center xl:text-left px-[10%] md:px-[20%] z-20 pt-20">
            <div class="grid xl:col-span-1">
                <div class="relative">
                    <div class="my-6">
                        <x-badge>{{__("content.about.section_4.badge")}}</x-badge>
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900">{{__("content.about.section_4.title_1")}}</h2>
                </div>
                <div class="text-black text-xl relative py-4">
                    <div class="py-4 text-xl font-light">
                        <span class="leading-relaxed">{{__("content.about.section_4.subtitle_1")}}</span>
                        <span class="font-medium leading-relaxed">{{__("content.about.section_4.subtitle_2")}}</span>
                        <span class="leading-relaxed">{{__("content.about.section_4.subtitle_3")}}</span>
                    </div>
                </div>
            </div>
            <div class="grid xl:hidden pb-20">
                <div
                    class="size-full 2xl:size-52 3xl:size-72">
                    <img src="{{ asset('images/photos/lasertag.jpg') }}"
                         class="size-full object-cover rounded-[40px]" alt="placeholder"/>
                </div>
            </div>
            <div class="hidden xl:grid 2xl:col-span-2 m-auto 3xl:py-0 3xl:px-12 grid-cols-5 grid-rows-4 gap-2 xl:gap-6">
                <div class="col-span-2 row-span-2 ">
                    <img src="{{ asset('images/photos/energylandia.jpg') }}"
                         class="size-full object-cover rounded-3xl 2xl:rounded-[40px] transform transition hover:scale-110"
                         alt="placeholder"/>
                </div>
                <div
                    class="h-16 2xl:h-24 3xl:h-32 w-full">
                    <img src="{{ asset('images/photos/rzeka.jpg') }}"
                         class="size-full object-cover rounded-2xl 2xl:rounded-3xl transform transition hover:scale-110"
                         alt="placeholder"/>
                </div>
                <div
                    class="col-span-2 row-span-2 size-36 2xl:size-52 3xl:size-72">
                    <img src="{{ asset('images/photos/quantum.jpg') }}"
                         class="size-full object-cover rounded-3xl 2xl:rounded-[40px] transform transition hover:scale-105"
                         alt="placeholder"/>
                </div>
                <div
                    class="h-16 2xl:h-24 3xl:h-32 w-full">
                    <img src="{{ asset('images/photos/meetup.jpg') }}"
                         class="size-full object-cover rounded-2xl 2xl:rounded-3xl transform transition hover:scale-110"
                         alt="placeholder"/>
                </div>
                <div
                    class="col-span-3 row-span-3 h-36 2xl:h-52 3xl:h-72 w-full place-items-center">
                    <img src="{{ asset('images/photos/birthday.jpg') }}"
                         class="size-full object-cover rounded-3xl 2xl:rounded-[40px] transform transition hover:scale-105"
                         alt="placeholder"/>
                </div>
                <div
                    class="col-span-2 row-span-2 size-36 2xl:size-52 3xl:size-72">
                    <img src="{{ asset('images/photos/plane.jpg') }}"
                         class="size-full object-cover rounded-3xl 2xl:rounded-[40px] transform transition hover:scale-105"
                         alt="placeholder"/>
                </div>
            </div>
        </div>
    </section>
@endsection

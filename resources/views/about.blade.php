@extends("layout.public")

@section("content")
    <div class="relative md:block -z-10">
        <div class="absolute -left-[6%] md:left-[1%] top-28 md:top-40">
            <x-bubble size="80"/>
        </div>
        <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
            <x-bubble size="30"/>
        </div>
        <div class="absolute hidden md:block -left-[3%] top-80">
            <x-bubble size="200"/>
        </div>
        <div class="absolute right-[4%] top-36">
            <x-bubble size="40"/>
        </div>
        <div class="relative top-24">
            <div class="absolute -right-[6%] md:right-[3%] top-72">
                <x-bubble size="90"/>
            </div>
        </div>
        <div class="relative top-24">
            <div class="absolute hidden md:block md:right-[4%] top-96">
                <x-bubble size="200"/>
            </div>
        </div>
    </div>
    <section class="flex flex-col-reverse lg:flex-row py-24 px-[10%] md:px-[20%]">
        <div class="flex basis-1/2 relative flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center lg:justify-start lg:text-start py-4">
                <h2 class="font-semibold text-gray-900 animation-appear">
                    <span class="text-website-normal"> {{__("content.about.section_1.title_1")}}</span>
                    {{__("content.about.section_1.title_2")}}
                </h2>
            </div>
            <div class="items-center lg:items-start animation-appear">
                <p class="text-xl lg:text-2xl font-light text-center lg:text-start">
                    {{__("content.about.section_1.subtitle_1")}}
                    <span class="font-medium leading-relaxed">{{__("content.about.section_1.subtitle_2")}}</span>
                </p>
            </div>
        </div>
        <div class="flex basis-1/2 relative self-center">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-min aspect-auto" alt="placeholder"/>
        </div>
    </section>
    <section
        class="flex flex-col lg:flex-row py-24 px-[10%] md:px-[20%] bg-gray-light duration-700 taos:translate-y-48 taos:opacity-0"
        data-taos-offset="200">
        <div class="hidden lg:flex basis-1/2 relative self-center">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-min aspect-auto" alt="placeholder"/>
        </div>
        <div class="flex basis-1/2 relative flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center lg:justify-start lg:text-start py-4">
                <h2 class="font-semibold text-gray-900 animation-appear">
                    <span class="text-website-normal">{{__("content.about.section_2.title_1")}}</span>
                    {{__("content.about.section_2.title_2")}}
                </h2>
            </div>

            <div class="items-center lg:items-start animation-appear">
                <p class="text-xl lg:text-2xl font-light text-center lg:text-start">
                    {{__("content.about.section_2.subtitle_1")}}
                    <span class="font-medium leading-relaxed">{{__("content.about.section_2.subtitle_2")}}</span>
                </p>
            </div>
        </div>
    </section>
    <section class="relative pt-28 text-center">
        <div class="px-[10%] md:px-[20%] space-y-10">
            <div class="pb-14">
                <h2 class="text-3xl md:text-3xl lg:text-5xl font-semibold pb-12 delay-300 duration-700 taos:scale-75 taos:opacity-0"
                    data-taos-offset="400">{{__("content.about.section_3.title_1")}}</h2>
                <span class="font-light leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                      data-taos-offset="400">{{__("content.about.section_3.subtitle_1")}}</span>
            </div>
            <div class="grid lg:grid-cols-3 my-6 md:justify-between lg:justify-center items-start gap-x-12">
                <div class="flex flex-col items-center gap-y-6 leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                    data-taos-offset="400">
                    <x-icons.passion/>
                    <p class="text-xl lg:text-xl font-light text-center">
                        <span class="font-medium leading-relaxed">{{__("content.about.section_3.content_1")}}</span>{{__("content.about.section_3.content_2")}}
                    </p>
                </div>
                <div class="flex flex-col items-center gap-y-6 leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                    data-taos-offset="400">
                    <x-icons.innovation/>
                    <p class="text-xl lg:text-xl font-light text-center">
                        <span class="font-medium leading-relaxed">{{__("content.about.section_3.content_3")}}</span>{{__("content.about.section_3.content_4")}}
                    </p>
                </div>
                <div class="flex flex-col items-center gap-y-6 leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                    data-taos-offset="400">
                    <x-icons.perfection/>
                    <p class="text-xl lg:text-xl font-light text-center">
                        <span class="font-medium leading-relaxed">{{__("content.about.section_3.content_5")}}</span>{{__("content.about.section_3.content_6")}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-b from-gray-light to-white">
        <x-waves.wave-2.top></x-waves.wave-2.top>
        <div class="flex flex-row text-center md:text-left px-[10%] md:px-[20%] gap-x-16 py-28">
            <div class="flex flex-col basis-1/3 pt-16">
                <div class="relative duration-700 taos:translate-y-48 taos:opacity-0"
                     data-taos-offset="200">
                    <x-badge>{{__("content.about.section_4.badge")}}</x-badge>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900">{{__("content.about.section_4.title_1")}}</h2>
                </div>
                <div class="text-black text-xl relative py-4">
                    <div class="py-4 text-xl font-light duration-700 taos:translate-y-48 taos:opacity-0"
                         data-taos-offset="200">
                        {{__("content.about.section_4.subtitle_1")}}
                        <span class="font-medium leading-relaxed">{{__("content.about.section_4.subtitle_2")}}</span>
                        {{__("content.about.section_4.subtitle_3")}}
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex basis-2/3 gap-2 2xl:gap-4 bg-black lg:bg-blue-700 xl:bg-red-700 2xl:bg-yellow-600 3xl:bg-green-800 justify-center">
                <div class="grid grid-cols-1 place-items-center gap-2 2xl:gap-4">
                    <div class="grid grid-rows-2 place-items-center gap-2 2xl:gap-4">
                        <div class="grid grid-cols-3 place-content-evenly gap-2 2xl:gap-4">
                            <div class="grid col-span-2 grid-rows-2 place-content-evenly gap-2 2xl:gap-4">
                                <div class="h-16 2xl:h-24 3xl:h-32 w-40 xl:w-60 3xl:w-80">
                                    <img src="{{ asset('images/photos/rzeka.jpg') }}" class="h-full w-full object-cover rounded-xl 2xl:rounded-2xl 3xl:rounded-3xl" alt="placeholder"/>
                                </div>
                                <div class="h-16 2xl:h-24 3xl:h-32 w-40 xl:w-60 3xl:w-80">
                                    <img src="{{ asset('images/photos/energylandia.jpg') }}" class="h-full w-full object-cover rounded-xl 2xl:rounded-2xl 3xl:rounded-3xl" alt="placeholder"/>
                                </div>
                            </div>
                            <div class="grid grid-rows-2 justify-self-center gap-2 2xl:gap-4">
                                <div class="size-16 2xl:size-24 3xl:size-32">
                                    <img src="{{ asset('images/photos/meetup.jpg') }}" class="h-full w-full object-cover rounded-xl 2xl:rounded-2xl 3xl:rounded-3xl" alt="placeholder"/>
                                </div>
                                <div class="size-16 2xl:size-24 3xl:size-32">
                                    <img src="{{ asset('images/photos/plane.jpg') }}" class="h-full w-full object-cover rounded-xl 2xl:rounded-2xl 3xl:rounded-3xl" alt="placeholder"/>
                                </div>
                            </div>
                        </div>
                        <div class="h-36 2xl:h-52 3xl:h-72 w-full">
                            <img src="{{ asset('images/photos/birthday.jpg') }}" class="h-full w-full object-cover rounded-xl 2xl:rounded-2xl 3xl:rounded-3xl" alt="placeholder"/>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 place-items-center">
                    <div class="grid grid-rows-2 gap-2 2xl:gap-4">
                        <div class="size-36 2xl:size-52 3xl:size-72">
                            <img src="{{ asset('images/photos/quantum.jpg') }}" class="h-full w-full object-cover rounded-xl 2xl:rounded-2xl 3xl:rounded-3xl" alt="placeholder"/>
                        </div>
                        <div class="size-36 2xl:size-52 3xl:size-72">
                            <img src="{{ asset('images/photos/lasertag.jpg') }}" class="h-full w-full object-cover rounded-xl 2xl:rounded-2xl 3xl:rounded-3xl" alt="placeholder"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

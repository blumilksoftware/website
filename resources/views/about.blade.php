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
    <section class="relative py-20 text-center">
        <div class="px-[10%] md:px-[20%] py-8 md:py-24">
            <h2 class="text-3xl md:text-5xl lg:text-5xl font-semibold text-gray-900 relative my-6 delay-300 duration-700 taos:scale-75 taos:opacity-0"
                data-taos-offset="400">{{__("content.about.section_3.title_1")}}</h2>
            <span
                class="font-medium leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                data-taos-offset="400">{{__("content.about.section_3.subtitle_1")}}</span>
            <div
                class="flex flex-col sm:flex-row relative  items-center my-6 md:justify-between lg:justify-center gap-y-8 sm:gap-x-8 lg:gap-x-16">
                <div
                    class="flex flex-col p-4 items-center gap-x-16font-medium leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                    data-taos-offset="400">
                    <x-icons.passion/>
                    <span class="font-medium">{{__("content.about.section_3.content_1")}}</span>
                    {{__("content.about.section_3.content_2")}}
                </div>
                <div
                    class="flex flex-col p-4 items-center gap-x-16font-medium leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                    data-taos-offset="400">
                    <x-icons.innovation/>
                    <span class="font-medium">{{__("content.about.section_3.content_3")}}</span>
                    {{__("content.about.section_3.content_4")}}
                </div>
                <div
                    class="flex flex-col p-4 items-center gap-x-16font-medium leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                    data-taos-offset="400">
                    <x-icons.perfection/>
                    <span class="font-medium">{{__("content.about.section_3.content_5")}}</span>
                    {{__("content.about.section_3.content_6")}}
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-br from-gray-light to-white px-[10%] md:px-[20%]">
        <x-waves.wave-2.top></x-waves.wave-2.top>
        <div class="flex flex-col text-center md:text-left">
            <div class="relative duration-700 taos:translate-y-48 taos:opacity-0"
                 data-taos-offset="200">
                <x-badge>{{__("content.about.section_4.badge")}}</x-badge>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900">{{__("content.about.section_4.title_1")}}</h2>
            </div>
            <div class="text-black text-xl relative py-4">
                <div class="py-4 text-xl duration-700 taos:translate-y-48 taos:opacity-0"
                     data-taos-offset="200"> {{__("content.about.section_4.subtitle_1")}}
                    <span
                        class="font-medium leading-relaxed">{{__("content.about.section_4.subtitle_2")}}</span></div>
                <ul class="list-disc-none py-8 hidden md:block duration-1000 taos:translate-y-48 taos:opacity-0"
                    data-taos-offset="100">

                </ul>
            </div>
        </div>


        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>


    </section>
@endsection

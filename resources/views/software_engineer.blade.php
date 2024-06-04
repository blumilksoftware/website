@extends("layout.public")

@section("content")
    <div class="relative md:block">
        <div class="absolute -left-[15%] md:-left-[2%] lg:left-0 top-28 md:top-40">
            <x-bubble size="100"/>
        </div>
        <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
            <x-bubble size="50"/>
        </div>
        <div class="absolute right-[4%] top-36">
            <x-bubble size="40"/>
        </div>
    </div>
    <section class="flex flex-col-reverse 2xl:flex-row text-center md:text-left px-[10%] md:px-[20%] pt-20">
        <div class="basis-3/5 3xl:basis-1/2">
            <div class="relative">
                <x-badge class="py-4">{{__("content.software_engineer.section_1.badge")}}</x-badge>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900">{{__("content.software_engineer.section_1.title_1")}}
                    <span
                        class="leading-relaxed font-semibold text-website-normal">{{__("content.software_engineer.section_1.title_2")}}</span>
                </h2>
            </div>
            <div class="text-black relative py-8 text-center xl:text-left text-md md:text-lg lg:text-xl font-light">
                <span class="leading-relaxed">{{__("content.software_engineer.section_1.subtitle_1")}}</span>
            </div>
            <div class="text-black text-center md:text-left">
                <div class="text-lg lg:text-xl leading-relaxed">
                    <span class="font-semibold">{{__("content.software_engineer.section_1.subtitle_2")}}</span>
                </div>
                <ul class="text-black text-md md:text-lg lg:text-xl text-center md:text-left pt-8 md:-ml-4 font-light justify-center space-y-4">
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_1")}}
                    </li>
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_2")}}
                    </li>
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_3")}}
                    </li>
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_4")}}
                    </li>
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_5")}}
                    </li>
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_6")}}
                    </li>
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_7")}}
                    </li>
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_8")}}
                    </li>
                    <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                        <x-icons.arrow></x-icons.arrow>
                        {{__("content.software_engineer.section_1.content_9")}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="basis-2/5 3xl:basis-1/2 self-center relative z-10">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
    </section>
    <section class="bg-gradient-to-br from-gray-light to-white">
        <x-waves.wave-1.top></x-waves.wave-1.top>
        <div class="flex flex-col 2xl:flex-row px-[10%] md:px-[20%] pt-32 gap-16 md:gap-24">
            <div class="basis-2/5 self-center">
                <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                     alt="placeholder"/>
            </div>
            <div class="flex basis-3/5 flex-col justify-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900 mb-4 text-center md:text-left">
                    {{__("content.software_engineer.section_2.title_1")}}</h2>
                    <ul class="text-black text-md md:text-lg lg:text-xl text-center md:text-left pt-8 md:-ml-4 font-light justify-center space-y-4">
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_1")}}
                        </li>
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_2")}}
                        </li>
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_3")}}
                        </li>
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_4")}}
                        </li>
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_5")}}
                        </li>
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_6")}}
                        </li>
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_7")}}
                        </li>
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_8")}}
                        </li>
                        <li class="flex items-start sm:items-center text-left leading-relaxed gap-x-4">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.software_engineer.section_2.content_9")}}
                        </li>
                    </ul>
            </div>
        </div>
        <x-waves.wave-3.bottom></x-waves.wave-3.bottom>
    </section>
    <section
        class="text-center flex flex-col relative z-20 gap-10 lg:gap-14 px-[10%] md:px-[20%] pt-10 2xl:pt-24 lg:pb-0">
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-gray-900 relative">
            {{__("content.software_engineer.section_3.title_1")}}</h2>
        <div class="mx-auto">
            <x-primary-button href="{{ route('contact') }}"
                              class="px-14">{{ __("buttons.apply_now") }}</x-primary-button>
        </div>
    </section>
@endsection

@extends("layout.public")

@section("content")
    <div class="relative md:block -z-10">
        <div class="absolute -left-[6%] md:left-[1%] top-28 md:top-40">
            <x-bubble size="80"/>
        </div>
        <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
            <x-bubble size="30"/>
        </div>
        <div class="absolute right-[4%] top-36">
            <x-bubble size="40"/>
        </div>
        {{--        <div class="relative top-24">--}}
        {{--            <div class="absolute right-[8%] md:right-[3%] top-72">--}}
        {{--                <x-bubble size="90"/>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="relative top-24">--}}
        {{--            <div class="absolute hidden md:block md:right-[4%] top-96">--}}
        {{--                <x-bubble size="200"/>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
    <section class="relative flex flex-col pt-20 md:pt-36 px-[10%] md:px-[20%] gap-24">
        <div class="flex flex-col self-center">
            <div class="text-3xl md:text-4xl xl:text-5xl text-center pb-4">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    {{ $caseStudy->name }}
                </h2>
            </div>
            <div class="items-center">
                <p class="text-lg lg:text-xl font-light text-center">
                    <span class="leading-relaxed">{{ $caseStudy->description }}</span>
                </p>
            </div>
        </div>
        <div class="px-36">
            <div class="rounded-3xl md:bg-gray-dark aspect-[5/3] w-full h-full -rotate-3 relative md:shadow-md -left-2">
                <img src="{{ asset('storage/' . $caseStudy->photo)  }}"
                     class="relative aspect-[5/3] flex w-full h-full rounded-3xl bg-white shadow-md rotate-3 left-4"
                     alt="{{ $caseStudy->company }}"/>
            </div>
        </div>
        <div class="absolute hidden md:block right-[5%] bottom-64">
            <x-bubble size="100"/>
        </div>

        <div class="absolute hidden md:block -right-[10%] md:right-[5%] bottom-14">
            <x-bubble size="200"/>
        </div>
    </section>
    <section
        class="bg-gray-extraDark">
        <x-waves.wave-1.top></x-waves.wave-1.top>
        <div class="relative flex flex-col-reverse 2xl:flex-row pt-20 pb-44 md:py-36 px-[10%] md:px-[20%] place-items-center">
            <div class="flex basis-2/5 flex-col self-center gap-5">
                <div class="text-3xl md:text-4xl xl:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4">
                    <h2 class="font-semibold text-gray-900 leading-snug">
                        <span class="text-website-normal"> {{__("content.case_study.section_2.title_1")}}</span>
                        {{__("content.case_study.section_2.title_2")}}
                    </h2>
                </div>
                <div class="items-center 2xl:items-start ">
                    <p class="text-lg lg:text-xl font-light text-center 2xl:text-start">
                        <span class="leading-relaxed">{{__("content.case_study.section_2.subtitle_1")}}</span>
                    </p>
                </div>
            </div>
            <div class="flex basis-3/5">
                <img src="{{ asset('graphics/web-1.png') }}"
                     class="h-max w-auto align-middle xl:h-auto xl:w-11/12 xl:p-12 "
                     alt="placeholder"/>
            </div>
        </div>
        <x-waves.wave-1.bottom></x-waves.wave-1.bottom>
    </section>
    <section class="flex px-[10%] md:px-[20%] pt-24 gap-24 place-content-center">
            <div class="flex flex-col justify-center align-middle place-content-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900 mb-4 text-center md:text-left">
                    {{__("content.case_study.section_3.title_1")}}</h2>
                <div class="text-black text-lg lg:text-xl text-center md:text-left py-6">
                    <div class="pb-4 md:pb-1 leading-relaxed">
                        <span class="leading-relaxed">{{__("content.case_study.section_3.subtitle_1")}}</span>
                        <span class="font-semibold">{{__("content.case_study.section_3.subtitle_2")}}</span>
                    </div>
                    <ul class="py-8 md:-ml-4 text-md justify-center">
                        <li class="flex items-center text-left">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.section_3.content_1")}}
                        </li>
                        <li class="flex items-center text-left">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.section_3.content_2")}}
                        </li>
                        <li class="flex items-center text-left">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.section_3.content_3")}}
                        </li>
                        <li class="flex items-center text-left">
                            <x-icons.arrow></x-icons.arrow>
                            {{__("content.section_3.content_4")}}
                        </li>
                    </ul>
                </div>
            </div>

    </section>
    <section class="text-center bg-gradient-to-b from-gray-light via-gray-light to-white">
        <div class="flex flex-col gap-14 px-[10%] md:px-[20%] md:py-24">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-gray-900 relative">
                {{__("content.case_study.section_5.title_1")}}</h2>
            <span class="font-light leading-relaxed text-xl relative">{{__("content.case_study.section_5.subtitle_1")}}</span>
            <div class="mx-auto flex">
                <x-secondary-button href="">{{ __("buttons.text_us") }}</x-secondary-button>
                <x-primary-button href="">{{ __("buttons.text_us") }}</x-primary-button>
            </div>
        </div>
    </section>
@endsection

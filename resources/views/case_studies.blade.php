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
        <div class="relative top-24">
            <div class="absolute right-[8%] md:right-[3%] top-72">
                <x-bubble size="90"/>
            </div>
        </div>
        <div class="relative top-24">
            <div class="absolute hidden md:block md:right-[4%] top-96">
                <x-bubble size="200"/>
            </div>
        </div>
    </div>
    <section class="py-24 text-center px-[10%] md:px-[20%]">
        <div class="pb-16">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-black my-6 break-words">
                <span class="text-website-normal">{{__("content.case_studies.section_1.title_1")}}</span>
                {{__("content.case_studies.section_1.title_2")}}</h2>
            <span class="font-medium leading-relaxed text-xl block" >{{__("content.case_studies.section_1.subtitle_1")}}</span>
            <span class="font-medium leading-relaxed text-xl" >{{__("content.case_studies.section_1.subtitle_2")}}</span>
        </div>
        <div class="grid grid-cols-2 gap-28">
            @foreach($caseStudies as $caseStudy)
                <x-case-study :caseStudy="$caseStudy"/>
            @endforeach
        </div>
    </section>
    <section class="text-center bg-gradient-to-b from-gray-light via-gray-light to-white">
        <div class="flex flex-col gap-14 px-[10%] md:px-[20%]  md:py-24 delay-300 duration-700 taos:scale-75 taos:opacity-0"
             data-taos-offset="400">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-gray-900 relative">
                {{__("content.case_studies.section_2.title_1")}}</h2>
            <span class="font-medium leading-relaxed text-xl relative delay-300 duration-700 taos:scale-75 taos:opacity-0"
                  data-taos-offset="400">{{__("content.case_studies.section_2.subtitle_1")}}</span>
            <div class="mx-auto">
                <x-block-primary-button href="">{{ __("buttons.text_us") }}</x-block-primary-button>

            </div>
        </div>
    </section>
@endsection

@extends("layout.public")

@section("title", __("meta.case-studies.title"))
@section("description", __("meta.case-studies.description"))

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
    <section class="py-12 text-center mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="pb-24">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-black my-6 break-words">
                <span class="text-website-normal">{{ __("content.case_studies.section_1.title_1") }}</span>
                {{ __("content.case_studies.section_1.title_2") }}</h2>
            <span class="font-light leading-relaxed text-xl block" >{{ __("content.case_studies.section_1.subtitle_1") }}</span>
            <span class="font-light leading-relaxed text-xl" >{{ __("content.case_studies.section_1.subtitle_2") }}</span>
            <span class="font-semibold leading-relaxed text-xl" >{{ __("content.case_studies.section_1.subtitle_3") }}</span>
            <span class="font-light leading-relaxed text-xl" >{{ __("content.case_studies.section_1.subtitle_4") }}</span>
        </div>
        <div class="grid lg:grid-cols-2 gap-6">
            @foreach($caseStudies as $index => $caseStudy)
                <x-case-study-tile :caseStudy="$caseStudy" class="{{ $index >= 3 ? 'hidden lg:grid' : '' }}"/>
            @endforeach
        </div>
    </section>
    <x-text-us-section/>
@endsection

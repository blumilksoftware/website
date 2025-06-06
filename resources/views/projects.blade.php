@extends("layout.public")

@section("title", __("meta.case-studies.title"))
@section("description", __("meta.case-studies.description"))

@section("content")
    <section class="py-12 text-center mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="pb-24">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-black my-6 break-words">
                <span class="text-blue-normal">{{ __("content.case_studies.section_1.title_1") }}</span>
                {{ __("content.case_studies.section_1.title_2") }}</h2>
            <span
                class="font-light leading-7.5 text-xl block">{{ __("content.case_studies.section_1.subtitle_1") }}</span>
            <span
                class="font-light leading-7.5 text-xl">{{ __("content.case_studies.section_1.subtitle_2") }}</span>
            <span
                class="font-semibold leading-7.5 text-xl">{{ __("content.case_studies.section_1.subtitle_3") }}</span>
            <span
                class="font-light leading-7.5 text-xl">{{ __("content.case_studies.section_1.subtitle_4") }}</span>
        </div>
        <div class="grid lg:grid-cols-2 gap-6">
            @foreach( $projects as $index => $project )
                <x-project-tile :project="$project" class="{{ $index >= 3 ? 'hidden lg:grid' : '' }}"/>
            @endforeach
        </div>

        <div class="pt-24">
            {{ $projects->links() }}
        </div>
    </section>
    <div class="relative overflow-hidden">
            <img src="{{ asset('graphics/shadow.webp') }}" alt=""  class="hidden md:block absolute -z-10 -right-32 h-5/6"/>

        <img src="{{ asset('graphics/shadow.webp') }}" alt="" class="hidden md:block absolute -z-10 -left-[800px] -top-44"/>
        <x-text-us-section/>
    </div>
@endsection

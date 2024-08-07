@extends("layout.public")

@section("title", $caseStudy->name)
@section("description", $caseStudy->description)

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
    </div>
    <section class="relative py-16 md:py-28 px-[10%] md:px-[20%]">
        <div class="self-center">
            <div class="text-4xl md:text-5xl xl:text-6xl text-center pb-4">
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
        <div class="pt-12 md:py-24 w-full">
            <div class="relative m-auto rounded-3xl md:bg-gray-dark aspect-[5/3] max-w-3xl h-full pl-1 shadow-md -rotate-3 md:-left-2">
                <img src="{{ asset("storage/" . $caseStudy->photo) }}"
                     class="relative aspect-[5/3] flex w-full h-full rounded-3xl bg-white shadow-md rotate-3"
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
    <section class="relative text-center bg-gradient-to-b from-gray-light via-gray-light to-white">
        <div class="flex flex-col gap-8 md:gap-14 px-[10%] md:px-[20%] py-12 md:pt-24 lg:pt-32">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-gray-900 relative">
                {{ __("content.case_study.section_2.title_1") }}
                <span class="text-website-normal">{{ __("content.case_study.section_2.title_2") }}</span>
                {{ __("content.case_study.section_2.title_3") }}
            </h2>
            <span class="font-light leading-relaxed text-xl relative">{{ __("content.case_study.section_2.subtitle_1") }}</span>
            <div class="mx-auto flex items-center">
                <x-secondary-button href="{{ route('case-studies') }}" class="md:px-16">{{ __('buttons.back_to_portfolio') }}</x-secondary-button>
                <x-primary-button class="md:px-16 bg-website-normal" href="{{ route('contact') }}">{{ __("buttons.text_us") }}</x-primary-button>
            </div>
        </div>
    </section>
@endsection

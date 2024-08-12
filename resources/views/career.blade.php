@extends("layout.public")

@section("title", __("meta.career.title"))
@section("description", __("meta.career.description"))

@section("content")
    <section class="flex flex-col-reverse xl:flex-row pt-28 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="flex basis-2/5 relative flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    <span class="text-website-normal">{{ __("content.career.section_1.title_1") }}</span>
                    {{ __("content.career.section_1.title_2") }}
                </h2>
            </div>
            <div class="flex flex-col items-center xl:items-start">
                <p class="text-lg font-normal text-center xl:text-start pb-12">
                    <span class="leading-relaxed">{{ __("content.career.section_1.subtitle_1") }}</span>
                </p>
                <p class="text-lg font-normal text-center xl:text-start">
                    <span class="leading-relaxed block">{{ __("content.career.section_1.subtitle_2") }}</span>
                    <span class="leading-relaxed font-semibold">{{ __("content.career.section_1.subtitle_3") }}</span>
                </p>
                <div class="hidden sm:block my-6">
                    <x-primary-button href="{{ route('contact') }}" class="px-16 bg-website-normal">{{ __("buttons.join_team") }}</x-primary-button>
                </div>
            </div>
        </div>
        <div class="flex basis-3/5 relative self-center pb-24 xl:pb-0">
            <img src="{{ asset('graphics/career.svg') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
    </section>
    <section class="relative">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-28 pb-36">
            <div class="pb-14 text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.career.section_2.title_1") }}</h2>
                <span class="font-normal leading-relaxed text-lg relative">{{ __("content.career.section_2.subtitle_1") }}</span>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4 2xl:gap-12 place-items-center xl:place-items-stretch">
                <x-tile title="{{ __('content.career.section_2.benefit_1') }}" class="">
                    <x-icons.clock accent="text-website-normal"/>
                </x-tile>
                <x-tile title="{{ __('content.career.section_2.benefit_2') }}">
                    <x-icons.school accent="text-website-normal"/>
                </x-tile>
                <x-tile title="{{ __('content.career.section_2.benefit_3') }}">
                    <x-icons.stethoscope accent="text-website-normal"/>
                </x-tile>
                <x-tile title="{{ __('content.career.section_2.benefit_4') }}">
                    <x-icons.treadmill accent="text-website-normal"/>
                </x-tile>
                <x-tile title="{{ __('content.career.section_2.benefit_5') }}">
                    <x-icons.lemon accent="text-website-normal"/>
                </x-tile>
                <x-tile title="{{ __('content.career.section_2.benefit_6') }}">
                    <x-icons.smile accent="text-website-normal"/>
                </x-tile>
            </div>
        </div>
    </section>
    <section class="flex flex-col-reverse mt-10 pb-5 xl:flex-row mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto gap-x-24">
        <div class="self-center basis-3/5">
            <img src="{{ asset('graphics/career_2.svg') }}" class="h-auto w-full object-center shrink-0"
                 alt="{{ __("content.career.section_3.title_1") }}"/>
        </div>
        <div class="flex basis-2/5 relative flex-col justify-center pb-24 xl:pb-0">
            <div class="text-center xl:justify-start xl:text-start xl:pb-10">
                <h2 class="font-semibold text-gray-900 leading-snug text-3xl md:text-4xl lg:text-5xl mb-10">{{ __("content.career.section_4.title_1") }}</h2>
                <p class="text-lg font-normal text-center xl:text-start">
                    <span class="leading-relaxed">{{ __("content.career.section_4.subtitle_1") }}</span>
                </p>
            </div>
            <x-primary-button href="{{ route('career.software-engineer') }}" class="px-16 my-6 flex m-auto xl:m-0 xl:mr-auto xl:justify-start bg-website-normal">{{ __("buttons.apply_now") }}</x-primary-button>
        </div>
    </section>
    <section class="relative flex xl:flex-row mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto pt-5 mb-16 xl:mb-28 gap-x-24">
        <img src="{{ asset('graphics/shadow.svg') }}" alt="blob" class="absolute -z-10 -right-[60%] -bottom-44"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="blob" class="absolute -z-10 -left-[80%] -top-60"/>

        <div class="flex xl:basis-2/5 flex-col justify-start xl:justify-center">
            <div class="text-center xl:justify-start xl:text-start xl:pb-10">
                <h2 class="font-semibold text-gray-900 leading-snug text-3xl md:text-4xl lg:text-5xl mb-10">{{ __("content.career.section_3.title_1") }}</h2>
                <p class="text-lg font-normal text-center xl:text-start">
                    <span class="leading-relaxed text-lg">{{ __("content.career.section_3.subtitle_1") }}</span>
                </p>
            </div>
            <x-primary-button href="https://praktyki.blumilk.pl/" target="_blank" class="px-16 my-6 flex m-auto xl:m-0 xl:mr-auto xl:justify-start bg-website-normal">{{ __("buttons.apply_internship") }}</x-primary-button>
        </div>
        <div class="hidden xl:flex relative self-center basis-3/5">
            <img src="{{ asset('graphics/career_3.svg') }}" class="h-auto w-full object-center shrink-0"
                 alt="{{ __("content.career.section_4.title_1") }}"/>
        </div>
    </section>
    <x-text-us-section/>
@endsection

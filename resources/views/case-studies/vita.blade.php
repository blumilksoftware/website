@extends("layout.public")

@section("title", $caseStudy->name_first_part . " " . $caseStudy->name_second_part . " " . $caseStudy->name_third_part)
@section("description", $caseStudy->description)

@section("content")
    <x-case-studies.title>
        <span class="mt-4"> {{ __("case_studies.vita.title_1") }} </span>
        <span class="text-vita"> {{ __("case_studies.vita.title_2") }} </span>
        {{ __("case_studies.vita.title_3") }}
    </x-case-studies.title>

    <x-case-studies.main-image src="{{ asset('images/case-studies/vita/laptop_1.png') }}"
                               alt="{{ __('case_studies.vita.alt.laptop_1') }}"/>

    <x-case-studies.description>{{ __("case_studies.vita.project_description") }}</x-case-studies.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("case_studies.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('case_studies.vita.challenges.challenge_1.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_1.description') }}"
                    class="max-w-[350px]">
                <x-icons.eye-code accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.vita.challenges.challenge_2.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_2.description') }}"
                    class="max-w-[350px]">
                <x-icons.shield-check accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.vita.challenges.challenge_3.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_3.description') }}"
                    class="max-w-[350px] lg:pr-6">
                <x-icons.app-window accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.vita.challenges.challenge_4.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_4.description') }}"
                    class="max-w-[350px]">
                <x-icons.credit-card accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.vita.challenges.challenge_5.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_5.description') }}"
                    class="max-w-[350px] lg:pr-10">
                <x-icons.photo-scan accent="stroke-vita"/>
            </x-tile>
        </div>
    </section>

    <div class="mb-24">
        <x-case-studies.color-palette description="{{ __('case_studies.vita.colors.description') }}"
                                      first-title="{{ __('case_studies.vita.colors.first') }}" first-bg="#56C9CD"
                                      first-text-color="text-white"
                                      second-title="{{ __('case_studies.vita.colors.second') }}" second-bg="#9676F9"
                                      second-text-color="text-white"
                                      third-title="{{ __('case_studies.vita.colors.third') }}" third-bg="#F0A53A"
                                      third-text-color="text-white"
                                      fourth-title="{{ __('case_studies.vita.colors.fourth') }}" fourth-bg="#F9FAFB"
                                      fourth-text-color="text-black"/>
    </div>

    <x-case-studies.typography font="montserrat" bg="bg-vita">
        <span
            class="font-semibold">{{ __('case_studies.vita.typography_description_1') }}</span> {{ __('case_studies.vita.typography_description_2') }}
    </x-case-studies.typography>

    <x-case-studies.image src="{{ asset('images/case-studies/vita/laptop_2.png') }}"
                          alt="{{ __('case_studies.vita.alt.laptop_2') }}"/>

    <div class="pt-40 pb-20">
        <x-case-studies.title>{{ __("case_studies.sitemap") }}</x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/vita/'.$locale.'/sitemap.svg') }}"
                              alt="{{ __('case_studies.vita.alt.sitemap') }}" margin="true"/>
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-20 pb-44 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("case_studies.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_1.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_1.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.list accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_2.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_2.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.calendar accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_3.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_3.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.replace accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_4.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_4.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.nurse accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_5.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_5.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.archive accent="stroke-vita"/>
            </x-tile>
        </div>
    </section>

    <x-case-studies.image src="{{ asset('images/case-studies/vita/mobile.png') }}"
                          alt="{{ __('case_studies.vita.alt.mobile') }}"/>


    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-7 pt-48 pb-36 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">{{ __("case_studies.vita.title_4") }}</h2>
            <div class="font-normal leading-relaxed text-md lg:text-lg relative max-w-[925px] mx-auto">{{ __("case_studies.vita.rebranding") }}</div>
    </section>
    <x-case-studies.image src="{{ asset('images/case-studies/vita/rebranding.png') }}"
                          alt="{{ __('case_studies.vita.alt.rebranding') }}"/>

    <x-text-us-section/>
@endsection

@extends("layout.public")

@section("title", $caseStudy->name_first_part . " " . $caseStudy->name_second_part . " " . $caseStudy->name_third_part)
@section("description", $caseStudy->description)

@section("content")
    <x-case-studies.title>
        <span class="text-k1 mt-4"> {{ __("case_studies.k1.title_1") }} </span>{{ __("case_studies.k1.title_2") }}
    </x-case-studies.title>

    <x-case-studies.main-image src="{{ asset('images/case-studies/k1/laptop_1.png') }}" alt="{{ __('case_studies.k1.alt.laptop_1') }}" />

    <x-case-studies.description>{{ __("case_studies.k1.project_description") }}</x-case-studies.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-10 md:pt-20 pb-24 md:pb-36 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-4 md:pb-8">{{ __("case_studies.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 lg:gap-10">
            <x-tile title="{{ __('case_studies.k1.challenges.challenge_1.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_1.description') }}"
                    class="max-w-[350px] pr-16 md:pr-0 lg:pr-9">
                    <x-icons.shield-check accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.k1.challenges.challenge_2.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_2.description') }}"
                    class="max-w-[350px]">
                    <x-icons.user-check accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.k1.challenges.challenge_3.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_3.description') }}"
                    class="max-w-[350px] pr-3 md:pr-0">
                    <x-icons.devices accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.k1.challenges.challenge_4.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_4.description') }}"
                    class="max-w-[350px]">
                    <x-icons.app-window accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.k1.challenges.challenge_5.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_5.description') }}"
                    class="max-w-[350px] pr-2 md:pr-0 lg:pr-8">
                    <x-icons.photo-scan accent="stroke-k1"/>
            </x-tile>
        </div>
    </section>

    <x-case-studies.image src="{{ asset('images/case-studies/k1/laptop_2.png') }}" alt="{{ __('case_studies.k1.alt.laptop_2') }}" />

    <div class="py-10 md:py-40">
        <x-case-studies.title>{{ __("case_studies.sitemap") }}</x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/k1/'.$locale.'/sitemap.svg') }}" alt="{{ __('case_studies.k1.alt.sitemap') }}" margin="true" />
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-20 md:pb-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-4 md:pb-8">{{ __("case_studies.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_1.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_1.description') }}"
                    class="max-w-[350px]">
                <x-icons.subtask accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_2.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_2.description') }}"
                    class="max-w-[350px]">
                <x-icons.heart-rate-monitor accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_3.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_3.description') }}"
                    class="max-w-[350px]">
                <x-icons.users accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_4.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_4.description') }}"
                    class="max-w-[350px]">
                <x-icons.list accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_5.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_5.description') }}"
                    class="max-w-[350px]">
                <x-icons.calendar-plus accent="stroke-k1" />
            </x-tile>
        </div>
    </section>

    <div class="pt-10 pb-20 md:pt-20 md:pb-44">
        <x-case-studies.title> {{ __("case_studies.architecture_schema") }} </x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/k1/'.$locale.'/architecture.svg') }}" alt="{{ __('case_studies.k1.alt.architecture') }}" margin=true />
    </div>

    <x-case-studies.image src="{{ asset('images/case-studies/k1/mobile.png') }}" alt="{{ __('case_studies.k1.alt.mobile') }}" />

    <x-text-us-section/>
@endsection

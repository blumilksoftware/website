@extends("layout.public")

@section("title", $caseStudy->name_first_part . " " . $caseStudy->name_second_part . " " . $caseStudy->name_third_part)
@section("description", $caseStudy->description)

@section("content")
    <x-case-studies.title>
        <span class="text-k1 mt-4"> {{ __("case_studies.k1.title_1") }} </span>{{ __("case_studies.k1.title_2") }}
    </x-case-studies.title>

    <x-case-studies.main-image src="{{ asset('images/case-studies/k1/laptop_1.png') }}" alt="{{ __('case_studies.k1.alt.laptop_1') }}" />

    <x-case-studies.description>{{ __("case_studies.k1.project_description") }}</x-case-studies.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("case_studies.challenges") }}</h2>
        <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
            <x-tile title="{{ __('case_studies.k1.challenges.challenge_1.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_1.description') }}"
                    class="xl:col-span-2 size-full">
                    <x-icons.shield-check accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.k1.challenges.challenge_2.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_2.description') }}"
                    class="xl:col-span-2 size-full">
                    <x-icons.user-check accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.k1.challenges.challenge_3.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_3.description') }}"
                    class="xl:col-span-2 size-full">
                    <x-icons.devices accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.k1.challenges.challenge_4.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_4.description') }}"
                    class="xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-end size-full">
                    <x-icons.app-window accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.k1.challenges.challenge_5.title') }}"
                    description="{{ __('case_studies.k1.challenges.challenge_5.description') }}"
                    class="md:col-span-2 xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-start size-full">
                    <x-icons.photo-scan accent="stroke-k1"/>
            </x-tile>
        </div>
    </section>

    <x-case-studies.color-palette description="{{ __('case_studies.k1.colors_description') }}"
                                  primary-bg="#FF5555" primary-text="text-white"
                                  secondary-bg="#000000" secondary-text="text-white"
                                  surface-bg="#F7F6F9" surface-text="text-black"
                                  text-bg="#FFFFFF" text-color="text-black"/>

    <x-case-studies.typography font="sora" bg="bg-k1" description="{{ __('case_studies.k1.typography_description') }}"/>

    <x-case-studies.image src="{{ asset('images/case-studies/k1/laptop_2.png') }}" alt="{{ __('case_studies.k1.alt.laptop_2') }}" />

    <div class="py-40">
        <x-case-studies.title>{{ __("case_studies.sitemap") }}</x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/k1/sitemap.svg') }}" alt="{{ __('case_studies.k1.alt.sitemap') }}" margin="true" />
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("case_studies.key_functionalities") }}</h2>
        <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_1.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_1.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.subtask accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_2.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_2.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.heart-rate-monitor accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_3.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_3.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.users accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_4.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_4.description') }}"
                    class="xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-end size-full">
                <x-icons.list accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('case_studies.k1.functionalities.functionality_5.title') }}"
                    description="{{ __('case_studies.k1.functionalities.functionality_5.description') }}"
                    class="md:col-span-2 xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-start size-full">
                <x-icons.calendar-plus accent="stroke-k1" />
            </x-tile>
        </div>
    </section>


    <div class="py-10 lg:py-20">
        <x-case-studies.image src="{{ asset('images/case-studies/k1/example.gif') }}" alt="{{ __('case_studies.k1.alt.gif') }}" margin="true" />
    </div>

    <div class="py-20">
        <x-case-studies.title> {{ __("case_studies.architecture_schema") }} </x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/k1/architecture.svg') }}" alt="{{ __('case_studies.k1.alt.architecture') }}" margin=true />
    </div>

    <x-case-studies.image src="{{ asset('images/case-studies/k1/mobile.png') }}" alt="{{ __('case_studies.k1.alt.mobile') }}" />

    <x-text-us-section/>
@endsection

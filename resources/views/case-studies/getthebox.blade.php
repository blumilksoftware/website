@extends("layout.public")

@section("title", $caseStudy->name_first_part . " " . $caseStudy->name_second_part . " " . $caseStudy->name_third_part)
@section("description", $caseStudy->description)

@section("content")
    <x-case-studies.title>
        <span class="mt-4"> {{ __("case_studies.gtb.title_1") }} </span>
        <span class="text-gtb"> {{ __("case_studies.gtb.title_2") }}</span>.
    </x-case-studies.title>

    <x-case-studies.main-image src="{{ asset('images/case-studies/gtb/laptop_1.png') }}" alt="{ __('case_studies.gtb.alt.laptop_1') }}" />

    <x-case-studies.description>{{ __("case_studies.gtb.project_description") }}</x-case-studies.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("case_studies.challenges") }}</h2>
        <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_1.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_1.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.app-window accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_2.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_2.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.category accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_3.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_3.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.credit-card accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_4.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_4.description') }}"
                    class="xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-end size-full">
                <x-icons.package-export accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_5.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_5.description') }}"
                    class="md:col-span-2 xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-start size-full">
                <x-icons.shield-check accent="stroke-gtb"/>
            </x-tile>
        </div>
    </section>

    <x-case-studies.color-palette description="{{ __('case_studies.gtb.colors_description') }}"
                                  primary-bg="#FAD12A" primary-text="text-black"
                                  secondary-bg="#545555" secondary-text="text-white"
                                  surface-bg="#E7E9EC" surface-text="text-black"
                                  text-bg="#FFFFFF" text-color="text-black"/>

    <x-case-studies.typography font="montserrat" bg="bg-[#545555]" description="{{ __('case_studies.gtb.typography_description') }}"/>

    <x-case-studies.image src="{{ asset('images/case-studies/gtb/laptop_2.png') }}" alt="{ __('case_studies.gtb.alt.laptop_2') }}" />

    <div class="py-40">
        <x-case-studies.title>{{ __("case_studies.sitemap") }}</x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/gtb/sitemap.svg') }}" alt="{ __('case_studies.gtb.alt.sitemap') }}" margin="true" />
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("case_studies.key_functionalities") }}</h2>
        <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_1.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_1.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.chart-infographic accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_2.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_2.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.box accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_3.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_3.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.packages accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_4.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_4.description') }}"
                    class="xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-end size-full">
                <x-icons.key accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_5.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_5.description') }}"
                    class="md:col-span-2 xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-start size-full">
                <x-icons.shield-check accent="stroke-gtb" />
            </x-tile>
        </div>
    </section>

    <x-case-studies.image src="{{ asset('images/case-studies/gtb/mobile.png') }}" alt="{{ __('case_studies.gtb.alt.mobile') }}" />

    <x-text-us-section/>
@endsection

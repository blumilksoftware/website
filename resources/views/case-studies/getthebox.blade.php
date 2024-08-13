@extends("layout.public")

@section("title", $caseStudy->name_first_part . " " . $caseStudy->name_second_part . " " . $caseStudy->name_third_part)
@section("description", $caseStudy->description)

@section("content")
    <x-case-studies.title>
        <span class="mt-4"> {{ __("case_studies.gtb.title_1") }} </span>
        <span class="text-gtb"> {{ __("case_studies.gtb.title_2") }}</span>
    </x-case-studies.title>

    <x-case-studies.main-image src="{{ asset('images/case-studies/gtb/laptop_1.png') }}" alt="{{ __('case_studies.gtb.alt.laptop_1') }}" />

    <x-case-studies.description>{{ __("case_studies.gtb.project_description") }}</x-case-studies.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("case_studies.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_1.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_1.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.app-window accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_2.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_2.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.category accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_3.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_3.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.credit-card accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_4.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_4.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.package-export accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.gtb.challenges.challenge_5.title') }}"
                    description="{{ __('case_studies.gtb.challenges.challenge_5.description') }}"
                    class="max-w-[350px] 2xl:place-items-start      ">
                <x-icons.shield-check accent="stroke-gtb"/>
            </x-tile>
        </div>
    </section>

    <x-case-studies.color-palette description="{{ __('case_studies.gtb.colors.description') }}"
                                  first-title="{{ __('case_studies.vita.colors.first') }}" first-bg="#FAD12A" first-text-color="text-black"
                                  second-title="{{ __('case_studies.vita.colors.second') }}" second-bg="#545555" second-text-color="text-white"
                                  third-title="{{ __('case_studies.vita.colors.third') }}" third-bg="#E7E9EC" third-text-color="text-black"
                                  fourth-title="{{ __('case_studies.vita.colors.fourth') }}" fourth-bg="#FFFFFF" fourth-text-color="text-black"/>

    <x-case-studies.typography font="poppins" bg="bg-[#545555]">
        <span class="font-semibold">{{ __('case_studies.gtb.typography_description_1') }}</span> {{ __('case_studies.gtb.typography_description_2') }}
    </x-case-studies.typography>

    <x-case-studies.image src="{{ asset('images/case-studies/gtb/laptop_2.png') }}" alt="{{ __('case_studies.gtb.alt.laptop_2') }}" />

    <div class="py-40">
        <x-case-studies.title>{{ __("case_studies.sitemap") }}</x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/gtb/'.$locale.'/sitemap.svg') }}" alt="{{ __('case_studies.gtb.alt.sitemap') }}" margin="true" />
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("case_studies.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_1.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_1.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.chart-infographic accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_2.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_2.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.box accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_3.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_3.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.packages accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_4.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_4.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.key accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('case_studies.gtb.functionalities.functionality_5.title') }}"
                    description="{{ __('case_studies.gtb.functionalities.functionality_5.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.shield-check accent="stroke-gtb" />
            </x-tile>
        </div>
    </section>

    <x-case-studies.image src="{{ asset('images/case-studies/gtb/mobile.png') }}" alt="{{ __('case_studies.gtb.alt.mobile') }}" />

    <x-case-studies.testimonial name="{{ __('case_studies.gtb.testimonial.name') }}"
                               company="{{ __('case_studies.gtb.testimonial.company') }}"
                               description="{{ __('case_studies.gtb.testimonial.description') }}"
                               photo="graphics/placeholders/man.svg"
                               link="https://www.linkedin.com/in/eduardo-oliveira-1b1b1b1b/"/>

    <x-text-us-section/>
@endsection

@extends("layout.public")

@section("title", $project->name_first_part . " " . $project->name_second_part . " " . $project->name_third_part)
@section("description", $project->description)

@section("content")
    <x-projects.title>
        <span class="mt-4"> {{ __("projects.gtb.title_1") }} </span>
        <span class="text-gtb"> {{ __("projects.gtb.title_2") }}</span>
    </x-projects.title>

    <x-projects.main-image src="{{ asset('images/projects/gtb/laptop_1.png') }}" alt="{{ __('projects.gtb.alt.laptop_1') }}" shift="object-[25%_50%]"/>

    <div class="mt-20 sm:mt-0">
        <x-projects.description>{{ __("projects.gtb.project_description") }}</x-projects.description>
    </div>
    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-10 md:py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold md:pb-8">{{ __("projects.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4">
            <x-tile title="{{ __('projects.gtb.challenges.challenge_1.title') }}"
                    description="{{ __('projects.gtb.challenges.challenge_1.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.app-window accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('projects.gtb.challenges.challenge_2.title') }}"
                    description="{{ __('projects.gtb.challenges.challenge_2.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.category accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('projects.gtb.challenges.challenge_3.title') }}"
                    description="{{ __('projects.gtb.challenges.challenge_3.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.credit-card accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('projects.gtb.challenges.challenge_4.title') }}"
                    description="{{ __('projects.gtb.challenges.challenge_4.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.package-export accent="stroke-gtb"/>
            </x-tile>

            <x-tile title="{{ __('projects.gtb.challenges.challenge_5.title') }}"
                    description="{{ __('projects.gtb.challenges.challenge_5.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.shield-check accent="stroke-gtb"/>
            </x-tile>
        </div>
    </section>

    <x-projects.color-palette description="{{ __('projects.gtb.colors.description') }}"
                                  first-title="{{ __('projects.vita.colors.first') }}" first-bg="#FAD12A" first-text-color="text-black"
                                  second-title="{{ __('projects.vita.colors.second') }}" second-bg="#545555" second-text-color="text-white"
                                  third-title="{{ __('projects.vita.colors.third') }}" third-bg="#E7E9EC" third-text-color="text-black"
                                  fourth-title="{{ __('projects.vita.colors.fourth') }}" fourth-bg="#333534" fourth-text-color="text-white"/>

    <x-projects.typography font="poppins" bg="bg-[#545555]">
        <span class="font-semibold">{{ __('projects.gtb.typography_description_1') }}</span> {{ __('projects.gtb.typography_description_2') }}
    </x-projects.typography>

    <x-projects.image src="{{ asset('images/projects/gtb/laptop_2.png') }}" alt="{{ __('projects.gtb.alt.laptop_2') }}" />

    <div class="py-20 md:py-40">
        <x-projects.title>{{ __("projects.sitemap") }}</x-projects.title>
        <x-projects.image src="{{ asset('images/projects/gtb/'.$locale.'/sitemap.svg') }}" alt="{{ __('projects.gtb.alt.sitemap') }}" margin="true" />
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-10 md:py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("projects.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4">
            <x-tile title="{{ __('projects.gtb.functionalities.functionality_1.title') }}"
                    description="{{ __('projects.gtb.functionalities.functionality_1.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.chart-infographic accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('projects.gtb.functionalities.functionality_2.title') }}"
                    description="{{ __('projects.gtb.functionalities.functionality_2.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.box accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('projects.gtb.functionalities.functionality_3.title') }}"
                    description="{{ __('projects.gtb.functionalities.functionality_3.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.packages accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('projects.gtb.functionalities.functionality_4.title') }}"
                    description="{{ __('projects.gtb.functionalities.functionality_4.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.key accent="stroke-gtb" />
            </x-tile>
            <x-tile title="{{ __('projects.gtb.functionalities.functionality_5.title') }}"
                    description="{{ __('projects.gtb.functionalities.functionality_5.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.shield-check accent="stroke-gtb" />
            </x-tile>
        </div>
    </section>

    <x-projects.image src="{{ asset('images/projects/gtb/mobile.png') }}" alt="{{ __('projects.gtb.alt.mobile') }}" />

    <x-projects.reference      name="{{ __('projects.gtb.testimonial.name') }}"
                               company="{{ __('projects.gtb.testimonial.company') }}"
                               description="{{ __('projects.gtb.testimonial.description') }}"
                               photo="{{ asset('graphics/placeholders/male.svg') }}"/>

    <x-text-us-section/>
@endsection

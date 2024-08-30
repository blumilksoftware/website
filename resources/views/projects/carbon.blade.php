@extends("layout.public")

@section("title", $project->name_first_part . " " . $project->name_second_part . " " . $project->name_third_part)
@section("description", $project->description)

@section("content")
    <x-projects.title>
        <span class="mt-4"> {{ __("projects.carbon.title_1") }} </span>
        <span class="text-carbon"> {{ __("projects.carbon.title_2") }}</span>
    </x-projects.title>

    <x-projects.main-image src="{{ asset('images/projects/carbon/laptop_1.png') }}" alt="{{ __('projects.carbon.alt.laptop_1') }}" shift="object-[25%_50%]"/>

    <div class="mt-20 sm:mt-0">
        <x-projects.description>{{ __("projects.carbon.project_description") }}</x-projects.description>
    </div>
    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-10 md:py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold md:pb-8">{{ __("projects.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('projects.carbon.challenges.challenge_1.title') }}"
                    description="{{ __('projects.carbon.challenges.challenge_1.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.app-window accent="stroke-carbon"/>
            </x-tile>

            <x-tile title="{{ __('projects.carbon.challenges.challenge_2.title') }}"
                    description="{{ __('projects.carbon.challenges.challenge_2.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.category accent="stroke-carbon"/>
            </x-tile>

            <x-tile title="{{ __('projects.carbon.challenges.challenge_3.title') }}"
                    description="{{ __('projects.carbon.challenges.challenge_3.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.credit-card accent="stroke-carbon"/>
            </x-tile>
        </div>
    </section>

    <x-projects.image src="{{ asset('images/projects/carbon/laptop_2.png') }}" alt="{{ __('projects.carbon.alt.laptop_2') }}" />

    <div class="py-20 md:py-40">
        <x-projects.title>{{ __("projects.sitemap") }}</x-projects.title>
        <x-projects.image src="{{ asset('images/projects/carbon/'.$locale.'/sitemap.svg') }}" alt="{{ __('projects.carbon.alt.sitemap') }}" margin="true" />
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-10 md:py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("projects.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('projects.carbon.functionalities.functionality_1.title') }}"
                    description="{{ __('projects.carbon.functionalities.functionality_1.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.chart-infographic accent="stroke-carbon" />
            </x-tile>
            <x-tile title="{{ __('projects.carbon.functionalities.functionality_2.title') }}"
                    description="{{ __('projects.carbon.functionalities.functionality_2.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.box accent="stroke-carbon" />
            </x-tile>
            <x-tile title="{{ __('projects.carbon.functionalities.functionality_3.title') }}"
                    description="{{ __('projects.carbon.functionalities.functionality_3.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.packages accent="stroke-carbon" />
            </x-tile>
            <x-tile title="{{ __('projects.carbon.functionalities.functionality_4.title') }}"
                    description="{{ __('projects.carbon.functionalities.functionality_4.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.key accent="stroke-carbon" />
            </x-tile>
            <x-tile title="{{ __('projects.carbon.functionalities.functionality_5.title') }}"
                    description="{{ __('projects.carbon.functionalities.functionality_5.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.shield-check accent="stroke-carbon" />
            </x-tile>
        </div>
    </section>

    <x-projects.image src="{{ asset('images/projects/carbon/desktop.png') }}" alt="{{ __('projects.carbon.alt.desktop') }}" />

    <x-projects.reference      name="{{ __('projects.carbon.testimonial.name') }}"
                               company="{{ __('projects.carbon.testimonial.company') }}"
                               description="{{ __('projects.carbon.testimonial.description') }}"
                               photo="graphics/placeholders/male.svg"/>

    <x-text-us-section/>
@endsection

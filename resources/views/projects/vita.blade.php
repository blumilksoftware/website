@extends("layout.public")

@section("title", $project->name_first_part . " " . $project->name_second_part . " " . $project->name_third_part)
@section("description", $project->description)

@section("content")
    <x-projects.title>
        <span class="mt-4"> {{ __("projects.vita.title_1") }} </span>
        <span class="text-vita"> {{ __("projects.vita.title_2") }} </span>
        {{ __("projects.vita.title_3") }}
    </x-projects.title>

    <x-projects.main-image src="{{ asset('images/projects/vita/laptop_1.webp') }}"
                               alt="{{ __('projects.vita.alt.laptop_1') }}"
                               shift="object-left"/>

    <x-projects.description>{{ __("projects.vita.project_description") }}</x-projects.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("projects.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4">
            <x-tile title="{{ __('projects.vita.challenges.challenge_1.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_1.description') }}"
                    class="max-w-[340px] pr-4">
                <x-icons.eye-code accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('projects.vita.challenges.challenge_2.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_2.description') }}"
                    class="max-w-[340px] pr-4">
                <x-icons.shield-check accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('projects.vita.challenges.challenge_3.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_3.description') }}"
                    class="max-w-[340px] pr-4 lg:pr-10">
                <x-icons.app-window accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('projects.vita.challenges.challenge_4.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_4.description') }}"
                    class="max-w-[340px] pr-4">
                <x-icons.credit-card accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('projects.vita.challenges.challenge_5.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_5.description') }}"
                    class="max-w-[340px] pr-4 lg:pr-14">
                <x-icons.photo-scan accent="stroke-vita"/>
            </x-tile>
        </div>
    </section>

    <div class="mb-8 md:mb-24">
        <x-projects.color-palette description="{{ __('projects.vita.colors.description') }}"
                                      first-title="{{ __('projects.vita.colors.first') }}" first-bg="#56C9CD"
                                      first-text-color="text-white"
                                      second-title="{{ __('projects.vita.colors.second') }}" second-bg="#9676F9"
                                      second-text-color="text-white"
                                      third-title="{{ __('projects.vita.colors.third') }}" third-bg="#F0A53A"
                                      third-text-color="text-white"
                                      fourth-title="{{ __('projects.vita.colors.fourth') }}" fourth-bg="#6B7280"
                                      fourth-text-color="text-white"/>
    </div>

    <x-projects.typography font="montserrat" bg="bg-vita">
        <span class="font-semibold">{{ __('projects.vita.typography_description_1') }}</span> {{ __('projects.vita.typography_description_2') }}
    </x-projects.typography>

    <x-projects.image src="{{ asset('images/projects/vita/laptop_2.webp') }}"
                          alt="{{ __('projects.vita.alt.laptop_2') }}"/>

    <div class="pt-12 md:pt-40 pb-10 md:pb-20">
        <x-projects.title>{{ __("projects.sitemap") }}</x-projects.title>
        <x-projects.image src="{{ asset('images/projects/vita/'.$locale.'/sitemap.webp') }}"
                              alt="{{ __('projects.vita.alt.sitemap') }}" margin="true"/>
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-10 md:pt-20 pb-20 md:pb-44 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("projects.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4">
            <x-tile title="{{ __('projects.vita.functionalities.functionality_1.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_1.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.list accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('projects.vita.functionalities.functionality_2.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_2.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.calendar accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('projects.vita.functionalities.functionality_3.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_3.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.replace accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('projects.vita.functionalities.functionality_4.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_4.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.nurse accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('projects.vita.functionalities.functionality_5.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_5.description') }}"
                    class="max-w-[340px] 2xl:place-items-start pr-4">
                <x-icons.archive accent="stroke-vita"/>
            </x-tile>
        </div>
    </section>

    <x-projects.image src="{{ asset('images/projects/vita/mobile.webp') }}"
                          alt="{{ __('projects.vita.alt.mobile') }}"/>


    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-7 pt-20 md:pt-48 pb-16 md:pb-24 xl:pb-36 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">{{ __("projects.vita.title_4") }}</h2>
            <div class="font-normal leading-7 text-md lg:text-lg relative max-w-[925px] mx-auto">{{ __("projects.vita.rebranding") }}</div>
    </section>
    <x-projects.image src="{{ asset('images/projects/vita/rebranding.webp') }}"
                          alt="{{ __('projects.vita.alt.rebranding') }}"/>

    <x-projects.reference      name="{{ __('projects.vita.testimonial.name') }}"
                               company="{{ __('projects.vita.testimonial.company') }}"
                               description="{{ __('projects.vita.testimonial.description') }}"
                               photo="{{ asset('graphics/placeholders/female.webp') }}"/>

    <x-text-us-section/>
@endsection

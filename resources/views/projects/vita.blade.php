@extends("layout.public")

@section("title", $project->name_first_part . " " . $project->name_second_part . " " . $project->name_third_part)
@section("description", $project->description)

@section("content")
    <x-projects.title>
        <span class="mt-4"> {{ __("projects.vita.title_1") }} </span>
        <span class="text-vita"> {{ __("projects.vita.title_2") }} </span>
        {{ __("projects.vita.title_3") }}
    </x-projects.title>

    <x-projects.main-image src="{{ asset('images/projects/vita/laptop_1.png') }}"
                               alt="{{ __('projects.vita.alt.laptop_1') }}"
                               shift="object-left"/>

    <x-projects.description>{{ __("projects.vita.project_description") }}</x-projects.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("projects.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('projects.vita.challenges.challenge_1.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_1.description') }}"
                    class="max-w-[350px]">
                <x-icons.eye-code accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('projects.vita.challenges.challenge_2.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_2.description') }}"
                    class="max-w-[350px]">
                <x-icons.shield-check accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('projects.vita.challenges.challenge_3.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_3.description') }}"
                    class="max-w-[350px] lg:pr-6">
                <x-icons.app-window accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('projects.vita.challenges.challenge_4.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_4.description') }}"
                    class="max-w-[350px]">
                <x-icons.credit-card accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('projects.vita.challenges.challenge_5.title') }}"
                    description="{{ __('projects.vita.challenges.challenge_5.description') }}"
                    class="max-w-[350px] lg:pr-10">
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
                                      fourth-title="{{ __('projects.vita.colors.fourth') }}" fourth-bg="#F9FAFB"
                                      fourth-text-color="text-black"/>
    </div>

    <x-projects.typography font="montserrat" bg="bg-vita">
        <span class="font-semibold">{{ __('projects.vita.typography_description_1') }}</span> {{ __('projects.vita.typography_description_2') }}
    </x-projects.typography>

    <x-projects.image src="{{ asset('images/projects/vita/laptop_2.png') }}"
                          alt="{{ __('projects.vita.alt.laptop_2') }}"/>

    <div class="pt-12 md:pt-40 pb-10 md:pb-20">
        <x-projects.title>{{ __("projects.sitemap") }}</x-projects.title>
        <x-projects.image src="{{ asset('images/projects/vita/'.$locale.'/sitemap.svg') }}"
                              alt="{{ __('projects.vita.alt.sitemap') }}" margin="true"/>
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-10 md:pt-20 pb-20 md:pb-44 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("projects.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 2xl:gap-10">
            <x-tile title="{{ __('projects.vita.functionalities.functionality_1.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_1.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.list accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('projects.vita.functionalities.functionality_2.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_2.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.calendar accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('projects.vita.functionalities.functionality_3.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_3.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.replace accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('projects.vita.functionalities.functionality_4.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_4.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.nurse accent="stroke-vita"/>
            </x-tile>
            <x-tile title="{{ __('projects.vita.functionalities.functionality_5.title') }}"
                    description="{{ __('projects.vita.functionalities.functionality_5.description') }}"
                    class="max-w-[350px] 2xl:place-items-start">
                <x-icons.archive accent="stroke-vita"/>
            </x-tile>
        </div>
    </section>

    <x-projects.image src="{{ asset('images/projects/vita/mobile.png') }}"
                          alt="{{ __('projects.vita.alt.mobile') }}"/>


    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-7 pt-20 md:pt-48 pb-16 md:pb-24 xl:pb-36 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold">{{ __("projects.vita.title_4") }}</h2>
            <div class="font-normal leading-relaxed text-md lg:text-lg relative max-w-[925px] mx-auto">{{ __("projects.vita.rebranding") }}</div>
    </section>
    <x-projects.image src="{{ asset('images/projects/vita/rebranding.png') }}"
                          alt="{{ __('projects.vita.alt.rebranding') }}"/>

    <x-text-us-section/>
@endsection
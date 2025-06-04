@extends("layout.public")

@section("title", $project->name_first_part . " " . $project->name_second_part . " " . $project->name_third_part)
@section("description", $project->description)

@section("content")
    <x-projects.title>
        <span class="text-k1 mt-4"> {{ __("projects.k1.title_1") }} </span>{{ __("projects.k1.title_2") }}
    </x-projects.title>

    <x-projects.main-image src="{{ asset('images/projects/k1/laptop_1.webp') }}" alt="{{ __('projects.k1.alt.laptop_1') }}" />

    <x-projects.description>{{ __("projects.k1.project_description") }}</x-projects.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-10 md:pt-20 pb-24 md:pb-36 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-4 md:pb-8">{{ __("projects.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4">
            <x-tile title="{{ __('projects.k1.challenges.challenge_1.title') }}"
                    description="{{ __('projects.k1.challenges.challenge_1.description') }}"
                    class="max-w-[340px] pr-8 md:pr-4 lg:pr-12">
                    <x-icons.shield-check accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('projects.k1.challenges.challenge_2.title') }}"
                    description="{{ __('projects.k1.challenges.challenge_2.description') }}"
                    class="max-w-[340px] pr-6">
                    <x-icons.user-check accent="stroke-k1"/>
            </x-tile>

            <x-tile description="{{ __('projects.k1.challenges.challenge_3.description') }}"
                    class="max-w-[340px] pr-6 md:pr-4">
                <x-slot:title><span class="md:pr-12">{{ __('projects.k1.challenges.challenge_3.title') }}</span></x-slot:title>
                <x-icons.devices accent="stroke-k1"/>
            </x-tile>

            <x-tile title="{{ __('projects.k1.challenges.challenge_4.title') }}"
                    description="{{ __('projects.k1.challenges.challenge_4.description') }}"
                    class="max-w-[340px] pr-4">
                    <x-icons.app-window accent="stroke-k1"/>
            </x-tile>

            <x-tile description="{{ __('projects.k1.challenges.challenge_5.description') }}"
                    class="max-w-[340px]">
                <x-slot:title><span class="pr-12">{{ __('projects.k1.challenges.challenge_5.title') }}</span></x-slot:title>
                <x-icons.photo-scan accent="stroke-k1"/>
            </x-tile>
        </div>
    </section>

    <x-projects.image src="{{ asset('images/projects/k1/laptop_2.webp') }}" alt="{{ __('projects.k1.alt.laptop_2') }}" />

    <div class="py-10 md:py-40">
        <x-projects.title>{{ __("projects.sitemap") }}</x-projects.title>
        <x-projects.image src="{{ asset('images/projects/k1/'.$locale.'/sitemap.webp') }}" alt="{{ __('projects.k1.alt.sitemap') }}" margin="true" />
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 pt-20 md:pb-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-4 md:pb-8">{{ __("projects.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4">
            <x-tile title="{{ __('projects.k1.functionalities.functionality_1.title') }}"
                    description="{{ __('projects.k1.functionalities.functionality_1.description') }}"
                    class="max-w-[340px] pr-6">
                <x-icons.subtask accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('projects.k1.functionalities.functionality_2.title') }}"
                    description="{{ __('projects.k1.functionalities.functionality_2.description') }}"
                    class="max-w-[340px] pr-4">
                <x-icons.heart-rate-monitor accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('projects.k1.functionalities.functionality_3.title') }}"
                    description="{{ __('projects.k1.functionalities.functionality_3.description') }}"
                    class="max-w-[350px] pr-6">
                <x-icons.users accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('projects.k1.functionalities.functionality_4.title') }}"
                    description="{{ __('projects.k1.functionalities.functionality_4.description') }}"
                    class="max-w-[340px] pr-4">
                <x-slot:title><span class="pr-6">{{ __('projects.k1.functionalities.functionality_4.title') }}</span></x-slot:title>
                <x-icons.list accent="stroke-k1" />
            </x-tile>
            <x-tile title="{{ __('projects.k1.functionalities.functionality_5.title') }}"
                    description="{{ __('projects.k1.functionalities.functionality_5.description') }}"
                    class="max-w-[340px] pr-4">
                <x-icons.calendar-plus accent="stroke-k1" />
            </x-tile>
        </div>
    </section>

    <div class="pt-10 pb-20 md:pt-20 md:pb-44">
        <x-projects.title> {{ __("projects.architecture_schema") }} </x-projects.title>
        <x-projects.image src="{{ asset('images/projects/k1/'.$locale.'/architecture.webp') }}" alt="{{ __('projects.k1.alt.architecture') }}" margin=true />
    </div>

    <x-projects.image src="{{ asset('images/projects/k1/mobile.webp') }}" alt="{{ __('projects.k1.alt.mobile') }}" />

    <x-text-us-section/>
@endsection

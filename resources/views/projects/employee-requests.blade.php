@extends("layout.public")

@section("title", $project->name_first_part . " " . $project->name_second_part . " " . $project->name_third_part)
@section("description", $project->description)

@section("content")
    <x-projects.title>
        <span class="mt-4"> {{ __("projects.employee_requests.title_1") }} </span>
    </x-projects.title>

    <x-projects.main-image src="{{ asset('images/projects/employee_requests/laptop_1.webp') }}" alt="{{ __('projects.employee_requests.alt.laptop_1') }}" shift="object-[25%_50%]"/>

    <div class="mt-20 sm:mt-0">
        <x-projects.description>{{ __("projects.employee_requests.project_description") }}</x-projects.description>
    </div>
    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-[1360px] 2xl:mx-auto space-y-10 pt-10 md:pt-20 pb-24 md:pb-36 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-4 md:pb-8">{{ __("projects.challenges") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4">
            <x-tile title="{{ __('projects.employee_requests.challenges.challenge_1.title') }}"
                    description="{{ __('projects.employee_requests.challenges.challenge_1.description') }}"
                    class="max-w-[430px] pr-8 md:pr-4 lg:pr-12">
                <x-icons.graph accent="stroke-employee-requests"/>
            </x-tile>

            <x-tile title="{{ __('projects.employee_requests.challenges.challenge_2.title') }}"
                    description="{{ __('projects.employee_requests.challenges.challenge_2.description') }}"
                    class="max-w-[430px] pr-6">
                <x-icons.document-clock accent="stroke-employee-requests"/>
            </x-tile>

            <x-tile title="{{ __('projects.employee_requests.challenges.challenge_4.title') }}"
                    description="{{ __('projects.employee_requests.challenges.challenge_4.description') }}"
                    class="max-w-[430px] pr-4">
                <x-icons.users accent="stroke-employee-requests"/>
            </x-tile>

            <x-tile description="{{ __('projects.employee_requests.challenges.challenge_3.description') }}"
                    class="max-w-[430px] pr-6 md:pr-4">
                <x-slot:title><span class="md:pr-12">{{ __('projects.employee_requests.challenges.challenge_3.title') }}</span></x-slot:title>
                <x-icons.image-sparkle accent="fill-employee-requests"/>
            </x-tile>

            <x-tile description="{{ __('projects.employee_requests.challenges.challenge_5.description') }}"
                    class="max-w-[450px]">
                <x-slot:title><span class="pr-12">{{ __('projects.employee_requests.challenges.challenge_5.title') }}</span></x-slot:title>
                <x-icons.shield-check accent="stroke-employee-requests"/>
            </x-tile>
        </div>
    </section>

    <x-projects.image src="{{ asset('images/projects/employee_requests/laptop_2.webp') }}" alt="{{ __('projects.employee_requests.alt.laptop_2') }}" />

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-10 py-10 md:py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("projects.key_functionalities") }}</h2>
        <div class="flex place-content-center flex-wrap gap-4 pb-24">
            <x-tile description="{{ __('projects.employee_requests.functionalities.functionality_1.description') }}"
                    class="max-w-[370px] 2xl:place-items-start">
                <x-slot:title><span class="pr-20">{{ __('projects.employee_requests.functionalities.functionality_1.title') }}</span></x-slot:title>
                <x-icons.file-invoice />
            </x-tile>
            <x-tile description="{{ __('projects.employee_requests.functionalities.functionality_2.description') }}"
                    class="max-w-[370px] 2xl:place-items-start">
                <x-slot:title><span class="pr-24">{{ __('projects.employee_requests.functionalities.functionality_2.title') }}</span></x-slot:title>
                <x-icons.notification />
            </x-tile>
            <x-tile description="{{ __('projects.employee_requests.functionalities.functionality_3.description') }}"
                    class="max-w-[370px] 2xl:place-items-start">
                <x-slot:title><span class="pr-24">{{ __('projects.employee_requests.functionalities.functionality_3.title') }}</span></x-slot:title>
                <x-icons.carambola />
            </x-tile>
            <x-tile description="{{ __('projects.employee_requests.functionalities.functionality_4.description') }}"
                    class="max-w-[370px] 2xl:place-items-start">
                <x-slot:title><span class="pr-24">{{ __('projects.employee_requests.functionalities.functionality_4.title') }}</span></x-slot:title>
                <x-icons.building-store />
            </x-tile>
            <x-tile description="{{ __('projects.employee_requests.functionalities.functionality_5.description') }}"
                    class="max-w-[370px] 2xl:place-items-start pr-4">
                <x-slot:title>
                    <span class="inline-block max-w-[80px]">{{ __('projects.employee_requests.functionalities.functionality_5.title') }}</span>
                </x-slot:title>
                <x-icons.chart-bar-popular />
            </x-tile>
            <x-tile title="{{ __('projects.employee_requests.functionalities.functionality_6.title') }}"
                    description="{{ __('projects.employee_requests.functionalities.functionality_6.description') }}"
                    class="max-w-[370px] 2xl:place-items-start pr-4">
                <x-icons.device-desktop-cog />
            </x-tile>
        </div>
    </section>

    <x-projects.image src="{{ asset('images/projects/employee_requests/mobile.webp') }}" alt="{{ __('projects.employee_requests.alt.desktop') }}" />

    <x-projects.reference      name="{{ __('projects.employee_requests.testimonial.name') }}"
                               company="{{ __('projects.employee_requests.testimonial.company') }}"
                               description="{{ __('projects.employee_requests.testimonial.description') }}"
                               photo="{{ asset('graphics/placeholders/male.webp') }}"/>

    <x-text-us-section/>
@endsection

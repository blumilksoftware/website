@extends("layout.case-study")

@section("case-study-content")
    <x-case-studies.title>
        <span class="mt-4"> {{ __("case_studies.vita.title_1") }} </span>
        <span class="text-vita"> {{ __("case_studies.vita.title_2") }} </span>
        {{ __("case_studies.vita.title_3") }}
    </x-case-studies.title>

    <x-case-studies.main-image src="{{ asset('images/case-studies/vita/laptop_1.png') }}" alt="{{ __('case_studies.vita.alt.laptop_1') }}" />

    <x-case-studies.description>{{ __("case_studies.vita.project_description") }}</x-case-studies.description>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-screen-2xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8"> {{ __("case_studies.challenges") }} </h2>
        <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
            <x-tile title="{{ __('case_studies.vita.challenges.challenge_1.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_1.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.eye-code accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.vita.challenges.challenge_2.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_2.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.shield-check accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.vita.challenges.challenge_3.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_3.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.app-window accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.vita.challenges.challenge_4.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_4.description') }}"
                    class="xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-end size-full">
                <x-icons.credit-card accent="stroke-vita"/>
            </x-tile>

            <x-tile title="{{ __('case_studies.vita.challenges.challenge_5.title') }}"
                    description="{{ __('case_studies.vita.challenges.challenge_5.description') }}"
                    class="md:col-span-2 xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-start size-full">
                <x-icons.photo-scan accent="stroke-vita"/>
            </x-tile>
        </div>
    </section>

    <x-case-studies.color-palette description="{{ __('case_studies.vita.colors_description') }}"
                                  primary-bg="#56C9CD" primary-text="text-white"
                                  secondary-bg="#9676F9" secondary-text="text-white"
                                  surface-bg="#F0A53A" surface-text="text-white"
                                  text-bg="#F9FAFB" text-color="text-black"/>

    <x-case-studies.typography font="Montserrat" bg="bg-vita" description="{{ __('case_studies.vita.typography_description') }}"/>

    <x-case-studies.image src="{{ asset('images/case-studies/vita/laptop_2.png') }}" alt="{{ __('case_studies.vita.alt.laptop_2') }}" />

    <div class="py-40">
        <x-case-studies.title>{{ __("case_studies.sitemap") }}</x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/vita/sitemap.svg') }}" alt="{{ __('case_studies.vita.alt.sitemap') }}" margin="true" />
    </div>

    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-screen-2xl 2xl:mx-auto space-y-10 py-20 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">  {{ __("case_studies.key_functionalities") }}  </h2>
        <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_1.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_1.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.list accent="stroke-vita" />
            </x-tile>
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_2.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_2.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.calendar accent="stroke-vita" />
            </x-tile>
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_3.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_3.description') }}"
                    class="xl:col-span-2 size-full">
                <x-icons.replace accent="stroke-vita" />
            </x-tile>
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_4.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_4.description') }}"
                    class="xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-end size-full">
                <x-icons.nurse accent="stroke-vita" />
            </x-tile>
            <x-tile title="{{ __('case_studies.vita.functionalities.functionality_5.title') }}"
                    description="{{ __('case_studies.vita.functionalities.functionality_5.description') }}"
                    class="md:col-span-2 xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-start size-full">
                <x-icons.archive accent="stroke-vita" />
            </x-tile>
        </div>
    </section>

    <x-case-studies.image src="{{ asset('images/case-studies/vita/mobile.png') }}" alt="{{ __('case_studies.vita.alt.mobile') }}" />
@endsection

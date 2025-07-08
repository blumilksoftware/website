<!doctype html>
<html lang="{{ App::currentLocale() }}">

<head>
    <title>{{ __("edulanding.meta.title") }} - Blumilk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content={{ __("edulanding.meta.description") }}>
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="QCB2LFVYnUSGvJgRjtceHW6LDr8p8ksYCWAVDTcYyTM"/>
    @yield('meta')
    <link rel="shortcut icon" href="{{ asset('identification/sygnet.svg') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/f6187d55ef.js" crossorigin="anonymous"></script>
    @vite('resources/js/app.ts')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"/>

    {!! RecaptchaV3::initJs() !!}
</head>

<body class="font-outfit flex flex-col h-screen justify-between">
<div class="relative z-10">
    @include('edulanding.navigation')
    <section class="relative overflow-hidden">
        <section
                 class="flex flex-col-reverse xl:flex-row pt-8 xl:pt-24 pb-16 sm:pb-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:gap-6">
            <div class="flex basis-3/7 relative flex-col self-center justify-between gap-5">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center xl:justify-start xl:text-start">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="inline">{{ __("edulanding.hero_section.title_1") }}</span>
                        <span class="text-edu-normal inline"> {{ __("edulanding.hero_section.title_2") }} </span>
                        <span class="inline">{{ __("edulanding.hero_section.title_3") }}</span>
                    </h2>
                </div>
                <div class="flex flex-col items-center xl:items-start">
                    <p class="text-sm sm:text-lg text-center xl:text-start pb-8 tablet:pb-16 text-edu-gray leading-relaxed xl:leading-7">
                        <span class=""> {{ __("edulanding.hero_section.description_1") }}</span>
                        <span class="font-semibold">
                    {{ __("edulanding.hero_section.description_2") }}
                    </span>
                    </p>
                    <x-edulanding.button href="#our_solutions"
                                         class="w-full sm:w-auto py-3 px-9">{{ __("edulanding.hero_section.button")}}
                        <i class="ti ti-arrow-right" aria-hidden="true"></i>
                    </x-edulanding.button>
                </div>
            </div>
            <div class="flex basis-4/7 relative overflow-visible self-center pb-8 xl:pb-4 xl:left-16">
                <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
                     class="absolute z-0 hidden xl:block xl:bottom-[-100px] xl:right-[-60px]" aria-hidden="true"/>
                <img src="{{ asset('images/edulanding/hero-section.webp') }}"
                     class=" h-[200px] xs:h-[230px] w-[350px] tablet:h-[400px] tablet:w-[600px] lg:h-[500px] lg:w-[750px] aspect-auto object-center rounded-[32px] z-10"
                     alt=""/>
            </div>
        </section>
        <section class="relative" id="key_benefits">
            <div class="mx-[10%] 2xl:max-w-[1200px] 2xl:mx-auto space-y-10 pt-8 sm:pt-20 lg:pt-28 lg:pb-28 pb-10">
                <div class="pb-6 flex text-center flex-col items-center gap-y-6">
                    <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                        <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                            <span class="inline">{{ __("edulanding.intro_section.title_1") }}</span>
                            <span class="text-edu-normal inline"> {{ __("edulanding.intro_section.title_2") }} </span>
                            <span class="inline">{{ __("edulanding.intro_section.title_3") }}</span>
                        </h2>
                    </div>
                    <div
                        class="font-light leading-relaxed lg:leading-7 text-sm sm:text-md lg:text-lg text-edu-gray max-w-2xl">{{ __("edulanding.intro_section.description") }}</div>
                </div>
                <div class="grid xl:grid-cols-3 gap-4 2xl:gap-12 xl:place-items-stretch">
                    <x-edulanding.tile title="{{ __('edulanding.intro_section.tile_1.title') }}"
                                       description="{{ __('edulanding.intro_section.tile_1.description') }}">
                        <x-edulanding.progress-circle :value="80"/>
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.intro_section.tile_2.title') }}"
                                       description="{{ __('edulanding.intro_section.tile_2.description') }}">
                        <x-edulanding.progress-circle :value="70"/>
                    </x-edulanding.tile>
                    <x-edulanding.tile title="{{ __('edulanding.intro_section.tile_3.title') }}"
                                       description="{{ __('edulanding.intro_section.tile_3.description') }}">
                        <x-edulanding.progress-circle :value="90"/>
                    </x-edulanding.tile>
                </div>
            </div>
        </section>
    </section>
    <section class="relative" id="our_solutions">
        <div class="px-4 sm:px-6 lg:px-12 2xl:max-w-[1200px] mx-auto space-y-10 py-8 sm:pt-20 lg:pb-28 lg:mb-12">
            <div class="flex text-center flex-col items-center gap-y-6 lg:gap-y-12">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="inline">{{ __("edulanding.our_solutions.title") }}</span>
                    </h2>
                </div>
                 <p class="leading-relaxed lg:leading-7 text-sm sm:text-lg text-edu-gray max-w-4xl text-center">
                    {{ __("edulanding.our_solutions.description_1") }}
                    <span class="font-semibold">
                    {{ __("edulanding.our_solutions.description_2") }}
                    </span>
                 </p>
            </div>
            <div class="grid md:grid-cols-2 gap-4 xl:place-items-stretch max-w-4xl mx-auto lg:mt-20" >
                <x-edulanding.card title="{{ __('edulanding.our_solutions.tile_1') }}">
                    <i class="ti ti-device-desktop text-2xl" aria-hidden="true"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.our_solutions.tile_2') }}" iconBg="bg-[#FFEED2]" iconColor="text-[#FF9900]">
                    <i class="ti ti-database text-2xl" aria-hidden="true"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.our_solutions.tile_3') }}" iconBg="bg-[#F6E2FF]" iconColor="text-[#AC1BF0]">
                    <i class="ti ti-robot text-2xl" aria-hidden="true"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.our_solutions.tile_4') }}">
                    <i class="ti ti-info-square text-2xl" aria-hidden="true"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.our_solutions.tile_5') }}">
                    <i class="ti ti-shield text-2xl" aria-hidden="true"></i>
                </x-edulanding.card>
                <x-edulanding.card title="{{ __('edulanding.our_solutions.tile_6') }}" iconBg="bg-k1-light" iconColor="text-k1">
                    <i class="ti ti-app-window text-2xl" aria-hidden="true"></i>
                </x-edulanding.card>
            </div>
        </div>
    </section>
    <section class="relative" id="case_studies">
        <div class="px-4 sm:px-6 lg:px-12 2xl:max-w-[1200px] mx-auto space-y-10 pt-8 sm:pt-20 lg:pb-28">
            <div class="flex text-center flex-col items-center gap-y-6 lg:gap-y-12">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="inline">{{ __("edulanding.case_studies.title") }}</span>
                    </h2>
                </div>
                <p class="leading-relaxed lg:leading-7 text-sm sm:text-lg text-edu-gray max-w-4xl text-center">
                    {{ __("edulanding.case_studies.description") }}
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 lg:gap-28 xl:place-items-stretch max-w-4xl mx-auto lg:mt-20">
                <x-edulanding.card-with-image
                    title="{{ __('edulanding.case_studies.k1.title') }}"
                    description="{{ __('edulanding.case_studies.k1.description') }}"
                    image="{{ asset('images/edulanding/k1.webp') }}"
                    url="{{ route('edulanding.k1') }}"
                    alt="{{ __('edulanding.case_studies.k1.image_alt') }}"
                />
                <x-edulanding.card-with-image
                    title="{{ __('edulanding.case_studies.erasmus.title') }}"
                    description="{{ __('edulanding.case_studies.erasmus.description') }}"
                    image="{{ asset('images/edulanding/erasmus.webp') }}"
                    url="{{ route('edulanding.erasmus') }}"
                    alt="{{ __('edulanding.case_studies.erasmus.image_alt') }}"
                />
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="px-4 sm:px-6 lg:px-12 lg:max-w-[1200px] mx-auto space-y-10 lg:space-y-24 py-12">
            <div class="flex text-center flex-col items-center gap-y-6 lg:gap-y-12">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="inline">{{ __("edulanding.audience.title") }}</span>
                    </h2>
                </div>
                <p class="leading-relaxed lg:leading-7 text-sm sm:text-lg text-edu-gray max-w-4xl text-center">
                    {{ __("edulanding.audience.description") }}
                </p>
            </div>
            <div class="grid grid-cols-1 tablet:grid-cols-2 gap-12 items-center">
                <div class="hidden tablet:flex flex-col tablet:flex-row gap-4 h-auto tablet:h-[400px] justify-between">
                    <div class="relative">
                        <div class="rounded-3xl overflow-hidden self-auto tablet:self-end">
                            <img  src="{{ asset('images/edulanding/audience1.webp') }}" aria-hidden="true" class="w-full tablet:w-auto object-cover" />
                        </div>
                        <div class="absolute -z-10 -top-12 -left-8 hidden lg:block">
                            <img src="{{ asset('images/edulanding/plus-icons.svg') }}" aria-hidden="true"/>
                        </div>
                    </div>
                    <div class="rounded-3xl overflow-hidden self-auto tablet:self-start">
                        <img src="{{ asset('images/edulanding/audience2.webp') }}" aria-hidden="true" class="w-full tablet:w-auto object-cover" />
                    </div>
                    <div class="rounded-3xl overflow-hidden self-auto tablet:self-center">
                        <img src="{{ asset('images/edulanding/audience3.webp') }}" aria-hidden="true" class="w-full tablet:w-auto object-cover" />
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="flex items-center bg-white rounded-xl shadow-lg/5 p-5 gap-4 border border-gray-light">
                        <div class="size-16 flex items-center justify-center bg-edu-light text-edu-normal rounded-2xl">
                            <i class="ti ti-school text-3xl" aria-hidden="true"></i>
                        </div>
                        <span class="text-edu-gray-dark font-medium text-xl">
                        {{ __("edulanding.audience.groups.higher_education") }}
                    </span>
                    </div>
                    <div class="flex items-center bg-white rounded-xl shadow-lg/5 p-5 gap-4 border border-gray-light">
                        <div class="size-16 flex items-center justify-center bg-[#FFEED2] text-[#FF9900] rounded-2xl">
                            <i class="ti ti-backpack text-3xl" aria-hidden="true"></i>
                        </div>
                        <span class="text-edu-gray-dark font-medium text-xl">
                        {{ __("edulanding.audience.groups.secondary_schools") }}
                    </span>
                    </div>
                    <div class="flex items-center bg-white rounded-xl shadow-lg/5 p-5 gap-4 border border-gray-light">
                        <div class="size-16 flex items-center justify-center bg-[#F6E2FF] text-[#AA16EF] rounded-2xl">
                            <i class="ti ti-microscope text-3xl" aria-hidden="true"></i>
                        </div>
                        <span class="text-edu-gray-dark font-medium text-xl">
                        {{ __("edulanding.audience.groups.training_research_institutions") }}
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative z-20">
        <div class="px-4 sm:px-6 lg:px-12 lg:max-w-[1200px] mx-auto space-y-10 py-12 lg:py-24 lg:mb-12">
            <div class="flex text-center flex-col items-center gap-y-6 lg:gap-y-10">
                <div class="text-3xl md:text-5xl lg:text-6xl text-center">
                    <h2 class="font-semibold text-edu-gray-dark leading-7 md:leading-tight">
                        <span class="text-edu-normal inline">{{ __("edulanding.security.title_1") }}</span>
                        <span class="inline"> {{ __("edulanding.security.title_2") }} </span>
                    </h2>
                </div>
                <p class="leading-relaxed lg:leading-7 text-sm sm:text-lg lg:text-xl text-edu-gray max-w-2xl text-center">
                    {{ __("edulanding.security.description") }}
                </p>
            </div>
        </div>
    </section>
    <x-edulanding.contact-form>
        <x-slot name="title">
            {{ __('edulanding.contact.title') }}
        </x-slot>
        <x-slot name="description">
            <span class="block">{{ __('edulanding.contact.description_1') }}</span>
            <span>{{ __('edulanding.contact.description_2') }}</span>
        </x-slot>
    </x-edulanding.contact-form>
</div>
@include('layout.footer')
@include('components.cookies')
</body>

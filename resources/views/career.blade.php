@extends("layout.public")

@section("content")
    <div class="relative md:block">
        <div class="absolute -left-[15%] md:-left-[2%] lg:left-0 top-28 md:top-40">
            <x-bubble size="100"/>
        </div>
        <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
            <x-bubble size="50"/>
        </div>
        <div class="absolute right-[4%] top-36">
            <x-bubble size="40"/>
        </div>
    </div>
    <section class="flex flex-col-reverse xl:flex-row pt-28 px-[10%] md:px-[20%]">
        <div class="flex basis-1/2 relative flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    {{__("content.career.section_1.title_1")}}
                    <span class="text-website-normal"> {{__("content.career.section_1.title_2")}} </span>
                </h2>
            </div>
            <div class="flex flex-col items-center xl:items-start">
                <p class="text-md lg:text-lg font-light text-center xl:text-start leading-relaxed">
                    {{__("content.career.section_1.subtitle_1")}}
                </p>
                <div class="hidden sm:block my-6">
                    <x-primary-button href="{{ route('contact') }}" class="px-14">{{ __("buttons.join_team") }}</x-primary-button>
                </div>
            </div>
        </div>
        <div class="flex relative self-center pb-24 xl:pb-0">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
    </section>
    <section class="relative bg-gradient-to-r from-gray-dark to-gray-extraLight">
        <x-waves.wave-1.top></x-waves.wave-1.top>
        <div class="px-[10%] md:px-[20%] space-y-10 pt-28 pb-28">
            <div class="pb-14 text-center">
                <h2 class="text-3xl md:text-3xl lg:text-5xl font-semibold pb-8">{{__("content.career.section_2.title_1")}}</h2>
                <span class="font-light leading-relaxed text-md lg:text-lg relative">{{__("content.career.section_2.subtitle_1")}}</span>
            </div>
            <div class="grid xl:grid-cols-3 gap-4 2xl:gap-12 place-items-center xl:place-items-stretch">
                @for($benefit = 1; $benefit <= 6; $benefit++)
                    <x-benefit-tile :benefit="$benefit"/>
                @endfor
            </div>
        </div>
        <x-waves.wave-3.bottom></x-waves.wave-3.bottom>
    </section>
    <section class="relative flex flex-col-reverse pt-10 xl:flex-row px-[10%] md:px-[20%] gap-x-16 -top-24 2xl:-top-44 gap-y-12">
        <div class="flex relative self-center">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full xl:h-full xl:w-auto aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
        <div class="flex basis-1/2 relative flex-col justify-between">
            <div class="text-center xl:justify-start xl:text-start py-4">
                <h2 class="font-semibold text-gray-900 leading-snug text-3xl md:text-4xl lg:text-5xl">{{__("content.career.section_3.title_1")}}</h2>
                <x-badge class="py-8 flex place-items-center justify-center xl:justify-start">{{__("content.career.section_3.badge")}}</x-badge>
                <p class="text-md lg:text-lg font-light text-center xl:text-start">
                    <span class="leading-relaxed text-md lg:text-lg">{{__("content.career.section_3.subtitle_1")}}</span>
                    <span class="font-semibold leading-relaxed">{{__("content.career.section_3.subtitle_2")}}</span>
                    <span class="leading-relaxed">{{__("content.career.section_3.subtitle_3")}}</span>
                </p>
            </div>
            <x-primary-button href="https://praktyki.blumilk.pl/" class="px-14 my-6 flex m-auto xl:m-0 xl:mr-auto xl:justify-start">{{ __("buttons.apply_internship") }}</x-primary-button>
        </div>
    </section>
    <section class="flex xl:flex-row px-[10%] md:px-[20%] xl:gap-x-16">
        <div class="flex xl:basis-1/2 relative flex-col justify-start xl:justify-between">
            <div class="text-center xl:justify-start xl:text-start py-4">
                <h2 class="font-semibold text-gray-900 leading-snug text-3xl md:text-4xl lg:text-5xl">{{__("content.career.section_4.title_1")}}</h2>
                <x-badge class="py-8 flex place-items-center justify-center xl:justify-start">{{__("content.career.section_4.badge")}}</x-badge>
                <p class="text-md lg:text-lg font-light text-center xl:text-start">
                    <span class="leading-relaxed font-semibold block">{{__("content.career.section_4.subtitle_1")}}</span>
                    <span class="leading-relaxed">{{__("content.career.section_4.subtitle_2")}}</span>
                </p>
            </div>
            <x-primary-button href="{{ route('career.job', 'software-engineer') }}" class="px-14 my-6 flex m-auto xl:m-0 xl:mr-auto xl:justify-start">{{ __("buttons.apply_now") }}</x-primary-button>
        </div>
        <div class="hidden xl:flex relative self-center">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full xl:h-full xl:w-auto aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
    </section>
@endsection

@extends("layout.public")

@section("content")
    <section class="flex flex-col-reverse xl:flex-row pt-28 px-[10%] md:px-[20%]">
        <div class="flex basis-1/2 relative flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start py-4">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    {{__("content.career.section_1.title_1")}}
                    <span class="text-website-normal"> {{__("content.career.section_1.title_2")}} </span>
                </h2>
            </div>
            <div class="flex flex-col items-center xl:items-start">
                <p class="text-lg lg:text-xl font-light text-center xl:text-start leading-relaxed">
                    {{__("content.career.section_1.subtitle_1")}}
                </p>
                <div class="hidden sm:block my-6">
                    <x-primary-button href="{{ route("contact") }}" class="px-24">{{ __("buttons.join_team") }}</x-primary-button>
                </div>
            </div>
        </div>
        <div class="flex relative self-center">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
    </section>
    <section class="relative bg-gradient-to-br from-gray-light to-white">
        <x-waves.wave-1.top></x-waves.wave-1.top>
        <div class="px-[10%] md:px-[20%] space-y-10 py-28">
            <div class="pb-14 text-center">
                <h2 class="text-3xl md:text-3xl lg:text-5xl font-semibold pb-8">{{__("content.career.section_2.title_1")}}</h2>
                <span class="font-light leading-relaxed text-xl relative">{{__("content.career.section_2.subtitle_1")}}</span>
            </div>
            <div class="grid xl:grid-cols-3 gap-4 2xl:gap-12 place-items-center xl:place-items-stretch">
                @for($benefit = 1; $benefit <= 6; $benefit++)
                    <x-benefit-tile :benefit="$benefit"/>
                @endfor
            </div>
        </div>
        <x-waves.wave-1.bottom></x-waves.wave-1.bottom>
    </section>
    <section class="relative flex flex-col-reverse py-10 xl:flex-row px-[10%] md:px-[20%] gap-x-16 -top-36">
        <div class="flex relative self-center">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
        <div class="flex basis-1/2 relative flex-col justify-between gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start py-4">
                <h2 class="font-semibold text-gray-900 leading-snug">{{__("content.career.section_3.title_1")}}</h2>
                <x-badge>{{__("content.career.section_3.badge")}}</x-badge>

                <p class="text-lg lg:text-xl font-light text-center xl:text-start">
                    <span class="leading-relaxed">{{__("content.career.section_3.subtitle_1")}}</span>
                    <span class="font-semibold leading-relaxed">{{__("content.career.section_3.subtitle_2")}}</span>
                    <span class="leading-relaxed">{{__("content.career.section_3.subtitle_3")}}</span>
                </p>
            </div>
            <div class="my-6">
                <x-primary-button href="" class="px-24">{{ __("buttons.apply_internship") }}</x-primary-button>
            </div>
        </div>
    </section>
    <section class="hidden py-10 xl:flex xl:flex-row px-[10%] md:px-[20%] gap-x-16">
        <div class="flex basis-1/2 relative flex-col justify-between gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start py-4">
                <h2 class="font-semibold text-gray-900 leading-snug">{{__("content.career.section_4.title_1")}}</h2>
                <x-badge>{{__("content.career.section_4.badge")}}</x-badge>

                <p class="text-lg lg:text-xl font-light text-center xl:text-start leading-relaxed">
                    {{__("content.career.section_4.subtitle_1")}}
                </p>
            </div>
            <div class="my-6">
                <x-primary-button href="{{ route("software.engineer") }}" class="px-24">{{ __("buttons.apply_now") }}</x-primary-button>
            </div>
        </div>
        <div class="flex relative self-center">
            <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
    </section>
@endsection

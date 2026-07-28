@extends("layout.public")

@section("title", __("meta.offer.title"))
@section("description", __("meta.offer.description"))

@section("content")
    <section class="relative flex flex-col-reverse xl:flex-row pt-12 pb-0 md:pb-14 md:pt-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto place-items-start gap-8 xl:gap-16">
        <div class="flex basis-2/5 xl:flex-1 flex-col">
            <div class="text-3xl md:text-4xl xl:text-5xl text-center xl:justify-start xl:text-start pb-4 pt-4 md:pt-0">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    {{ __("content.offer.section_1.title_1") }}
                    <span class="text-blue-normal"> {{ __("content.offer.section_1.title_2") }} </span>
                </h2>
            </div>
            <div class="items-center xl:items-start text-sm md:text-lg max-w-[500px] mx-auto xl:mx-0">
                <p class="font-normal text-center xl:text-start pb-8 leading-7">
                    {{ __("content.offer.section_1.subtitle_1") }}
                    <span class="font-semibold"> {{ __("content.offer.section_1.subtitle_2") }} </span>
                </p>
            </div>
        </div>
        <div class="flex basis-3/5 xl:basis-auto xl:flex-none">
            <img src="{{ asset('graphics/offer_2.webp') }}"
                 class="w-full max-w-[280px] sm:max-w-[350px] tablet:max-w-[700px] xl:max-w-[550px] h-auto object-contain mx-auto xl:mx-0"
                 alt=""/>
        </div>
    </section>

    <section class="relative">
        <div class="mx-[10%] lg:mx-[15%] md:space-y-10 pt-14 md:pt-28 pb-20 md:pb-36">
            <div class="pb-10 md:pb-14 text-center max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.offer.section_2.title_1") }}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 min-[1900px]:grid-cols-4 gap-4 2xl:gap-12 2xl:max-w-[1580px] 2xl:mx-auto">
                <x-tile title="{{ __('content.offer.section_2.requirement_1') }}"
                        class="bg-gray-extra-light">
                    <x-icons.automation accent="text-website-normal"/>
                </x-tile>

                <x-tile title="{{ __('content.offer.section_2.requirement_2') }}"
                        class="bg-gray-extra-light">
                    <x-icons.file-info accent="text-website-normal"/>
                </x-tile>

                <x-tile title="{{ __('content.offer.section_2.requirement_3') }}"
                        class="bg-gray-extra-light">
                    <x-icons.database-import accent="text-website-normal"/>
                </x-tile>

                <x-tile title="{{ __('content.offer.section_2.requirement_4') }}"
                        class="bg-gray-extra-light">
                    <x-icons.gavel accent="text-website-normal"/>
                </x-tile>
            </div>
        </div>
    </section>

    <section class="relative overflow-x-clip overflow-y-visible">
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 left-1/2 top-0"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 -right-96 bottom-0"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 -left-96 top-0"/>

        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto pt-14 md:pt-28 pb-20 md:pb-36">
            <div class="flex flex-col xl:flex-row gap-10 xl:gap-16 items-center">
                <div class="flex basis-2/5 justify-center">
                    <img src="{{ asset('graphics/about.webp') }}"
                         class="w-full max-w-[280px] sm:max-w-[350px] tablet:max-w-[700px] h-auto object-contain mx-auto"
                         alt=""/>
                </div>

                <div class="flex basis-3/5 flex-col gap-4 w-full" x-data="{ openIndex: null }">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">
        <span class="md:whitespace-nowrap">
            {{ __("content.offer.section_3.title_1") }}<span class="text-blue-normal">{{ __("content.offer.section_3.title_2") }}</span>
        </span>
                        {{ __("content.offer.section_3.title_3") }}
                    </h2>

                    @for ($i = 1; $i <= 6; $i++)
                        <div class="bg-white rounded-xl shadow-sm border border-[#8D8D8D] overflow-hidden">
                            <button
                                type="button"
                                @click="openIndex = (openIndex === {{ $i }}) ? null : {{ $i }}"
                                class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left"
                            >
                                <span class="font-semibold text-lg leading-7">{{ __("content.offer.section_3.item_$i.title") }}</span>
                                <svg
                                    class="size-5 shrink-0 transition-transform duration-300"
                                    :class="{ 'rotate-180': openIndex === {{ $i }} }"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div
                                x-show="openIndex === {{ $i }}"
                                x-collapse
                                class="px-6 pb-5 text-sm text-gray-600 leading-6"
                            >
                                {{ __("content.offer.section_3.item_{$i}.description") }}
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <x-text-us-section></x-text-us-section>
@endsection

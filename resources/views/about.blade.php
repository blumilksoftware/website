@extends("layout.public")

@section("title", __("meta.about.title"))
@section("description", __("meta.about.description"))

@section("content")
    <section class="relative flex flex-col-reverse 2xl:flex-row pt-12 pb-0 md:pb-14 md:pt-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto place-items-center">
        <div class="flex basis-2/5 flex-col self-center">
            <div class="text-3xl md:text-4xl xl:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4 pt-4 md:pt-0">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    <span class="text-blue-normal"> {{ __("content.about.section_1.title_1") }}</span>
                    {{ __("content.about.section_1.title_2") }}
                </h2>
            </div>
            <div class="items-center 2xl:items-start text-sm md:text-lg max-w-[886px]">
                <p class="font-normal text-center 2xl:text-start pb-8 leading-7">
                    <span class="font-semibold">{{ __("content.about.section_1.subtitle_1") }}</span>
                    {{ __("content.about.section_1.subtitle_2") }}
                </p>
                <p class="font-normal text-center 2xl:text-start pb-8 leading-7">
                    {{ __("content.about.section_1.subtitle_3") }}
                    <span class="font-semibold"> {{ __("content.about.section_1.subtitle_4") }}</span>
                    {{ __("content.about.section_1.subtitle_5") }}
                </p>
            </div>
        </div>
        <div class="flex basis-3/5">
            <img src="{{ asset('graphics/about.webp') }}" class="size-full align-middle m-4 relative 2xl:left-24"
                 alt=""/>
        </div>
    </section>
    <section class="bg-white py-12 sm:pt-16 sm:pb-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:flex xl:justify-between overflow-hidden text-center text-[#0E0B3D] gap-16 md:gap-8">
            <div>
                <dl class="flex flex-col gap-4">
                    <dd class="order-first text-6xl font-semibold">+25</dd>
                    <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_1") }}</dt>
                </dl>
            </div>
            <div>
                <dl class="flex flex-col gap-4">
                    <dd class="order-first text-6xl font-semibold">175</dd>
                    <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_2") }}</dt>
                </dl>
            </div>
            <div>
                <dl class="flex flex-col gap-4">
                    <dd class="order-first text-6xl font-semibold">118</dd>
                    <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_3") }}</dt>
                </dl>
            </div>
            <div>
                <dl class="flex flex-col gap-4">
                    <dd class="order-first text-6xl font-semibold">1000+</dd>
                    <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_4") }}</dt>
                </dl>
            </div>
        </div>
    </section>
    <section class="relative pt-14 pb-12 md:pb-24 text-center">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:space-y-10">
            <div class="pb-14 max-w-[886px] mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_3.title_1") }}</h2>
                <span class="font-normal leading-7 text-sm md:text-lg md:block">{{ __("content.about.section_3.subtitle_1") }}</span>
                <span class="font-normal leading-7 text-sm md:text-lg">{{ __("content.about.section_3.subtitle_2") }}</span>
            </div>
            <div class="grid xl:grid-cols-3 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
                <x-tile title="{{ __('content.about.section_3.content_1') }}"
                        description="{{ __('content.about.section_3.content_2') }}"
                        class="size-full 2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile>
                <x-tile title="{{ __('content.about.section_3.content_3') }}"
                        description="{{ __('content.about.section_3.content_4') }}"
                        class="size-full 2xl:place-items-start">
                    <x-icons.bulb accent="stroke-blue-normal-neon" />
                </x-tile>
                <x-tile title="{{ __('content.about.section_3.content_5') }}"
                        description="{{ __('content.about.section_3.content_6') }}"
                        class="size-full 2xl:place-items-start">
                    <x-icons.diamond accent="stroke-blue-normal-neon" />
                </x-tile>
            </div>
        </div>
    </section>
    <section class="relative pt-14 pb-12 md:pb-24 text-center">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:space-y-10">
            <div class="pb-14 max-w-[886px] mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_6.title_1") }}</h2>
            </div>
            <div class="flex flex-col gap-4 2xl:gap-10">
            <div class="flex flex-col xl:flex-row gap-4 2xl:gap-10 justify-center">
                <x-tile-top-icon title="{{ __('content.about.section_6.benefit_1.title') }}"
                                 description="{{ __('content.about.section_6.benefit_1.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.heart-code accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.about.section_6.benefit_2.title') }}"
                                 description="{{ __('content.about.section_6.benefit_2.subtitle') }}"
                                 class="flex flex-col items-center text-center gap-4">
                    <x-icons.bulb accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.about.section_6.benefit_3.title') }}"
                                 description="{{ __('content.about.section_6.benefit_3.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.diamond accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
            </div>
            <div class="flex flex-col xl:flex-row gap-4 2xl:gap-10 justify-center">
                <x-tile-top-icon title="{{ __('content.about.section_6.benefit_4.title') }}"
                                 description="{{ __('content.about.section_6.benefit_4.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.diamond accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
                <x-tile-top-icon title="{{ __('content.about.section_6.benefit_5.title') }}"
                                 description="{{ __('content.about.section_6.benefit_5.subtitle') }}"
                                 class="2xl:place-items-start">
                    <x-icons.diamond accent="stroke-blue-normal-neon" />
                </x-tile-top-icon>
            </div>
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden pt-10 pb-14 md:pt-14 md:pb-28">
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 -right-96 -bottom-0"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 -left-[800px] -bottom-64"/>

        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
            <div class="pb-14 text-center max-w-[886px] mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_4.title_1") }}</h2>
                <span class="font-normal leading-7 text-sm md:text-lg">{{ __("content.about.section_4.subtitle_1") }}</span>
            </div>
            <div class="flex justify-center">
                <div class="2xl:mt-2 text-left ml-4">
        <span class="font-semibold text-sm md:text-lg block pb-2 -ml-4">
            {{ __("content.about.section_4.benefits.title_1") }}
        </span>
                    <ul class="list-square font-normal text-gray-600 text-xs md:text-sm">
                        @for($stackListItem = 1; $stackListItem <= 5; $stackListItem++)
                            <li class="text-md leading-7">
                                {{ __("content.about.section_4.benefits.benefit_$stackListItem") }}
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden pt-10 pb-14 md:pt-14 md:pb-28">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:space-y-10">
            <div class="pb-14 max-w-[886px] mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8 text-center">{{ __("content.about.section_7.title_1") }}</h2>
            </div>
            <div class="grid xl:grid-cols-3 gap-10">
                @for($col = 1; $col <= 3; $col++)
                    <div>
                        <p class="text-md md:text-lg">
                            {{ __("content.about.section_7.column_{$col}.text_1") }}
                            <span class="font-semibold">{{ __("content.about.section_7.column_{$col}.text_2") }}</span>
                            {{ __("content.about.section_7.column_{$col}.text_3") }}
                        </p>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section class="relative md:pb-16 pt-14 md:pt-28 sm:pt-32 mx-[8%] lg:mx-[15%] 2xl:mx-auto 2xl:max-w-7xl px-6 lg:px-8">
        <div x-data="{
    imageGalleryOpened: false,
    imageGalleryActiveUrl: null,
    imageGalleryImageIndex: 0,
    imageGallery: [
        {
            'photo': '{{ asset('images/photos/archery.webp') }}',
            'alt': '{{ __('alt.archery') }}'
        },
        {
            'photo': '{{ asset('images/photos/hotel-babylon.webp') }}',
            'alt': '{{ __('alt.hotel_babylon') }}'
        },
        {
            'photo': '{{ asset('images/photos/fireplace.webp') }}',
            'alt': '{{ __('alt.fireplace') }}'
        },
        {
            'photo': '{{ asset('images/photos/energylandia.webp') }}',
            'alt': '{{ __('alt.energylandia') }}'
        },
        {
            'photo': '{{ asset('images/photos/laravel.webp') }}',
            'alt': '{{ __('alt.laravel') }}'
        },
        {
            'photo': '{{ asset('images/photos/beer.webp') }}',
            'alt': '{{ __('alt.beer') }}'
        },
        {
            'photo': '{{ asset('images/photos/meetup.webp') }}',
            'alt': '{{ __('alt.meetup') }}'
        },
        {
            'photo': '{{ asset('images/photos/sea.webp') }}',
            'alt': '{{ __('alt.sea') }}'
        },
        {
            'photo': '{{ asset('images/photos/paintball.webp') }}',
            'alt': '{{ __('alt.paintball') }}'
        },
        {
            'photo': '{{ asset('images/photos/beer-2.webp') }}',
            'alt': '{{ __('alt.beer_2') }}'
        },
        {
            'photo': '{{ asset('images/photos/dolni-morava.webp') }}',
            'alt': '{{ __('alt.dolni_morava') }}'
        },
        {
            'photo': '{{ asset('images/photos/birthday.webp') }}',
            'alt': '{{ __('alt.birthday') }}'
        }
    ],
    imageGalleryOpen(event) {
        this.imageGalleryImageIndex = parseInt(event.target.dataset.index);
        this.imageGalleryActiveUrl = event.target.src;
        this.imageGalleryOpened = true;
    },
    imageGalleryClose() {
        this.imageGalleryOpened = false;
        setTimeout(() => this.imageGalleryActiveUrl = null, 300);
    },
    imageGalleryNext(){
        this.imageGalleryImageIndex = (this.imageGalleryImageIndex >= this.imageGallery.length - 1) ? 0 : (this.imageGalleryImageIndex + 1);
        this.imageGalleryActiveUrl = this.imageGallery[this.imageGalleryImageIndex].photo;
    },
    imageGalleryPrev() {
        this.imageGalleryImageIndex = (this.imageGalleryImageIndex <= 0) ? (this.imageGallery.length - 1) : (this.imageGalleryImageIndex - 1);
        this.imageGalleryActiveUrl = this.imageGallery[this.imageGalleryImageIndex].photo;
    }
    }"
             @image-gallery-next.window="imageGalleryNext()"
             @image-gallery-prev.window="imageGalleryPrev()"
             @keyup.right.window="imageGalleryNext();"
             @keyup.left.window="imageGalleryPrev();"
             class="w-full h-full select-none">
            <div class="pb-2 text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_5.title_1") }}</h2>
                <span class="font-normal leading-7 text-sm md:text-lg relative">{{ __("content.about.section_5.subtitle_1") }}</span>
            </div>
            <div class="mx-auto mt-8 md:mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm leading-7 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
                <figure class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
                    <img class="md:h-96 w-full object-cover rounded-2xl transition hover:scale-105 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[10].photo" :alt="imageGallery[10].alt" data-index="10">
                </figure>
                <div class="space-y-8 xl:contents xl:space-y-0">
                    <div class="space-y-8 xl:row-span-2">
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[1].photo" :alt="imageGallery[1].alt" data-index="1">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-48 w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[2].photo" :alt="imageGallery[2].alt" data-index="2">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-60 w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[9].photo" :alt="imageGallery[9].alt" data-index="9">
                        </figure>
                    </div>
                    <div class="space-y-8 xl:row-start-1 hidden sm:block">
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-60 w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[3].photo" :alt="imageGallery[3].alt" data-index="3">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-48 w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[8].photo" :alt="imageGallery[8].alt" data-index="8">
                        </figure>
                    </div>
                </div>
                <div class="space-y-8 xl:contents xl:space-y-0 hidden sm:block">
                    <div class="space-y-8 xl:row-start-1">
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-60 w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[4].photo" :alt="imageGallery[4].alt" data-index="4">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-48 w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[0].photo" :alt="imageGallery[0].alt" data-index="0">
                        </figure>
                    </div>
                    <div class="space-y-8 xl:row-span-2">
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-60 w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[11].photo" :alt="imageGallery[11].alt" data-index="11">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[6].photo" :alt="imageGallery[6].alt" data-index="6">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-full w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[7].photo" :alt="imageGallery[7].alt" data-index="7">
                        </figure>
                        <figure class="shadow-lg ring-1 ring-gray-900/5 rounded-2xl">
                            <img class="h-60 w-full object-cover rounded-2xl transition hover:scale-110 hover:cursor-pointer" x-on:click="imageGalleryOpen" :src="imageGallery[5].photo" :alt="imageGallery[5].alt" data-index="5">
                        </figure>
                    </div>
                </div>
            </div>
            <template x-teleport="body">
                <div
                    x-show="imageGalleryOpened"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:leave="transition ease-in-in duration-300"
                    x-transition:leave-end="opacity-0"
                    @click="imageGalleryClose"
                    @keydown.window.escape="imageGalleryClose"
                    x-trap.inert.noscroll="imageGalleryOpened"
                    class="fixed inset-0 z-99 flex items-center justify-center bg-black/50 select-none cursor-zoom-out" x-cloak>
                    <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12">
                        <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="absolute left-0 flex items-center justify-center text-white translate-x-10 rounded-full cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                            <span class="sr-only">{{ __('alt.prev') }}</span>
                            <i class="ti ti-chevron-left text-3xl"></i>
                        </div>
                        <div class="flex items-center justify-center h-full p-8 rounded-lg cursor-auto">
                            <img :src="imageGalleryActiveUrl" :alt="imageGallery[imageGalleryImageIndex].alt" class="h-full transition select-none md:max-h-[600px]"/>
                        </div>
                        <div @click="$event.stopPropagation(); $dispatch('image-gallery-next')" class="absolute right-0 flex items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                            <span class="sr-only">{{ __('alt.next') }}</span>
                            <i class="ti ti-chevron-right text-3xl"></i>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </section>
    <x-text-us-section/>
@endsection

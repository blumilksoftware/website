@extends("layout.public")

@section("title", __("meta.about.title"))
@section("description", __("meta.about.description"))

@section("content")
    <section class="relative flex flex-col-reverse xl:flex-row pt-12 pb-0 md:pb-14 md:pt-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto place-items-center gap-8 xl:gap-16">
        <div class="flex basis-2/5 flex-col self-center">
            <div class="text-3xl md:text-4xl xl:text-5xl text-center xl:justify-start xl:text-start pb-4 pt-4 md:pt-0">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    {{ __("content.about.section_1.title_1") }} <span class="text-blue-normal"> {{ __("content.about.section_1.title_2") }}</span>
                    {{ __("content.about.section_1.title_3") }}
                </h2>
            </div>
            <div class="items-center xl:items-start text-sm md:text-lg max-w-[540px] mx-auto xl:mx-0">
                <p class="font-normal text-center xl:text-start pb-8 leading-7">
                    <span class="font-semibold">{{ __("content.about.section_1.subtitle_1") }}</span>
                    {{ __("content.about.section_1.subtitle_2") }}
                </p>
                <p class="font-normal text-center xl:text-start pb-8 leading-7">
                    {{ __("content.about.section_1.subtitle_3") }}
                    <span class="font-semibold"> {{ __("content.about.section_1.subtitle_4") }}</span>
                    {{ __("content.about.section_1.subtitle_5") }}
                </p>
            </div>
        </div>
        <div class="flex basis-3/5">
            <img src="{{ asset('graphics/about.webp') }}"
                 class="w-full max-w-[280px] sm:max-w-[350px] tablet:max-w-[700px] h-auto object-contain mx-auto"
                 alt=""/>
        </div>
    </section>

    <section class="bg-white py-12 sm:pt-16 sm:pb-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="mt-8 sm:mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:flex xl:justify-between overflow-hidden text-center text-gray-900 gap-10 sm:gap-16 md:gap-8">
            <div>
                <dl class="flex flex-col gap-4">
                    <dd class="order-first text-5xl sm:text-6xl font-semibold">+25</dd>
                    <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_1") }}</dt>
                </dl>
            </div>
            <div>
                <dl class="flex flex-col gap-4">
                    <dd class="order-first text-5xl sm:text-6xl font-semibold">175</dd>
                    <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_2") }}</dt>
                </dl>
            </div>
            <div>
                <dl class="flex flex-col gap-4">
                    <dd class="order-first text-5xl sm:text-6xl font-semibold">126</dd>
                    <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_3") }}</dt>
                </dl>
            </div>
            <div>
                <dl class="flex flex-col gap-4">
                    <dd class="order-first text-5xl sm:text-6xl font-semibold">1000+</dd>
                    <dt class="text-md font-normal leading-6">{{ __("content.about.section_2.stat_4") }}</dt>
                </dl>
            </div>
        </div>
    </section>

    <section class="relative pt-14 pb-12 md:pb-24 text-center">
        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-[1580px] 2xl:mx-auto md:space-y-10">
            <div class="pb-14 max-w-[886px] mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_3.title_1") }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 2xl:flex 2xl:flex-wrap 2xl:gap-10 2xl:justify-center 2xl:items-stretch">
                <x-tile title="{{ __('content.about.section_3.benefit_1.title') }}"
                        description="{{ __('content.about.section_3.benefit_1.subtitle') }}"
                        class="2xl:w-[500px] 2xl:shrink-0 2xl:grow-0">
                    <x-icons.user-robot accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.about.section_3.benefit_2.title') }}"
                        description="{{ __('content.about.section_3.benefit_2.subtitle') }}"
                        class="2xl:w-[500px] 2xl:shrink-0 2xl:grow-0">
                    <x-icons.site-alt accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.about.section_3.benefit_3.title') }}"
                        description="{{ __('content.about.section_3.benefit_3.subtitle') }}"
                        class="2xl:w-[500px] 2xl:shrink-0 2xl:grow-0">
                    <x-icons.magnifier-chart accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.about.section_3.benefit_4.title') }}"
                        description="{{ __('content.about.section_3.benefit_4.subtitle') }}"
                        class="2xl:w-[500px] 2xl:shrink-0 2xl:grow-0">
                    <x-icons.audit accent="stroke-blue-normal-neon"/>
                </x-tile>
                <x-tile title="{{ __('content.about.section_3.benefit_5.title') }}"
                        description="{{ __('content.about.section_3.benefit_5.subtitle') }}"
                        class="2xl:w-[500px] 2xl:shrink-0 2xl:grow-0">
                    <x-icons.window-alt accent="stroke-blue-normal-neon"/>
                </x-tile>
            </div>
        </div>
    </section>

    <section class="relative pt-10 pb-14 md:pt-14 md:pb-28 overflow-x-clip overflow-y-visible">
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 -right-96 bottom-0"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 left-1/2 -translate-x-1/2 top-0"/>
        <img src="{{ asset('graphics/shadow.svg') }}" alt="" class="absolute -z-10 -left-[800px] -bottom-64"/>

        <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
            <div class="pb-14 text-center max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_4.title_1") }}</h2>
                <span class="font-normal leading-7 text-sm md:text-lg">{{ __("content.about.section_4.subtitle_1") }}</span>
            </div>

            <div class="grid grid-cols-1 2xl:grid-cols-5 gap-4">
                <div class="bg-white shadow-lg rounded-xl px-6 py-4 2xl:py-8 flex flex-row 2xl:flex-col items-center gap-4 text-left 2xl:text-center">
                    <img src="{{ asset('graphics/stack/education.svg') }}"
                         alt="{{ __('content.about.section_4.benefits.benefit_1') }}"
                         class="h-16 w-16 2xl:h-32 2xl:w-32 object-contain shrink-0"/>
                    <span class="font-semibold text-sm md:text-base leading-7">
                        {{ __('content.about.section_4.benefits.benefit_1') }}
                    </span>
                </div>

                <div class="bg-white shadow-lg rounded-xl px-6 py-4 2xl:py-8 flex flex-row 2xl:flex-col items-center gap-4 text-left 2xl:text-center">
                    <img src="{{ asset('graphics/stack/ai-tile.svg') }}"
                         alt="{{ __('content.about.section_4.benefits.benefit_2') }}"
                         class="h-16 w-16 2xl:h-32 2xl:w-32 object-contain shrink-0"/>
                    <span class="font-semibold text-sm md:text-base leading-7">
                        {{ __('content.about.section_4.benefits.benefit_2') }}
                    </span>
                </div>

                <div class="bg-white shadow-lg rounded-xl px-6 py-4 2xl:py-8 flex flex-row 2xl:flex-col items-center gap-4 text-left 2xl:text-center">
                    <img src="{{ asset('graphics/stack/books.svg') }}"
                         alt="{{ __('content.about.section_4.benefits.benefit_3') }}"
                         class="h-16 w-16 2xl:h-32 2xl:w-32 object-contain shrink-0"/>
                    <span class="font-semibold text-sm md:text-base leading-7">
                        {{ __('content.about.section_4.benefits.benefit_3') }}
                    </span>
                </div>

                <div class="bg-white shadow-lg rounded-xl px-6 py-4 2xl:py-8 flex flex-row 2xl:flex-col items-center gap-4 text-left 2xl:text-center">
                    <img src="{{ asset('graphics/stack/magnifier.svg') }}"
                         alt="{{ __('content.about.section_4.benefits.benefit_4') }}"
                         class="h-16 w-16 2xl:h-32 2xl:w-32 object-contain shrink-0"/>
                    <span class="font-semibold text-sm md:text-base leading-7">
                        {{ __('content.about.section_4.benefits.benefit_4') }}
                    </span>
                </div>

                <div class="bg-white shadow-lg rounded-xl px-6 py-4 2xl:py-8 flex flex-row 2xl:flex-col items-center gap-4 text-left 2xl:text-center">
                    <img src="{{ asset('graphics/stack/documents.svg') }}"
                         alt="{{ __('content.about.section_4.benefits.benefit_5') }}"
                         class="h-16 w-16 2xl:h-32 2xl:w-32 object-contain shrink-0"/>
                    <span class="font-semibold text-sm md:text-base leading-7">
                        {{ __('content.about.section_4.benefits.benefit_5') }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="flex flex-col-reverse xl:flex-row pt-8 xl:pt-24 pb-16 sm:pb-24 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:gap-5 xl:gap-16">
        <div class="flex basis-3/5 relative self-center pb-8 md:pb-24 xl:pb-4">
            <img
                src="{{ asset('graphics/about_2.webp') }}"
                class="w-full max-w-[280px] sm:max-w-[350px] tablet:max-w-[700px] h-auto object-contain mx-auto"
                alt=""
            />
        </div>

        <div class="flex basis-2/5 relative flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:text-start">
                <h2 class="font-semibold text-gray-900 leading-7 md:leading-snug">
                    {{ __('content.about.section_5.title_1') }}
                </h2>
            </div>

            <div class="flex flex-col items-center xl:items-start text-sm sm:text-lg lg:text-xl font-light text-center xl:text-start">

                <p class="leading-7 pb-4">
                    {{ __('content.about.section_5.paragraph_1.text_1') }}
                    <span class="font-semibold">{{ __('content.about.section_5.paragraph_1.text_2') }}</span>
                    {{ __('content.about.section_5.paragraph_1.text_3') }}
                </p>

                <p class="leading-7 pb-4">
                    {{ __('content.about.section_5.paragraph_2.text_1') }}
                    <span class="font-semibold">{{ __('content.about.section_5.paragraph_2.text_2') }}</span>
                    {{ __('content.about.section_5.paragraph_2.text_3') }}
                </p>

                <p class="leading-7 pb-4">
                    {{ __('content.about.section_5.paragraph_3.text_1') }}
                    <span class="font-semibold">{{ __('content.about.section_5.paragraph_3.text_2') }}</span>
                    {{ __('content.about.section_5.paragraph_3.text_3') }}
                </p>
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
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8">{{ __("content.about.section_6.title_1") }}</h2>
                <span class="font-normal leading-7 text-sm md:text-lg relative">{{ __("content.about.section_6.subtitle_1") }}</span>
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

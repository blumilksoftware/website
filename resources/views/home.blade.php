@php use Illuminate\Support\Facades\App; @endphp
@extends("layout.public")

@php
    $caseStudy = App::currentLocale()=='en' ? json_decode(file_get_contents(public_path('main_case_study.json')), true)['en'] : json_decode(file_get_contents(public_path('main_case_study.json')), true)['pl'];
    $articles = json_decode(file_get_contents(public_path('articles.json')), true);
//dd(count($references));
@endphp
@section("content")
    <section class="relative overflow-hidden">
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
            <div class="relative top-24">
                <div class="absolute -right-[6%] md:right-[3%] top-72">
                    <x-bubble size="90"/>
                </div>
            </div>
        </div>

        <section class="flex flex-col-reverse xl:flex-row pt-40 pb-24 px-[10%] md:px-[20%]">
            <div class="flex basis-1/2 relative flex-col self-center gap-5">
                <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start py-4">
                    <h2 class="font-semibold text-gray-900 leading-snug">{{__("content.home.section_1.title_1")}}
                        <span class="text-website-normal block"> {{__("content.home.section_1.title_2")}} </span>
                        {{__("content.home.section_1.title_3")}}
                    </h2>
                </div>
                <div class="flex flex-col items-center xl:items-start">
                    <p class="text-lg lg:text-xl font-light text-center xl:text-start">
                        <span class="leading-relaxed">{{__("content.home.section_1.subtitle_1")}}</span>
                        <span class="font-semibold leading-relaxed">{{__("content.home.section_1.subtitle_2")}}</span>
                    </p>
                    <div class="my-6">
                        <x-primary-button href="{{ route('about') }}"
                                          class="px-16">{{ __("buttons.about") }}</x-primary-button>
                    </div>
                </div>
            </div>
            <div class="flex basis-1/2 relative self-center">
                <img src="{{ asset('graphics/web-1.png') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                     alt="placeholder"/>
            </div>
        </section>

        <section class="relative text-center px-[10%] md:px-[20%]">
            <div class="text-2xl lg:text-3xl font-semibold text-gray-400">{{ __("content.home.section_2.title_1") }}
                <span
                    class="text-website-normal">{{ __("content.home.section_2.title_2") }}</span>
            </div>
            <div class="absolute z-10 hidden lg:block -left-[10%] lg:-left-[3%] top-0">
                <x-bubble size="250"/>
            </div>
            <div class="absolute z-10 hidden lg:block -right-[10%] lg:right-[5%] -top-8">
                <x-bubble size="200"/>
            </div>
            <div
                class="grid grid-cols-2 md:flex md:flex-row pb-12 text-gray-400 items-center justify-center mt-6 2xl:gap-12">
                <div class="m-6">
                    <img src="{{asset('images/clients/cwup.svg')}}"
                         class="client-icon h-auto w-44 m-auto grayscale hover:grayscale-0 transform transition hover:scale-110"
                         alt="Collegium Witelona"/>
                </div>
                <div class="m-6 items-center">
                    <img src="{{asset('images/clients/insly.svg')}}"
                         class="client-icon h-auto w-44 m-auto grayscale hover:grayscale-0 transform transition hover:scale-110"
                         alt="Insly"/>
                </div>
                <div class="m-6">
                    <img src="{{asset('images/clients/kghm.svg')}}"
                         class="client-icon h-auto w-44 m-auto grayscale hover:grayscale-0 transform transition hover:scale-110"
                         alt="KGHM"/>
                </div>
                <div class="m-6">
                    <img src="{{asset('images/clients/vita.svg')}}"
                         class="client-icon h-auto w-44 m-auto grayscale hover:grayscale-0 transform transition hover:scale-110"
                         alt="Vita Plus"/>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-br from-gray-light to-white">
            <x-waves.wave-1.top></x-waves.wave-1.top>
            <div class="flex flex-col 2xl:flex-row px-[10%] md:px-[20%] py-16 2xl:pt-32 gap-x-4">
                <div class="flex basis-7/12 flex-col justify-center align-middle">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900 mb-4 text-center md:text-left">
                        {{__("content.home.section_3.title_1")}}</h2>
                    <div class="text-black text-lg lg:text-xl text-center md:text-left">
                        <div class="pb-4 md:pb-1 leading-relaxed">
                            <span class="leading-relaxed">{{__("content.home.section_3.subtitle_1")}}</span>
                            <span class="font-semibold">{{__("content.home.section_3.subtitle_2")}}</span>
                        </div>
                        <ul class="pt-8 md:-ml-2 text-md justify-center space-y-6">
                            <li class="flex items-center text-left leading-relaxed gap-x-6">
                                <x-icons.arrow></x-icons.arrow>
                                {{__("content.home.section_3.content_4")}}

                            </li>
                            <li class="flex items-center text-left leading-relaxed gap-x-6">
                                <x-icons.arrow></x-icons.arrow>
                                {{__("content.home.section_3.content_3")}}

                            </li>
                            <li class="flex items-center text-left leading-relaxed gap-x-6">
                                <x-icons.arrow></x-icons.arrow>
                                {{__("content.home.section_3.content_2")}}

                            </li>
                            <li class="flex items-center text-left leading-relaxed gap-x-6">
                                <x-icons.arrow></x-icons.arrow>
                                {{__("content.home.section_3.content_1")}}

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden 2xl:flex basis-5/12 m-auto md:delay-700 relative -right-5">
                    <div class="rounded-xl bg-gray-dark aspect-[2/1] max-h-[500px] rotate-6 relative -top-5">
                        <div class="relative flex flex-col justify-between aspect-[2/1] max-h-[500px] z-10 right-6 top-10 rounded-2xl shadow-sm bg-white px-6 py-10 -rotate-6 gap-6">
                            <div class="px-4 font-semibold text-xl lg:text-2xl">
                                {{__("content.home.section_3.title_2")}}
                            </div>
                            <div class="py-6 text-website-normal mx-4">
                                <div class="flex flex-col items-center place-content-center text-center bg-blue-light max-w-full px-6 py-4 gap-4 rounded-2xl">
                                    <img src="{{ asset('graphics/stars.svg') }}" class="max-h-8 shrink"
                                         alt="5 stars"/>
                                    <div class="leading-relaxed">
                                        {{__("content.home.section_3.subtitle_3")}}
                                    </div>

                                </div>
                            </div>
                            <div class="flex place-content-center px-8">
                                <x-block-primary-button href="{{ route('contact') }}">
                                    <span class="font-semibold">{{ __("buttons.text_us_1") }}</span>{{ __("buttons.text_us_2") }}
                                </x-block-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-waves.wave-3.bottom></x-waves.wave-3.bottom>
        </section>
        <section class="relative flex flex-col xl:flex-row md:py-24 px-[10%] md:px-[20%] xl:pr-0 items-center overflow-hidden 3xl:gap-44">
            <div class="flex basis-4/12 relative">
                <div class="flex flex-col text-center md:text-left">
                    <div class="relative">
                        <div class="my-6">
                            <x-badge>{{__("content.home.section_4.badge")}}</x-badge>
                        </div>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900">{{__("content.home.section_4.title_1")}}</h2>
                    </div>
                    <span class="absolute -right-[20%] -z-10">
                            <x-bubble size="40"/>
                        </span>
                    <div class="text-black text-lg font-light lg:text-xl relative py-4">
                        <div class="py-4">
                            <span class="leading-relaxed">{{__("content.home.section_4.subtitle_1")}}</span>
                            <span
                                class="font-semibold leading-relaxed">{{__("content.home.section_4.subtitle_2")}}</span>
                        </div>
                        <ul class="list-disc-none py-8 hidden md:block">
                            @foreach($caseStudy as $key => $description)
                                <li>
                                    <span class="font-semibold leading-relaxed"> {{ $key }}</span> : {{ $description }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="hidden md:block relative pb-8">
                            <div class="relative flex items-center">
                                <x-secondary-button href="{{ route('case-studies') }}" class="">{{ __("buttons.all_projects") }}</x-secondary-button>
                                <x-primary-button href="" class="">{{ __("buttons.case_study") }}</x-primary-button>
                            </div>
                            <span class="absolute -left-[30%] -z-10">
                                <x-bubble size="30"/>
                            </span>
                            <span class="absolute -right-[10%] -z-10">
                                <x-bubble size="80"/>
                            </span>
                        </div>
                    </div>
                </div>

                <span class="absolute -left-[40%] top-72 -z-10">
                    <x-bubble size="90"/>
                </span>
                <span class="absolute -left-[20%] top-96 -z-10">
                    <x-bubble size="20"/>
                </span>
            </div>
            <div class="flex rounded-2xl xl:bg-gray-light -rotate-3 basis-8/12 relative xl:shadow-md size-full xl:left-[10%]">
                <div class="absolute hidden xl:block rotate-3 z-20 rounded-2xl h-52 w-80 -left-[10%] bottom-[10%] bg-[url('graphics/code-snippet.png')] bg-cover">
                </div>
                <img src="{{ asset('graphics/vita.png') }}"
                     class="w-full relative flex xl:left-[5%] overflow-hidden rounded-2xl bg-white shadow-md rotate-3"
                     alt="Vita homepage"/>
            </div>
            <div class="flex md:hidden place-content-center p-8">
                <x-small-primary-button
                    href="{{ route('case-studies') }}">{{ __("buttons.all_projects") }}</x-small-primary-button>
            </div>
        </section>

        <section class="my-20 text-center bg-gray-extraLight">
            <div class="block lg:bg-binary bg-cover bg-center bg-no-repeat 3xl:mx-44">
                <div class="relative px-[10%] md:px-[20%] py-20">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900 relative mb-8">
                        {{__("content.home.section_5.title_1")}}</h2>
                    <span class="font-light leading-relaxed text-lg lg:text-xl relative">
                        <span class="leading-relaxed font-semibold">{{__("content.home.section_5.subtitle_1")}}</span>
                        <span class="leading-relaxed">{{__("content.home.section_5.subtitle_2")}}</span>
                        <span class="leading-relaxed font-semibold">{{__("content.home.section_5.subtitle_3")}}</span>
                        <span class="leading-relaxed">{{__("content.home.section_5.subtitle_4")}}</span>
                        <span class="leading-relaxed font-semibold">{{__("content.home.section_5.subtitle_5")}}</span>
                        <span class="leading-relaxed">{{__("content.home.section_5.subtitle_6")}}</span>
                        <span class="leading-relaxed font-semibold">{{__("content.home.section_5.subtitle_7")}}</span>
                    </span>
                    <div class="grid grid-cols-5 relative w-fit align-middle place-items-center mx-auto text-gray-400 items-center mt-14  gap-8 lg:gap-x-14">
                        <div class="">
                            <img src="{{ asset('images/tech/laravel.svg')}}"
                                 class="tech-icon h-full w-12 m-auto grayscale hover:grayscale-0 object-contain transform transition hover:scale-110"
                                 alt="laravel"/>
                        </div>
                        <div class="">
                            <img src="{{ asset('images/tech/php.svg')}}"
                                 class="tech-icon h-full w-16 m-auto grayscale hover:grayscale-0 object-contain transform transition hover:scale-110"
                                 alt="php"/>
                        </div>
                        <div class="">
                            <img src="{{ asset('images/tech/postgresql.svg')}}"
                                 class="tech-icon h-full w-12 m-auto grayscale hover:grayscale-0 object-contain transform transition hover:scale-110"
                                 alt="postgresql"/>
                        </div>
                        <div class=" sm:col-span-1">
                            <img src="{{ asset('images/tech/docker.svg')}}"
                                 class="tech-icon h-full w-12 m-auto grayscale hover:grayscale-0 object-contain transform transition hover:scale-110"
                                 alt="docker"/>
                        </div>
                        <div class=" sm:col-span-1">
                            <img src="{{ asset('images/tech/vue.svg')}}"
                                 class="tech-icon h-full w-12 m-auto grayscale hover:grayscale-0 object-contain transform transition hover:scale-110"
                                 alt="vue"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=" @if(count($references)==0) hidden @endif px-[10%] md:px-[15%] text-center items-center sm:pb-36 relative">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900 mb-6">{{__("content.home.section_6.title_1")}}</h2>
            <div class="my-6">
                <x-badge>{{__("content.home.section_6.badge")}}</x-badge>
            </div>
            <span class="font-light text-lg lg:text-xl">{{__("content.home.section_6.subtitle_1")}}
                <span class="font-semibold leading-relaxed">{{__("content.home.section_6.subtitle_2")}}</span>
                <span class="leading-relaxed">{{__("content.home.section_6.subtitle_3")}}</span>
            </span>
            <div class="sm:hidden">
                <x-reference @if(count($references)!=0) :reference="$references[0] @endif "/>
            </div>
            <div class=" @if(count($references)>3) sm:block main-gallery js-flickity @else sm:flex justify-center @endif" data-flickity-options='{ "wrapAround": true }'>
                @foreach($references as $reference)
                        <x-reference :reference="$reference"/>
                @endforeach
            </div>
        </section>
        <div class="md:py-20 block lg:bg-binary bg-cover bg-center bg-no-repeat object-contain min-w-full inset-0">
            <section class="relative px-[10%] md:px-[20%]">
                <div class="relative flex flex-row items-center justify-between">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-900">{{__("content.home.section_7.title_1")}}</h2>
                    <div class="hidden sm:block">
                        <x-primary-button href="" class="px-16">{{__("buttons.see_all")}}</x-primary-button>
                    </div>
                </div>
                <div class="grid gap-8 pt-12 max-w-none sm:grid-cols-2 lg:grid-cols-3 relative">
                    @foreach($articles as $index => $article)
                        <x-article-card
                            imageSrc="{{ $article['imageSrc'] }}"
                            date="{{ $article['date'] }}"
                            dateFormatted="{{ $article['dateFormatted'] }}"
                            firstText="{{ $article['firstText'] }}"
                            secondText="{{ $article['secondText'] }}"
                            articleRoute="{{ $article['articleRoute'] }}"
                            class="{{ $index >= 3 ? 'hidden sm:flex lg:hidden' : '' }}"
                        />
                    @endforeach
                </div>
                <div class="sm:hidden flex py-8">
                    <x-block-primary-button href="">{{__("buttons.see_all")}}</x-block-primary-button>
                </div>
            </section>
        </div>
    </section>
@endsection

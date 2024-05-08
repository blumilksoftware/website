@extends("layout.public")

@php
    $caseStudy = json_decode(file_get_contents(public_path('case_studies.json')), true)[0];
    $testimonials = json_decode(file_get_contents(public_path('testimonials.json')), true);
    $articles = json_decode(file_get_contents(public_path('articles.json')), true);

@endphp
@section("content")
    <section class="relative overflow-hidden">
        <div class="relative md:block -z-10">
            <div class="absolute -left-[6%] md:left-[1%] top-28 md:top-40 -z-10">
                <x-bubble size="80"/>
            </div>
            <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28 -z-10">
                <x-bubble size="30"/>
            </div>
            <div class="absolute hidden md:block -left-[3%] top-80 -z-10">
                <x-bubble size="200"/>
            </div>
            <div class="absolute right-[4%] top-36 -z-10">
                <x-bubble size="40"/>
            </div>
            <div class="relative top-24">
                <div class="absolute -right-[6%] md:right-[3%] top-72 -z-10">
                    <x-bubble size="90"/>
                </div>
            </div>
            <div class="relative top-24">
                <div class="absolute hidden md:block md:right-[4%] top-96 -z-10">
                    <x-bubble size="200"/>
                </div>
            </div>
        </div>

        <section class="flex flex-col-reverse lg:flex-row py-24 section-padding">
            <div class="flex basis-1/2 relative flex-col self-center gap-5">
                <div class="text-3xl md:text-4xl lg:text-6xl text-center lg:justify-start lg:text-start py-4">
                    <h2 class="font-semibold text-gray-900 animation-appear">{{__("content.section_1.title_1")}}
                        <span class="text-website-normal block"> {{__("content.section_1.title_2")}} </span> {{__("content.section_1.title_3")}}</h2>
                </div>
                <div class="flex flex-col items-center lg:items-start animation-appear">
                    <p class="text-xl lg:text-2xl font-light text-center lg:text-start">
                        {{__("content.section_1.subtitle_1")}}
                        <span class="font-medium">{{__("content.section_1.subtitle_2")}}</span>
                    </p>
                    <div class="my-6">
                        <x-primary-button href="">{{ __("content.pages.about") }}</x-primary-button>
                    </div>
                </div>
            </div>


            <div class="flex basis-1/2 relative self-center">
                <img src="graphics/web-1.jpg" class="h-auto w-min aspect-auto" alt="placeholder"/>
            </div>
        </section>

        <section class="text-center section-padding">
            <div class="text-2xl lg:text-3xl font-medium text-gray-400">{{ __("content.section_2.title_1") }}<span
                    class="text-website-normal">{{ __("content.section_2.title_2") }}</span>
            </div>

            <div class="grid grid-cols-2 md:flex md:flex-row pb-12 text-gray-400 items-center justify-center mt-6">
                <div class="m-6">
                    <img src="images/clients/cwup.png" class="client-icon" alt="Collegium Witelona"/>
                </div>
                <div class="m-6">
                    <img src="images/clients/insly.png" class="client-icon" alt="Insly"/>
                </div>
                <div class="m-6">
                    <img src="images/clients/kghm.png" class="client-icon" alt="KGHM"/>
                </div>
                <div class="m-6">
                    <img src="images/clients/vitaplus.png" class="client-icon" alt="Vita Plus"/>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-r from-gray-light to-white">

            <x-waves.wave-1.top></x-waves.wave-1.top>
            <div class="flex flex-col lg:flex-row section-padding lg:pr-0 pt-24">
                <div
                    class="flex basis-2/5 flex-col lg:pr-8 delay-300 duration-700 taos:translate-x-48 taos:opacity-0"
                    data-taos-offset="100">
                    <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900 mb-4 text-center md:text-left">
                        {{__("content.section_3.title_1")}}</h2>
                    <div class="text-black subtitle text-center md:text-left py-6">
                        <div class="pb-4 md:pb-0"> {{__("content.section_3.subtitle_1")}}
                            <span class="font-medium">
                                {{__("content.section_3.subtitle_2")}}
                                </span>
                        </div>
                        <ul class="py-2 md:-ml-4 text-md justify-center">
                            <li class="flex items-center text-left">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                {{__("content.section_3.content_1")}}
                            </li>
                            <li class="flex items-center text-left">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                {{__("content.section_3.content_2")}}
                            </li>
                            <li class="flex items-center text-left">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                {{__("content.section_3.content_3")}}
                            </li>
                            <li class="flex items-center text-left">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                {{__("content.section_3.content_4")}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="hidden lg:flex basis-3/5 delay-700 duration-700 taos:translate-x-48 taos:opacity-0"
                    data-taos-offset="300">
                    <div class="rounded-xl bg-gray-light max-h-[600px] rotate-6">
                        <div
                            class="relative flex flex-col justify-between aspect-square max-h-[600px] z-10 right-4 top-10 rounded-2xl bg-white p-6 -rotate-6">
                            <div class="px-4 pt-5 font-semibold text-3xl">
                                {{__("content.section_3.title_2")}}
                            </div>
                            <div class="p-8 text-website-normal">
                                <div
                                    class="flex flex-col items-center w-auto h-auto text-center bg-gray-light p-6 rounded-2xl">
                                    <img src="graphics/stars.png" class="max-h-12 shrink m-4" alt="5 stars"/>
                                    <div class="text-xl">
                                        {{__("content.section_3.subtitle_2")}}
                                    </div>

                                </div>
                            </div>
                            <div class="flex place-content-center px-8">
                                <x-block-primary-button href="">{{ __("buttons.text_us") }}</x-block-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-waves.wave-1.bottom></x-waves.wave-1.bottom>
        </section>
        <section
            class="relative flex flex-col lg:flex-row md:py-24 section-padding lg:pr-0 items-center overflow-hidden">
            <div class="flex basis-1/3 relative">
                <div class="flex flex-col text-center md:text-left">
                    <div class="relative duration-700 taos:translate-y-48 taos:opacity-0"
                         data-taos-offset="200">
                        <x-badge>{{__("content.section_4.badge")}}</x-badge>
                        <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900">{{__("content.section_4.title_1")}}</h2>
                    </div>
                    <span class="absolute -right-[15%] -z-10">
                            <x-bubble size="40"/>
                        </span>
                    <div class="text-black subtitle relative z-10 py-4">
                        <div class="py-4 subtitle duration-700 taos:translate-y-48 taos:opacity-0"
                             data-taos-offset="200"> {{__("content.section_4.subtitle_1")}}
                            <span
                                class="font-medium">{{__("content.section_4.subtitle_2")}}</span></div>
                        <ul class="list-disc-none py-8 hidden md:block duration-1000 taos:translate-y-48 taos:opacity-0"
                            data-taos-offset="100">
                            @foreach($caseStudy as $key => $description)
                                <li><span class="font-semibold">{{ $key }}</span> : {{ $description }}</li>
                            @endforeach
                        </ul>
                        <div class="relative pb-8">
                            <div
                                class="relative hidden md:flex z-10 duration-1000 taos:translate-y-48 taos:opacity-0"
                                data-taos-offset="0">
                                <x-secondary-button href="">{{ __("buttons.all_projects") }}</x-secondary-button>
                                <x-primary-button href="">{{ __("buttons.case_study") }}</x-primary-button>
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
                <span class="absolute -left-[25%] top-96 -z-10">
                    <x-bubble size="20"/>
                </span>
            </div>
            <div class="flex rounded-2xl md:bg-gray-light -rotate-3 basis-2/3 relative md:shadow-md size-full left-[5%] lg:left-[10%] mt-12 pb-16 lg:pb-0 delay-200 duration-1000 taos:translate-x-full taos:opacity-0 [animation-iteration-count:infinite]"
                data-taos-offset="400">
                <div
                    class="absolute hidden lg:block rotate-3 z-20 rounded-2xl h-52 w-80 -left-[10%] bottom-[10%] bg-[url('graphics/code-snippet.png')] bg-cover">
                </div>
                <img src="graphics/vita.png" class="w-full relative flex lg:left-[10%] overflow-hidden rounded-2xl bg-white shadow-md rotate-3" alt="Vita homepage"/>


            </div>
            <div class="flex md:hidden place-content-center px-8">
                <x-block-primary-button href="">{{ __("buttons.all_projects") }}</x-block-primary-button>
            </div>

        </section>

        <section class="relative py-20 text-center">
            <div class="hidden md:block bg-binary min-w-[120%] absolute z-20 opacity-5 inset-0"></div>
            <div class="section-padding bg-gray-light py-8 md:py-24">
                <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-gray-900 relative z-30 my-6 delay-300 duration-700 taos:scale-75 taos:opacity-0"
                    data-taos-offset="400">{{__("content.section_5.title_1")}}</h2>
                <span class="subtitle relative z-30 delay-300 duration-700 taos:scale-75 taos:opacity-0"
                      data-taos-offset="400">{{__("content.section_5.subtitle_1")}}</span>
                <div class="flex flex-col sm:flex-row relative z-30 text-gray-400 items-center my-6 md:justify-between lg:justify-center gap-y-8 sm:gap-x-8 lg:gap-x-16">
                    <div class="delay-200 duration-700 taos:scale-75 taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/laravel.png" class="tech-icon" alt="laravel"/>
                    </div>
                    <div class="delay-300 duration-700 taos:scale-75 taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/php.png" class="tech-icon" alt="php"/>
                    </div>
                    <div class="delay-500 duration-700 taos:scale-75 taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/postgresql.png" class="tech-icon" alt="postgresql"/>
                    </div>
                    <div class="delay-700 duration-700 taos:scale-75 taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/docker.png" class="tech-icon" alt="docker"/>
                    </div>
                    <div class="delay-1000 duration-700 taos:scale-75 taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/vue.png" class="tech-icon" alt="vue"/>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="section-padding text-center items-center pb-36 delay-300 duration-700 taos:translate-y-48 taos:opacity-0"
            data-taos-offset="300">
            <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900 mb-6">{{__("content.section_6.title_1")}}</h2>
            <x-badge>{{__("content.section_6.badge")}}</x-badge>
            <span class="subtitle">{{__("content.section_6.subtitle_1")}}<span class="font-semibold">{{__("content.section_6.subtitle_2")}}</span> {{__("content.section_6.subtitle_3")}}</span>
            <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                <div class="gallery-cell gap-6 text-center py-4 lg:gap-12">
                    <x-testimonial
                        photoUrl="{{ $testimonials[0]['photoUrl'] }}"
                        name="{{ $testimonials[0]['name'] }}"
                        occupation="{{ $testimonials[0]['occupation'] }}"
                        description="{{ $testimonials[0]['description'] }}"
                        linkedIn="{{ $testimonials[0]['linkedIn'] }}"
                    />
                </div>
                <div class="gallery-cell gap-6 text-center py-4 lg:gap-12">
                    <x-testimonial
                        photoUrl="{{ $testimonials[1]['photoUrl'] }}"
                        name="{{ $testimonials[1]['name'] }}"
                        occupation="{{ $testimonials[1]['occupation'] }}"
                        description="{{ $testimonials[1]['description'] }}"
                        linkedIn="{{ $testimonials[1]['linkedIn'] }}"
                    />
                </div>
                <div class="gallery-cell gap-6 text-center py-4 lg:gap-12">
                    <x-testimonial
                        photoUrl="{{ $testimonials[0]['photoUrl'] }}"
                        name="{{ $testimonials[0]['name'] }}"
                        occupation="{{ $testimonials[0]['occupation'] }}"
                        description="{{ $testimonials[0]['description'] }}"
                        linkedIn="{{ $testimonials[0]['linkedIn'] }}"
                    />
                </div>
                <div class="gallery-cell gap-6 text-center py-4 lg:gap-12">
                    <x-testimonial
                        photoUrl="{{ $testimonials[2]['photoUrl'] }}"
                        name="{{ $testimonials[2]['name'] }}"
                        occupation="{{ $testimonials[2]['occupation'] }}"
                        description="{{ $testimonials[2]['description'] }}"
                        linkedIn="{{ $testimonials[2]['linkedIn'] }}"
                    />
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="flex flex-row items-center justify-between">
                <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900">{{__("content.section_7.title_1")}}</h2>
                <div class="hidden sm:block">
                    <x-primary-button href="">{{__("buttons.see_all")}}</x-primary-button>
                </div>
            </div>
            <div class="grid gap-8 pt-12 max-w-none sm:grid-cols-2 lg:grid-cols-3 relative z-10">
                @for($currentArticle = 0; $currentArticle < 3; $currentArticle++)
                    <x-article-card
                        imageSrc="{{ $articles[$currentArticle]['imageSrc'] }}"
                        date="{{ $articles[$currentArticle]['date'] }}"
                        dateFormatted="{{ $articles[$currentArticle]['dateFormatted'] }}"
                        firstText="{{ $articles[$currentArticle]['firstText'] }}"
                        secondText="{{ $articles[$currentArticle]['secondText'] }}"
                        articleRoute="{{ $articles[$currentArticle]['articleRoute'] }}"
                    />
                @endfor
                <div class="lg:hidden">
                    <x-article-card
                        imageSrc="{{ $articles[3]['imageSrc'] }}"
                        date="{{ $articles[3]['date'] }}"
                        dateFormatted="{{ $articles[3]['dateFormatted'] }}"
                        firstText="{{ $articles[3]['firstText'] }}"
                        secondText="{{ $articles[3]['secondText'] }}"
                        articleRoute="{{ $articles[3]['articleRoute'] }}"
                    />
                </div>
            </div>
            <div class="sm:hidden flex pt-8">
                <x-block-primary-button href="">{{__("buttons.see_all")}}</x-block-primary-button>
            </div>
        </section>
    </section>
@endsection

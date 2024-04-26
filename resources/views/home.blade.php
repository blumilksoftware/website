@extends("layout.public")

@php
    $caseStudy = json_decode(file_get_contents(public_path('case_studies.json')), true)[0];
    $testimonials = json_decode(file_get_contents(public_path('testimonials.json')), true);
    $articles = json_decode(file_get_contents(public_path('articles.json')), true);

@endphp
@section("content")
    <section class="relative overflow-hidden">
        <div class="relative md:block -z-10">
            <div class="absolute -left-[6%] md:left-[1%] top-28 md:top-40">
                <x-bubble size="80"/>
            </div>
            <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
                <x-bubble size="30"/>
            </div>
            <div class="absolute hidden md:block -left-[3%] top-80">
                <x-bubble size="200"/>
            </div>
            <div class="absolute right-[4%] top-36">
                <x-bubble size="40"/>
            </div>
            <div class="relative top-24">
                <div class="absolute -right-[6%] md:right-[3%] top-72">
                    <x-bubble size="90"/>
                </div>
            </div>
            <div class="relative top-24">
                <div class="absolute hidden md:block md:right-[4%] top-96">
                    <x-bubble size="200"/>
                </div>
            </div>
        </div>

        <section class="flex flex-col-reverse lg:flex-row py-24 section-padding">
            <div class="flex basis-1/2 relative flex-col self-center gap-5">
                <div class="text-3xl md:text-4xl lg:text-6xl text-center lg:justify-start lg:text-start py-4">
                    <h2 class="font-semibold text-gray-900 animation-appear">Oprogramowanie
                        <span class="text-website-normal block"> dopasowane </span> do Twoich potrzeb.</h2>
                </div>
                <div class="flex flex-col items-center lg:items-start animation-appear">
                    <p class="text-xl lg:text-2xl font-light text-center lg:text-start">
                        Jesteśmy pasjonatami tworzenia aplikacji web/mobile oraz zaawansowanych projektów B+R.
                        <span class="font-medium">Zmieniami koncepcje w działające rozwiązania.</span>
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
            <div class="text-2xl lg:text-3xl font-medium text-gray-400">Dołącz do grona <span
                    class="text-website-normal">zadowolonych klientów Blumilk</span>
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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="#ffffff" fill-opacity="1"
                      d="M0,64L80,69.3C160,75,320,85,480,90.7C640,96,800,96,960,80C1120,64,1280,32,1360,16L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>
            <div class="flex flex-col lg:flex-row section-padding lg:pr-[0%] pt-24">
                <div
                    class="flex basis-2/5 flex-col lg:pr-8 delay-[300ms] duration-[700ms] taos:translate-x-[200px] taos:opacity-0"
                    data-taos-offset="100">
                    <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900 mb-4 text-center md:text-left">
                        Jak możemy Ci
                        pomóc? </h2>
                    <div class="text-black subtitle text-center md:text-left py-6">
                        <div class="pb-4 md:pb-0">Badania, rozwój, kod:
                            <span class="font-medium">
                                kształtujemy przyszłość oprogramowania.
                                </span>
                        </div>
                        <ul class="py-2 md:-ml-4 text-md justify-center">
                            <li class="flex items-center text-left">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                Projekty B+R
                            </li>
                            <li class="flex items-center text-left">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                Audyty rozwiązań IT
                            </li>
                            <li class="flex items-center text-left">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                Cyfryzacja biznesu i procesów
                            </li>
                            <li class="flex items-center text-left">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                Dedykowane aplikacje mobilne i webowe
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="hidden lg:flex basis-3/5 delay-[600ms] duration-[800ms] taos:translate-x-[200px] taos:opacity-0"
                    data-taos-offset="300">
                    <div class="rounded-xl bg-gray-light max-h-[600px] rotate-6">
                        <div
                            class="relative flex flex-col justify-between aspect-square max-h-[600px] z-10 right-4 top-10 rounded-2xl bg-white p-6 -rotate-6">
                            <div class="px-4 pt-5 font-semibold text-3xl">
                                Projektujemy rozwiązania
                            </div>
                            <div class="p-8 text-website-normal">
                                <div
                                    class="flex flex-col items-center w-auto h-auto text-center bg-gray-light p-6 rounded-2xl">
                                    <img src="graphics/stars.png" class="max-h-12 shrink m-4" alt="5 stars"/>
                                    <div class="text-xl">
                                        W trosce o stuprocentowe zadowolenie naszych klientów i partnerów.
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
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="#ffffff" fill-opacity="1"
                      d="M0,64L80,69.3C160,75,320,85,480,90.7C640,96,800,96,960,80C1120,64,1280,32,1360,16L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </section>
        <section
            class="relative flex flex-col lg:flex-row md:py-24 section-padding lg:pr-[0%] items-center overflow-hidden">
            <div class="flex basis-1/3 relative">
                <div class="flex flex-col text-center md:text-left">
                    <div class="relative duration-[600ms] taos:translate-y-[200px] taos:opacity-0"
                         data-taos-offset="200">
                        <x-badge>zobacz jak działamy</x-badge>
                        <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900">Case study</h2>
                    </div>
                    <span class="absolute -right-[15%]">
                            <x-bubble size="40"/>
                        </span>
                    <div class="text-black subtitle relative z-10 py-4">
                        <div class="py-4 subtitle duration-[800ms] taos:translate-y-[200px] taos:opacity-0"
                             data-taos-offset="200"> Dowiedz się jak nasze realizacje przekształciły wyzwania klientów w
                            <span
                                class="font-medium">skuteczne rozwiązania</span></div>
                        <ul class="list-disc-none py-8 hidden md:block duration-[1000ms] taos:translate-y-[200px] taos:opacity-0"
                            data-taos-offset="100">
                            @foreach($caseStudy as $key => $description)
                                <li><span class="font-semibold">{{ $key }}</span> : {{ $description }}</li>
                            @endforeach
                        </ul>
                        <div class="relative pb-8">
                            <div
                                class="relative hidden md:flex z-10 duration-[1200ms] taos:translate-y-[200px] taos:opacity-0"
                                data-taos-offset="0">
                                <x-secondary-button href="">{{ __("buttons.all_projects") }}</x-secondary-button>
                                <x-primary-button href="">{{ __("buttons.case_study") }}</x-primary-button>
                            </div>
                            <span class="absolute -left-[30%]">
                                <x-bubble size="30"/>
                            </span>
                            <span class="absolute -right-[10%]">
                                <x-bubble size="80"/>
                            </span>
                        </div>
                    </div>
                </div>

                <span class="absolute -left-[40%] top-72">
                    <x-bubble size="90"/>
                </span>
                <span class="absolute -left-[25%] top-96">
                    <x-bubble size="20"/>
                </span>
            </div>
            <div
                class="flex rounded-2xl md:bg-gray-light -rotate-3 basis-2/3 relative md:shadow-md left-[30%] lg:left-[10%] mt-12 delay-[200ms] duration-[1000ms] taos:translate-x-[100%] taos:opacity-0 [animation-iteration-count:infinite]"
                data-taos-offset="400">
                <div
                    class="absolute hidden lg:block rotate-3 z-20 rounded-2xl h-52 w-80 -left-[10%] bottom-16 bg-[url('graphics/code-snippet.png')] bg-cover">
                </div>
                <div class="relative flex left-[5%] overflow-hidden rounded-2xl bg-white shadow-md rotate-3">
                    <img src="graphics/vita.png" class="w-full" alt="Vita homepage"/>
                </div>
            </div>
            <div class="flex md:hidden place-content-center px-8">
                <x-block-primary-button href="">{{ __("buttons.all_projects") }}</x-block-primary-button>
            </div>

        </section>

        <section class="relative py-36 text-center">
            <div class="hidden md:block bg-binary min-w-[120%] absolute z-20 opacity-5 inset-0"></div>
            <div class="section-padding bg-gray-light py-8 md:py-24">
                <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-gray-900 relative z-30 my-6 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0"
                    data-taos-offset="400">Tech stack</h2>
                <span class="subtitle relative z-30 delay-[300ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0"
                      data-taos-offset="400"> PHP i Laravel to nasze główne narzędzie pracy. GitHub stanowi naszą centralną platformę, umożliwiającą code review oraz CI/CD za pomocą GitHub Actions. Frontend budujemy z użyciem Vue.js, a także korzystamy z różnych systemów zarządzania bazami danych, tj. MySQL i PostgreSQL.</span>
                <div class="flex relative z-30 text-gray-400 items-center my-6 justify-between gap-4">
                    <div class="delay-[600ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/laravel.png" class="tech-icon" alt="laravel"/>
                    </div>
                    <div class="delay-[800ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/php.png" class="tech-icon" alt="php"/>
                    </div>
                    <div class="delay-[1000ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/postgresql.png" class="tech-icon" alt="postgresql"/>
                    </div>
                    <div class="delay-[1200ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/docker.png" class="tech-icon" alt="docker"/>
                    </div>
                    <div class="delay-[1400ms] duration-[600ms] taos:scale-[0.6] taos:opacity-0" data-taos-offset="300">
                        <img src="images/tech/vue.png" class="tech-icon" alt="vue"/>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="section-padding text-center items-center py-24 delay-[300ms] duration-[600ms] taos:translate-y-[200px] taos:opacity-0"
            data-taos-offset="300">
            <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900 mb-6">Co mówią o nas inni</h2>
            <x-badge>opinie</x-badge>
            <span class="subtitle">Opinie naszych klientów są bardzo ważne, <span class="font-semibold">świadczą o jakości naszych usług</span> i inspirują nas do nieustannego doskonalenia.</span>
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
                <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900">Nasze aktywności</h2>
                <div class="hidden sm:block">
                    <x-primary-button href="">Zobacz wszystkie</x-primary-button>
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
                <x-block-primary-button href="">Zobacz wszystkie</x-block-primary-button>
            </div>
        </section>
    </section>
@endsection

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
                <div class="text-3xl md:text-4xl lg:text-6xl text-center lg:justify-start lg:text-start ">
                    <h2 class="font-semibold text-gray-900">Oprogramowanie
                        <span class="text-website-normal lg:block"> dopasowane </span> do Twoich potrzeb.</h2>
                </div>
                <div class="flex flex-col items-center lg:items-start">
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

            <div class="flex flex-col md:flex-row pb-12 text-gray-400 items-center justify-center mt-6">
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
                <div class="flex basis-2/5 flex-col lg:pr-8">
                    <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900 mb-4"> Jak możemy Ci
                        pomóc? </h2>
                    <div class="text-black subtitle">
                            <span>Badania, rozwój, kod:
                                <span class="font-medium">
                                kształtujemy przyszłość oprogramowania.
                                </span>
                            </span>
                        <ul class="py-4 -ml-4 text-md">
                            <li class="flex items-center">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                Projekty B+R
                            </li>
                            <li class="flex items-center">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                Audyty rozwiązań IT
                            </li>
                            <li class="flex items-center">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                Cyfryzacja biznesu i procesów
                            </li>
                            <li class="flex items-center">
                                <x-icons.arrow color="#5379f6"></x-icons.arrow>
                                Dedykowane aplikacje mobilne i webowe
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden lg:flex basis-3/5">
                    <div class="rounded-xl bg-gray-light max-h-[600px] rotate-6">
                        <div class="relative flex flex-col justify-between aspect-square max-h-[600px] z-10 right-4 top-10 rounded-2xl bg-white p-6 -rotate-6">
                            <div class="px-4 pt-5 font-semibold text-3xl">
                                Projektujemy rozwiązania
                            </div>
                            <div class="p-8 text-website-normal">
                                <div class="flex flex-col items-center w-auto h-auto text-center bg-gray-light p-6 rounded-2xl">
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
            <div class="flex basis-1/3 z-10 relative">
                <div class="flex flex-col">
                    <div class="relative">
                        <x-badge>zobacz jak działamy</x-badge>
                        <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900">Case study</h2>
                        <span class="absolute -right-[15%]">
                            <x-bubble size="40"/>
                        </span>
                    </div>
                    <div class="text-black subtitle">
                        <span>Dowiedz się jak nasze realizacje przekształciły wyzwania klientów w <span
                                class="font-medium">skuteczne rozwiązania</span></span>
                        <ul class="list-disc-none py-8">
                            @foreach($caseStudy as $key => $description)
                                <li><span class="font-semibold">{{ $key }}</span> : {{ $description }}</li>
                            @endforeach
                        </ul>
                        <div class="relative flex pb-8">
                            <div class="relative flex z-10">
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
            <div class="flex rounded-2xl md:bg-gray-light -rotate-3 basis-2/3 relative md:shadow-md left-[30%] lg:left-[10%] mt-12">
                <div class="absolute hidden lg:block rotate-3 z-20 rounded-2xl h-52 w-80 -left-[10%] bottom-16 bg-[url('graphics/code-snippet.png')] bg-cover">
                </div>
                <div class="relative flex left-[5%] overflow-hidden rounded-2xl bg-white shadow-md rotate-3">
                    <img src="graphics/vita.png" class="w-full" alt="Vita homepage"/>
                </div>
            </div>

        </section>
        <section class="bg-gray-light my-12 py-32 text-center z-10 relative">
            <div class="hidden md:block bg-binary z-20 absolute w-[4000px] h-[1000px] -top-60 opacity-30 overflow-hidden bg-cover"></div>
            <div class="section-padding">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-semibold text-gray-900 my-6">Tech stack</h2>
            <span class="subtitle">PHP i Laravel to nasze główne narzędzie pracy. GitHub stanowi naszą centralną platformę, umożliwiającą code review oraz CI/CD za pomocą GitHub Actions. Frontend budujemy z użyciem Vue.js, a także korzystamy z różnych systemów zarządzania bazami danych, tj. MySQL i PostgreSQL.</span>
            <div class="lg:flex grid grid-cols-3 md:flex-row relative z-30 pb-6 text-gray-400 items-center justify-center mt-6 gap-24">
                <div class="">
                    <img src="images/tech/laravel.png" class="tech-icon" alt="laravel"/>
                </div>
                <div>
                    <img src="images/tech/php.png" class="tech-icon" alt="php"/>
                </div>
                <div class="">
                    <img src="images/tech/postgresql.png" class="tech-icon" alt="postgresql"/>
                </div>
                <div>
                    <img src="images/tech/docker.png" class="tech-icon" alt="docker"/>
                </div>
                <div class="">
                    <img src="images/tech/vue.png" class="tech-icon" alt="vue"/>
                </div>
            </div>
            </div>
        </section>
        <section class="section-padding text-center items-center py-24">
            <h2 class="text-3xl md:text-4xl lg:text-6xl font-semibold text-gray-900 mb-6">Co mówią o nas inni</h2>
            <x-badge>opinie</x-badge>
            <span class="subtitle">Opinie naszych klientów są bardzo ważne, <span class="font-semibold">świadczą o jakości naszych usług</span> i inspirują nas do nieustannego doskonalenia.</span>
            <div class="grid gap-6 text-center lg:grid-cols-3 lg:gap-12">
                @foreach($testimonials as $testimonial)
                    <x-testimonial
                        photoUrl="{{ $testimonial['photoUrl'] }}"
                        name="{{ $testimonial['name'] }}"
                        occupation="{{ $testimonial['occupation'] }}"
                        description="{{ $testimonial['description'] }}"
                        linkedIn="{{ $testimonial['linkedIn'] }}"
                    />
                @endforeach

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

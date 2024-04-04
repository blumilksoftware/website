@extends("layout.public")

@php
    $path = public_path('case_studies.json');
    $jsonData = file_get_contents($path);
    $caseStudy = json_decode($jsonData, true)['case_studies'][0];
@endphp

@section("content")
    <div class="relative">
        <div class="absolute left-6 top-36">
            <x-bubble size="80"/>
        </div>
        <div class="absolute left-24 top-28">
            <x-bubble size="30"/>
        </div>
        <div class="absolute -left-16 top-80">
            <x-bubble size="200"/>
        </div>
        <div class="absolute right-36 top-36">
            <x-bubble size="40"/>
        </div>
        <div class="relative top-24">
            <div class="absolute right-20 top-72">
                <x-bubble size="90"/>
            </div>
        </div>
        <div class="relative top-24">
            <div class="absolute right-24 top-96">
                <x-bubble size="200"/>
            </div>
        </div>

        <div class="flex flex-row py-12 padding">
            <div class="flex basis-1/2">
                <div class="flex flex-col justify-center">
                    <div class="my-4">
                        <h2 class="text-4xl font-medium text-gray-900">Oprogramowanie
                            <span class="text-website-normal block"> dopasowane </span> do Twoich potrzeb.</h2></div>
                    <div>
                    <span>
                        Jesteśmy pasjonatami tworzenia aplikacji web/mobile oraz zaawansowanych projektów B+R.
                        <span class="font-medium">Zmieniami koncepcje w działające rozwiązania.</span>
                    </span>
                    </div>
                </div>
            </div>
            <div class="flex basis-1/2 flex-shrink">
                <img src="images/web-1.jpg" class="h-auto" alt="placeholder"/>
            </div>
        </div>

        <div class="text-center padding">
            <div class="text-2xl font-medium text-gray-400">Dołącz do grona <span class="text-website-normal">zadowolonych klientów Blumilk</span>
            </div>

            <div class="flex flex-row py-12 pb-12 text-gray-400">
                <div class="basis-1/4">
                    <img src="partnerships/cwup.png" class="h-1/2" alt="Collegium Witelona"/>
                </div>
                <div class="basis-1/4">
                    <img src="images/client-2.jpg" class="h-auto" alt="Insly"/>
                </div>
                <div class="basis-1/4">
                    <img src="images/client-3.jpg" class="h-auto" alt="KGHM"/>
                </div>
                <div class="basis-1/4">
                    <img src="images/client-4.jpg" class="h-auto" alt="Vita Plus"/>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-gray to-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="#ffffff" fill-opacity="1"
                      d="M0,64L80,69.3C160,75,320,85,480,90.7C640,96,800,96,960,80C1120,64,1280,32,1360,16L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>
            <div class="flex justify-center padding pt-24">
                <div class="flex basis-1/2">
                    <div class="flex flex-col">
                        <div><h2 class="text-4xl font-semibold text-gray-900"> Jak możemy Ci pomóc? </h2></div>
                        <div class="text-black">
                        <span>Badania, rozwój, kod:
                            <span class="font-medium">
                                kształtujemy przyszłość oprogramowania.
                            </span>
                        </span>
                            <ul class="py-4 -ml-4">
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
                </div>
                <div class="flex place-content-center basis-1/2">
                    <div class="rounded-2xl bg-gray basis-1/2 rotate-6">
                        <div class="relative right-4 top-10 overflow-hidden rounded-2xl bg-white py-6 -rotate-6">
                            <div class="px-4 py-5 sm:px-6 font-semibold text-2xl">
                                Projektujemy rozwiązania
                            </div>
                            <div class="px-4 py-2 sm:p-6 text-website-normal">
                                <div class="flex flex-col items-center w-80 text-center">
                                    <img src="/graphics/stars.png" class="w-24 pb-6" alt="5 stars"/>
                                    W trosce o stuprocentowe zadowolenie naszych klientów i partnerów.
                                </div>
                            </div>
                            <div class="flex place-content-center px-4 py-2 sm:px-6">
                                <x-primary-button>{{ __("buttons.text_us") }}</x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="#ffffff" fill-opacity="1"
                      d="M0,64L80,69.3C160,75,320,85,480,90.7C640,96,800,96,960,80C1120,64,1280,32,1360,16L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </div>
        <div class="flex justify-center padding py-24 ">
            <div class="flex basis-1/2 z-10">
                <div class="flex flex-col">
                    <div><h2 class="text-4xl font-semibold text-gray-900 mb-4">Case study</h2></div>
                    <div class="text-black">
                        <span>Dowiedz się jak nasze realizacje przekształciły wyzwania klientów w <span
                                class="font-medium">skuteczne rozwiązania</span></span>
                        <ul class="list-disc-none py-8">
                            @foreach($caseStudy as $key => $description)
                                <li><span class="font-semibold">{{ $key }}</span> : {{ $description }}</li>
                            @endforeach
                        </ul>
                        <div class="flex">
                            <x-secondary-button>{{ __("buttons.all_projects") }}</x-secondary-button>
                            <x-primary-button>{{ __("buttons.case_study") }}</x-primary-button>
                        </div>
                    </div>
                </div>
                <span class="relative left-44">
                <x-bubble size="40"/>
            </span>
                <span class="relative left-20 top-80">
                <x-bubble size="90"/>
            </span>
            </div>
            <div class="flex rounded-2xl bg-gray -rotate-3 basis-1/2 relative left-56">
                <div class="relative flex left-12 overflow-hidden rounded-2xl bg-white shadow-md rotate-3">
                    <img src="graphics/vita.png" class="" alt="placeholder"/>
                </div>
            </div>
        </div>
        <div class="bg-gray bg-binary my-12 py-12">
            <div class="padding text-center z-10">
                <h2 class="text-4xl font-semibold text-gray-900 my-6">Tech stack</h2>
                <span>PHP i Laravel to nasze główne narzędzie pracy. GitHub stanowi naszą centralną platformę, umożliwiającą code review oraz CI/CD za pomocą GitHub Actions. Frontend budujemy z użyciem Vue.js, a także korzystamy z różnych systemów zarządzania bazami danych, tj. MySQL i PostgreSQL.</span>
                <div class="flex flex-row py-12 pb-12 text-gray-400">
                    <div class="basis-1/4">
                        <img src="tech/laravel.png" class="h-1/2" alt="laravel"/>
                    </div>
                    <div class="basis-1/4">
                        <img src="tech/php.jpg" class="h-auto" alt="php"/>
                    </div>
                    <div class="basis-1/4">
                        <img src="tech/docker.jpg" class="h-auto" alt="docker"/>
                    </div>
                    <div class="basis-1/4">
                        <img src="tech/vue.jpg" class="h-auto" alt="vue"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-12 py-12">
            <div class="padding text-center z-10">
                <h2 class="text-4xl font-semibold text-gray-900 my-6">Co mówią o nas inni</h2>
                <span>Opinie naszych klientów są bardzo ważne, <span class="font-semibold">świadczą o jakości naszych usług</span> i inspirują nas do nieustannego doskonalenia.</span>

            </div>
        </div>
    </div>
@endsection

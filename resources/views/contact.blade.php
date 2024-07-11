@extends('layout.public')
@section("title", __("meta.contact.title"))
@section("description", __("meta.contact.description"))
@section('content')
    @php
        $excludeFooter = true;
    @endphp
    @if(Session('success'))
        <x-toast type="success" position="top-right">{{ Session::get('success') }}</x-toast>
    @endif
    <div class="z-10">
        <div class="relative w-auto h-auto">
            <div class="relative md:block">
                <div class="absolute -left-[15%] sm:-left-[8%] md:-left-[2%] xl:-left-[1%] top-24 md:top-30">
                    <x-bubble size="100"/>
                </div>
                <div class="absolute xl:hidden left-[8%] md:left-[4%] xl:left-[5%] top-8 md:top-18">
                    <x-bubble size="40"/>
                </div>
                <div class="absolute xl:hidden right-[4%] top-8">
                    <x-bubble size="50"/>
                </div>
                <div class="absolute hidden xl:block right-[7%] top-[500px]">
                    <x-bubble size="50"/>
                </div>
                <div class="absolute hidden xl:block -right-[6%] top-24">
                    <x-bubble size="220"/>
                </div>
                <div class="absolute hidden xl:block left-[7%] top-[560px]">
                    <x-bubble size="60"/>
                </div>
                <div class="absolute hidden xl:block right-[2%] top-[600px]">
                    <x-bubble size="110"/>
                </div>
            </div>
        </div>
        <div
            class="grid xl:grid-cols-2 justify-center items-center text-black bg-gray-light xl:bg-gradient-to-br from-gray-light via-[#F8F9FC] to-white xl:pb-8">
            <section class="md:flex flex-col px-[10%] xl:px-[0%] xl:pl-[40%] pt-16 pb-4 z-20">
                <h4 class="text-3xl sm:text-4xl lg:text-5xl text-center xl:text-left font-semibold text-black"><span
                        class="text-website-normal">{{ __('content.contact.title_1') }}</span>
                    {{ __('content.contact.title_2') }}</h4>
                <p class="text-md xl:text-lg leading-8 text-black text-center xl:text-left py-6">
                    {{ __('content.contact.subtitle') }}
                </p>
                <div class="flex flex-col lg:flex-row">
                    <form action="{{ route('contact.create') }}" method="POST" class="lg:flex-auto">
                        @csrf
                        <div class="grid grid-cols-1 gap-y-6">
                            <div>
                                <label for="e-mail"
                                       class="block text-xs font-semibold leading-6 text-gray-700">{{ __('content.contact.form.email') }}</label>
                                <div class="mt-2.5">
                                    <input name="email" id="email" autocomplete="given-e-mail"
                                           value="{{ old('email') }}"
                                           class="block w-full xl:w-[90%] h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-website-light sm:text-sm sm:leading-6">
                                    @error('email')
                                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="topic"
                                       class="block text-xs font-semibold leading-6 text-gray-700">{{ __('content.contact.form.title') }}</label>
                                <div class="mt-2.5">
                                    <input type="text" name="topic" id="topic" autocomplete="topic"
                                           value="{{ old('topic') }}"
                                           class="block w-full xl:w-[90%]  h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-website-light sm:text-sm sm:leading-6">
                                    @error('topic')
                                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="message"
                                       class="block text-xs font-semibold leading-6 text-gray-700">{{ __('content.contact.form.message') }}</label>
                                <div class="mt-2.5">
                                <textarea id="message" name="message" rows="4" autocomplete="message"
                                          class="block w-full xl:w-[90%] rounded-md border-0 px-3.5 py-2 min-h-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-website-light sm:text-sm sm:leading-6">{{ old('message') }}</textarea>
                                    @error('message')
                                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-left mt-2 xl:w-[90%]">
                            <label for="consents" class="flex items-center">
                                <input type="checkbox" name="consents" id="consents"
                                       class="w-4 h-4 rounded-sm focus:ring-0 checked:text-website-normal">
                                <span class="text-xs font-normal text-gray-600 ml-2 pt-4">
                                    {{ __('content.contact.policy.part_1') }}
                                    <a href="{{ route('privacy-policy') }}" target="_blank"
                                       class="underline font-bold">{{ __('content.contact.policy.part_2') }}</a>
                                    {{ __('content.contact.policy.part_3') }}
                                </span>
                            </label>
                            @error('consents')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-3 flex">
                            <button type="submit"
                                    class="w-full lg:w-[45%] 2xl:w-[32%] text-xl mx-0 bg-website-dark m-2 p-3 sm:text-lg h-min text-center font-normal text-white shadow-sm transform transition hover:scale-110 hover:rounded-sm flex justify-center items-center space-x-2">
                                {{ __('buttons.send') }}
                            </button>
                        </div>
                    </form>
                </div>
            </section>
            <section class="flex flex-col h-full text-black px-[10%] bg-white xl:bg-transparent pb-4">
                <div class="xl:max-w-[460px] h-full xl:pt-32">
                    <div
                        class="hidden absolute xl:flex xl:w-[455px] xl:h-[451px] -translate-y-[30px] translate-x-[25px] rotate-[4deg] bg-gray-dark rounded-3xl shadow-md">
                    </div>
                    <div
                        class="flex flex-col xl:w-[460px] xl:h-[451px] xl:bg-white p-8 self-center rounded-3xl xl:shadow-md bg-opacity-80 gap-x-14 justify-center items-center pt-10 xl:pt-0 relative">

                        <div class="relative">
                            <h1 class="text-2xl font-bold text-black mb-4">{{ __('content.contact.company') }}</h1>
                            <div>
                                <div class="flex mt-3 items-start">
                                    <span class="sr-only">Location</span>
                                    <x-icons.marker></x-icons.marker>
                                    <div class="ml-4 -mt-[2px]">
                                        <div>{{ __('content.contact.location.address') }}</div>
                                        <div>{{ __('content.contact.location.PostalCode') }}</div>
                                    </div>
                                </div>
                                <div class="flex mt-3 items-start">
                                    <span class="sr-only">Phone number</span>
                                    <x-icons.phone></x-icons.phone>
                                    <div class="ml-4 -mt-[2px]">{{ __('content.contact.phone') }}</div>
                                </div>
                                <div class="flex mt-3 items-start">
                                    <span class="sr-only">Email</span>
                                    <x-icons.postcard></x-icons.postcard>
                                    <div class="ml-4 -mt-[2px]">{{ __('content.contact.email') }}</div>
                                </div>
                                <div class="flex mt-3 items-start">
                                    <span class="sr-only">Info</span>
                                    <x-icons.info></x-icons.info>
                                    <div class="ml-4 -mt-[2px]">
                                        <div>NIP {{ __('content.contact.info.NIP') }}</div>
                                        <div>KRS {{ __('content.contact.info.KRS') }}</div>
                                        <div>REGON {{ __('content.contact.info.REGON') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden xl:flex xl:justify-end space-x-6 md:order-2 items-center xl:mt-32 xl:pr-2">
                        <a href="https://clutch.co/profile/blumilk-0" class="text-gray-700 align-center fill-current"
                           target="_blank">
                            <span class="sr-only">Clutch</span>
                            <x-icons.clutch class="align-middle"/>
                        </a>

                        <a href="https://github.com/blumilksoftware" class="text-gray-700" target="_blank">
                            <span class="sr-only">Github</span>
                            <i class="fa-brands fa-square-github text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://linkedin.com/company/blumilksoftware" class="text-gray-700" target="_blank">
                            <span class="sr-only">LinkedIn</span>
                            <i class="fa-brands fa-linkedin text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://www.youtube.com/@blumilksoftware" class="text-gray-700" target="_blank">
                            <span class="sr-only">Youtube</span>
                            <i class="fa-brands fa-square-youtube text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://www.facebook.com/blumilksoftware/" class="text-gray-700" target="_blank">
                            <span class="sr-only">Facebook</span>
                            <i class="fa-brands fa-square-facebook text-xl lg:text-2xl"></i>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <div id="map" class="h-[40vh] xl:h-[60vh] w-full"></div>
        <div class="flex justify-center space-x-6 md:order-2 pt-8 items-center xl:mt-8 xl:pr-2 xl:hidden pb-6">
            <a href="https://clutch.co/profile/blumilk-0" class="text-gray-700 align-center fill-current"
               target="_blank">
                <span class="sr-only">Clutch</span>
                <x-icons.clutch class="align-middle"/>
            </a>

            <a href="https://github.com/blumilksoftware" class="text-gray-700" target="_blank">
                <span class="sr-only">Github</span>
                <i class="fa-brands fa-square-github text-xl lg:text-2xl"></i>
            </a>
            <a href="https://linkedin.com/company/blumilksoftware" class="text-gray-700" target="_blank">
                <span class="sr-only">LinkedIn</span>
                <i class="fa-brands fa-linkedin text-xl lg:text-2xl"></i>
            </a>
            <a href="https://www.youtube.com/@blumilksoftware" class="text-gray-700" target="_blank">
                <span class="sr-only">Youtube</span>
                <i class="fa-brands fa-square-youtube text-xl lg:text-2xl"></i>
            </a>
            <a href="https://www.facebook.com/blumilksoftware/" class="text-gray-700" target="_blank">
                <span class="sr-only">Facebook</span>
                <i class="fa-brands fa-square-facebook text-xl lg:text-2xl"></i>
            </a>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                mapboxgl.accessToken = '{{ config('services.mapbox.access_token') }}'

                var map = new mapboxgl.Map({
                    container: 'map',
                    style: '{{ config('services.mapbox.style') }}',
                    center: [16.163200, 51.208200], //[lng, lat]
                    zoom: 13,
                })
                map.scrollZoom.disable()
                var nav = new mapboxgl.NavigationControl()

                function addRemoveMapControls() {

                    if (window.matchMedia('(min-width: 1024px)').matches) {
                        map.addControl(nav, 'top-left')
                    } else {
                        map.removeControl(nav)
                    }
                }

                addRemoveMapControls()

                window.addEventListener('resize', function () {
                    addRemoveMapControls()
                })

                const marker = new mapboxgl.Marker({
                    color: '#5379F6',
                })
                    .setLngLat([16.163780, 51.208760])
                    .addTo(map)

                marker.getElement().addEventListener('click', function () {
                    window.open('https://maps.app.goo.gl/h6HhaStCsVmwAwF19')
                })
            })
        </script>
@endsection

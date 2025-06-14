@extends('layout.public', ["excludeBigBubbles" => true])

@section("title", __("meta.contact.title"))
@section("description", __("meta.contact.description"))

@php
    $fieldId = uniqid("g-recaptcha-response");
    $siteKey = config("recaptchav3.sitekey");
@endphp

@section('content')
    @if( Session('success') )
        <x-toast type="success" position="top-right">{{ Session::get('success') }}</x-toast>
    @endif

    <div class="mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto grid xl:grid-cols-2 xl:grid-rows-4 grid-flow-row-dense content-center text-black xl:pb-8 mt-12 items-start">
        <div class="h-min">
            <h4 class="text-2xl sm:text-3xl lg:text-4xl text-center xl:text-left font-bold text-blue-dark pb-4">
                {{ __('content.contact.title_1') }}</h4>
            <p class="text-md leading-7 text-[#6B6E70] text-center xl:text-left">
                {{ __('content.contact.subtitle') }}
            </p>
        </div>
        <div class="row-span-4 py-12 xl:p-0">
            <form action="{{ route('contact.create') }}" method="POST" class="flex flex-col gap-y-4 justify-between md:shadow-lg rounded-2xl h-full xl:ml-[15%] md:px-16 py-10">
                @csrf
                <input type="hidden" name="g-recaptcha-response" id="{{ $fieldId }}" />
                <div class="grid gap-y-3">
                    <div>
                        <label for="email" class="block text-sm font-normal leading-6 text-blue-dark ml-2">{{ __('content.contact.form.email') }}</label>
                        <div class="mt-2.5 ">
                            <input name="email" id="email" autocomplete="given-e-mail"
                                   value="{{ old('email') }}"
                                   class="block w-full h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-xs ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-gray-400 sm:text-sm sm:leading-6">
                            @error('email')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="topic"
                               class="block text-sm font-normal leading-6 text-blue-dark ml-2">{{ __('content.contact.form.title') }}</label>
                        <div class="mt-2.5">
                            <input type="text" name="topic" id="topic" autocomplete="topic"
                                   value="{{ old('topic') }}"
                                   class="block w-full h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-xs ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-gray-400 sm:text-sm sm:leading-6">
                            @error('topic')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="message"
                               class="block text-sm font-normal leading-6 text-blue-dark ml-2">{{ __('content.contact.form.message') }}</label>
                        <div class="mt-2.5">
                                <textarea id="message" name="message" rows="10" autocomplete="message"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 min-h-12 text-gray-900 shadow-xs ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-gray-400 sm:text-sm sm:leading-6">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-left mt-2">
                    <label for="consents" class="flex items-center">
                        <input type="checkbox" name="consents" id="consents"
                               class="w-4 h-4 rounded-xs border-[#6B6E70] focus:ring-0 checked:text-website-light">
                        <span class="text-xs font-normal text-[#6B6E70] ml-2 pt-4">
                                    {{ __('content.contact.policy.part_1') }}
                                    <a href="{{ route('privacy-policy') }}" target="_blank"
                                       class="text-blue-normal">{{ __('content.contact.policy.part_2') }}</a>
                                    {{ __('content.contact.policy.part_3') }}
                                </span>
                    </label>
                    @error('consents')
                    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3 flex">
                    <button type="submit"
                            class="w-full text-xl mx-0 bg-blue-normal m-2 p-3 sm:text-lg h-min text-center font-normal text-white shadow-xs rounded-xl transform transition hover:scale-110 flex justify-center items-center"
                            data-umami-event="send-contact-form-button-click">
                        {{ __('buttons.send_message') }}
                    </button>
                </div>
                @error('g-recaptcha-response')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </form>
        </div>
        <div class="h-full row-span-3">
            <div id="map" class="h-[40vh] xl:h-[20vh] w-full rounded-xl py-16 lg:py-0"></div>
            <div class="py-16">
                <h1 class="text-2xl font-semibold text-blue-dark mb-4 text-center  md:text-left">{{ __('content.contact.company') }}</h1>
                <div class="flex flex-col lg:flex-row text-sm text-[#6B6E70] gap-x-6">
                    <div class="flex mt-3 items-center">
                        <span class="sr-only">{{ __('alt.location') }}</span>
                        <i class="ti ti-map-pin text-2xl text-blue-dark"></i>
                        <div class="ml-4">
                            <div>{{ __('content.contact.location.address') }}</div>
                            <div>{{ __('content.contact.location.postal_code') }}</div>
                            <div>{{ __('content.contact.location.country') }}</div>
                        </div>
                    </div>
                    <div class="flex mt-3 items-center">
                        <span class="sr-only">{{ __('alt.phone') }}</span>
                        <i class="ti ti-phone text-2xl text-blue-dark"></i>
                        <div class="ml-4"><a href="callto:{{ __('content.contact.phone') }}">{{ __('content.contact.phone') }}</a></div>
                    </div>
                    <div class="flex mt-3 items-center">
                        <span class="sr-only">{{ __('alt.mail') }}</span>
                        <i class="ti ti-mail text-2xl text-blue-dark"></i>
                        <div class="ml-4"><a href="mailto:{{ __('content.contact.email') }}">{{ __('content.contact.email') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
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
                color: '#3259E8',
            })
                .setLngLat([16.163780, 51.208760])
                .addTo(map)

            marker.getElement().addEventListener('click', function () {
                window.open('https://maps.app.goo.gl/h6HhaStCsVmwAwF19')
            })

            grecaptcha.ready(function() {
                grecaptcha.execute('{{ $siteKey }}', {action: 'contact'}).then(function(token) {
                    document.getElementById('{{ $fieldId }}').value = token;
                });
            });
        })
    </script>
@endsection

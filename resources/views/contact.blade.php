@extends('layout.public')

@section("title", __("meta.contact.title"))
@section("description", __("meta.contact.description"))

@section('content')
    @if( Session('success') )
        <x-toast type="success" position="top-right">{{ Session::get('success') }}</x-toast>
    @endif

    <div class="mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto flex flex-col xl:flex-row justify-center text-black xl:pb-8 mt-12">
        <div class="basis-1/2 flex flex-col gap-y-10">
            <div>
                <h4 class="text-2xl sm:text-3xl lg:text-4xl text-center xl:text-left font-bold text-black pb-4">
                    {{ __('content.contact.title_1') }}</h4>
                <p class="text-md leading-relaxed text-gray-500 text-center xl:text-left">
                    {{ __('content.contact.subtitle') }}
                </p>
            </div>
            <div id="map" class="h-[40vh] xl:h-[20vh] w-full rounded-xl"></div>
            <div>
                <h1 class="text-2xl font-semibold text-black mb-4">{{ __('content.contact.company') }}</h1>
                <div class="flex text-sm text-gray-400 gap-x-6">
                    <div class="flex mt-3 items-start">
                        <span class="sr-only">Location</span>
                        <x-icons.location/>
                        <div class="ml-4">
                            <div>{{ __('content.contact.location.address') }}</div>
                            <div>{{ __('content.contact.location.PostalCode') }}</div>
                        </div>
                    </div>
                    <div class="flex mt-3 items-start">
                        <span class="sr-only">Phone number</span>
                        <x-icons.phone/>
                        <div class="ml-4">{{ __('content.contact.phone') }}</div>
                    </div>
                    <div class="flex mt-3 items-start">
                        <span class="sr-only">Email</span>
                        <x-icons.mail/>
                        <div class="ml-4">{{ __('content.contact.email') }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="basis-1/2">
            <form action="{{ route('contact.create') }}" method="POST" class="flex flex-col gap-y-4 justify-between h-full ml-36 bg-[#F4F8FD] px-16 py-10 rounded-xl">
                @csrf
                <div class="grid gap-y-3">
                    <div>
                        <label for="e-mail"
                               class="block text-sm font-normal leading-6 text-gray-700 ml-2">{{ __('content.contact.form.email') }}</label>
                        <div class="mt-2.5 ">
                            <input name="email" id="email" autocomplete="given-e-mail"
                                   value="{{ old('email') }}"
                                   class="block w-full h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 bg-[#fafcfe] placeholder:text-gray-400 focus:ring-1 focus:ring-gray-400 sm:text-sm sm:leading-6">
                            @error('email')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="topic"
                               class="block text-sm font-normal leading-6 text-gray-700 ml-2">{{ __('content.contact.form.title') }}</label>
                        <div class="mt-2.5">
                            <input type="text" name="topic" id="topic" autocomplete="topic"
                                   value="{{ old('topic') }}"
                                   class="block w-full h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 bg-[#fafcfe] placeholder:text-gray-400 focus:ring-1 focus:ring-gray-400 sm:text-sm sm:leading-6">
                            @error('topic')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="message"
                               class="block text-sm font-normal leading-6 text-gray-700 ml-2">{{ __('content.contact.form.message') }}</label>
                        <div class="mt-2.5">
                                <textarea id="message" name="message" rows="10" autocomplete="message"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 min-h-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 bg-[#fafcfe] placeholder:text-gray-400 focus:ring-1 focus:ring-gray-400 sm:text-sm sm:leading-6">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-left mt-2 xl:w-[90%]">
                    <label for="consents" class="flex items-center">
                        <input type="checkbox" name="consents" id="consents"
                               class="w-4 h-4 rounded-sm bg-[#fafcfe] border-gray-300 focus:ring-0 checked:text-website-light">
                        <span class="text-xs font-normal text-gray-500 ml-2 pt-4">
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
                            class="w-full text-xl mx-0 bg-website-normal m-2 p-3 sm:text-lg h-min text-center font-normal text-white shadow-sm rounded-xl transform transition hover:scale-110 flex justify-center items-center">
                        {{ __('buttons.send_message') }}
                    </button>
                </div>
            </form>
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

@php
    $fieldId = uniqid("g-recaptcha-response");
    $siteKey = config("recaptchav3.sitekey");
@endphp


<section class="relative overflow-hidden" id="contact">
    <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
         class="absolute z-0 hidden xl:block top-20 -left-27" alt=""/>
    <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
         class="absolute z-0 hidden xl:block top-80 -right-27" alt=""/>
    <div
        class="px-4 sm:px-6 lg:px-12 mx-auto space-y-10 py-8 sm:pt-20 lg:pb-28 bg-edu-gray-dark  flex items-center justify-center">
        <div>
            <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
                 class="absolute z-0 hidden xl:block top-0 left-1/2 -translate-x-1/2" alt=""/>
        </div>
        <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
             class="absolute z-0 hidden xl:block -bottom-8 right-110" alt=""/>
        <div class="flex text-center flex-col items-center gap-y-4 bg-white max-w-4xl rounded-2xl py-12 px-6 lg:px-24 z-10">
            <div class="text-3xl md:text-4xl text-center">
                <h2 class="font-medium text-edu-gray-dark leading-7 md:leading-tight">
                    <span class="inline">{{ $title }}</span>
                </h2>
            </div>
            <p class="leading-6 text-sm sm:text-md text-edu-gray-dark max-w-2xl text-center">
                {{ $description }}
            </p>
            <form action="#" method="POST" class="flex flex-col gap-y-4 justify-between mt-2">
                @csrf
                <input type="hidden" name="g-recaptcha-response" id="{{ $fieldId ?? 'g-recaptcha-response' }}"/>
                <div class="grid gap-y-3">
                    <div class="flex flex-col md:flex-row gap-y-2 lg:gap-x-4">
                        <div class="relative flex-1">
                            <input
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                placeholder="{{ __('edulanding.contact.name') }}"
                                class="block w-full h-12 pl-10 pr-3 border-0 px-3.5 py-2 text-edu-gray-dark text-md ring-1 ring-inset ring-gray-extra-dark placeholder:text-edu-gray focus:ring-1 focus:ring-edu-gray sm:text-sm sm:leading-6 rounded-2xl shadow-sm/5"
                            />
                            <span
                                class="absolute left-3 top-1/2 -translate-y-1/2 text-edu-gray-dark pointer-events-none">
                                    <i class="ti ti-user text-lg"></i>
                            </span>
                            @error('name')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative flex-1">
                            <input
                                name="company"
                                id="company"
                                value="{{ old('company') }}"
                                placeholder="{{ __('edulanding.contact.company') }}"
                                class="block w-full h-12 pl-10 pr-3 border-0 px-3.5 py-2 text-edu-gray-dark text-md ring-1 ring-inset ring-gray-extra-dark placeholder:text-edu-gray focus:ring-1 focus:ring-edu-gray sm:text-sm sm:leading-6 rounded-2xl shadow-sm/5"
                            />
                            <span
                                class="absolute left-3 top-1/2 -translate-y-1/2 text-edu-gray-dark pointer-events-none">
                                    <i class="ti ti-building text-lg"></i>
                            </span>
                            @error('company')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="relative flex-1">
                        <input
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            placeholder="{{ __('edulanding.contact.email') }}"
                            class="block w-full h-12 pl-10 pr-3 border-0 px-3.5 py-2 text-edu-gray-dark text-md ring-1 ring-inset ring-gray-extra-dark placeholder:text-edu-gray focus:ring-1 focus:ring-edu-gray sm:text-sm sm:leading-6 rounded-2xl shadow-sm/5"
                        />
                        <span
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-edu-gray-dark pointer-events-none">
                                    <i class="ti ti-at text-lg"></i>
                            </span>
                        @error('email')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative">
                      <textarea
                          name="message"
                          id="message"
                          rows="6"
                          autocomplete="message"
                          placeholder="{{ __('edulanding.contact.message') }}"
                          class="block w-full border-0 px-10 py-2 text-edu-gray-dark ring-1 ring-inset ring-gray-extra-dark placeholder:text-edu-gray placeholder:pt-1 placeholder:text-sm placeholder:leading-none focus:ring-1 focus:ring-edu-gray sm:text-sm rounded-2xl shadow-sm"
                      >{{ old('message') }}</textarea>
                        <span class="absolute left-3 top-2.5 text-edu-gray-dark pointer-events-none flex items-center">
                            <i class="ti ti-mail text-lg"></i>
                        </span>
                        @error('message')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center mt-2">
                    <label for="consents" class="flex items-center">
                        <input type="checkbox" name="consents" id="consents"
                               class="w-4 h-4 rounded-xs border-edu-gray focus:ring-0 checked:text-edu-gray-dark" />
                        <span class="text-xs font-normal text-edu-gray ml-2">
                            {{ __('content.contact.policy.part_1') }}
                            <a href="{{ route('privacy-policy') }}" target="_blank" class="text-edu-gray-dark font-semibold" >
                             {{ __('content.contact.policy.part_2') }}
                             </a>
                             {{ __('content.contact.policy.part_3') }}
                        </span>
                    </label>
                </div>
                <div class="mt-3 flex justify-center">
                    <button type="submit"
                            class="text-sm px-6 bg-edu-gray-dark m-2 p-3 sm:text-md h-min text-center font-normal text-white shadow-xs rounded-md transform transition hover:scale-110 flex justify-center items-center cursor-pointer">
                        {{ __('edulanding.contact.button') }}
                    </button>
                </div>
                @error('g-recaptcha-response')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </form>
        </div>
    </div>
</section>

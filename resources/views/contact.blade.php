@extends("layout.public")

@section("content")
@php
    $excludeFooter = true;
@endphp

<div class="relative md:block -z-10">
        <div class="relative md:block">
            <div class="absolute -left-[15%] sm:-left-[8%] md:-left-[2%] lg:left-0 top-28 md:top-40">
                <x-bubble size="100"/>
            </div>
            <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
                <x-bubble size="50"/>
            </div>
            <div class="absolute right-[4%] top-36">
                <x-bubble size="40"/>
            </div>
        </div>
    </div>    
    <div class="grid xl:grid-cols-2 justify-between xl:flex-row items-center gap-8 xl:gap-24 text-black px-[10%] md:px-[20%] pt-12 pb-16 md:py-16 bg-gray-dark xl:bg-gradient-to-r from-gray-extraDark to-white">
        <section class=" md:flex flex-col">
            <h4 class="text-3xl sm:text-4xl lg:text-5xl text-center xl:text-left font-semibold text-black "><span class="text-website-normal">{{__("contact.title")}}</span> {{__("contact.title2")}}</h4>
            <p class="text-md xl:text-lg leading-8 text-black text-center xl:text-left py-6">{{__("contact.subtitle")}}</p>
            <div class="flex flex-col lg:flex-row">
                <form action="#" method="POST" class="lg:flex-auto">
                    <div class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="e-mail"
                                   class="block text-xs font-semibold leading-6 text-gray-700">{{ __("contact.form.email") }}</label>
                            <div class="mt-2.5">
                                <input type="text" name="e-mail" id="e-mail" autocomplete="given-e-mail"
                                       class="block w-full  h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="topic"
                                   class="block text-xs font-semibold leading-6 text-gray-700">{{ __("contact.form.title") }}</label>
                            <div class="mt-2.5">
                                <input type="text" name="topic" id="topic" autocomplete="topic"
                                       class="block w-full h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="message"
                                   class="block text-xs font-semibold leading-6 text-gray-700">{{ __("contact.form.message") }}</label>
                            <div class="mt-2.5">
                                <textarea id="message" name="message" rows="4"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 min-h-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mt-6">
                <input type="checkbox" name="policyBox" id="policyBox">
                <p class="text-xs font-normal text-gray-600 ml-2">{{ __("contact.form.policy") }}</p>
            </div>
                    <div class="mt-6 flex flex-row justify-between items-end">
                        <x-primary-button type="submit" href="" class=" w-full xl:w-[30%]  bg-button">{{ __("buttons.send") }}</x-primary-button>
                    </div>
                </form>
            </div>
        </section>
        <section class="flex flex-col h-full justify-between text-black">
            <div class=" flex bg-white p-8 lg:max-w-xl h-auto self-center xl:self-end rounded-3xl bg-opacity-80 gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-black">Blumilk SP. z o.o</h1>
                    <div>
                        <div class="flex mt-2 items-center break-words">
                            <span class="sr-only">Location</span>
                            <i class="fa-solid fa-location-dot"></i>
                            <div class="ml-2">{{ __("contact.location") }}</div>
                        </div>
                        <div class="flex mt-2 items-center">
                            <span class="sr-only">Phone number</span>
                            <i class="fa-solid fa-phone"></i>
                            <div class="ml-2">{{ __("contact.phone") }}</div>
                        </div>
                        <div class="flex mt-2 items-center break-words">
                            <span class="sr-only">Email</span>
                            <i class="fa-solid fa-envelope"></i>
                            <div class="ml-2">{{ __("contact.email") }}</div>
                        </div>
                       
                        <div class="flex mt-2 items-center break-words">
                            <span class="sr-only">Info</span>
                            <i class="fa-solid fa-envelope"></i>
                            <div class="ml-2">{{ __("contact.info") }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                    <div class="flex justify-center space-x-6 md:order-2 mt-2">
                        <a href="https://clutch.co/profile/blumilk-0" class="md:m-auto text-black" target="_blank">
                            <span class="sr-only">Clutch</span>
                            <x-icons.clutch></x-icons.clutch>
                        </a>
                        <a href="https://github.com/blumilksoftware" class="text-black" target="_blank">
                            <span class="sr-only">Github</span>
                            <i class="fa-brands fa-square-github text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://linkedin.com/company/blumilksoftware" class="text-black" target="_blank">
                            <span class="sr-only">LinkedIn</span>
                            <i class="fa-brands fa-linkedin text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://twitter.com/blumilksoftware" class="text-black" target="_blank">
                            <span class="sr-only">X</span>
                            <i class="fa-brands fa-x-twitter text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://www.facebook.com/blumilksoftware/" class="text-black" target="_blank">
                            <span class="sr-only">X</span>
                            <i class="fa-brands fa-facebook text-xl lg:text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

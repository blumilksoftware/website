@extends("layout.public")

@section("content")
<div class="relative md:block -z-10">
        <div class="absolute -left-[6%] md:left-[1%] top-28 md:top-40">
            <x-bubble size="80"/>
        </div>
        <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
            <x-bubble size="30"/>
        </div>
        <div class="absolute right-[4%] top-36">
            <x-bubble size="40"/>
        </div>
        <div class="relative top-24">
            <div class="absolute right-[8%] md:right-[3%] top-72">
                <x-bubble size="90"/>
            </div>
        </div>
        <div class="relative top-24">
            <div class="absolute hidden md:block md:right-[4%] top-96">
                <x-bubble size="200"/>
            </div>
        </div>
    </div>
<section class="bg-gradient-to-r from-blue-500 to-black">
    
    <div class="grid xl:grid-cols-2 justify-between xl:flex-row items-center gap-8 xl:gap-24 text-black px-[10%] md:px-[20%] pt-12 pb-16 md:py-16">
        <section class=" md:flex flex-col">
            <h4 class="text-3xl sm:text-4xl lg:text-5xl text-center font-semibold text-black "><span class="text-website-normal">{{__("contact.title")}}</span> {{__("contact.title2")}}</h4>
            <p class="text-md xl:text-lg leading-8 text-black text-center py-3">{{__("contact.subtitle")}}</p>
            <div class="flex flex-col lg:flex-row">
                <form action="#" method="POST" class="lg:flex-auto">
                    <div class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="e-mail"
                                   class="block text-xs font-semibold leading-6 text-black">{{ __("contact.form.email") }}</label>
                            <div class="mt-2.5">
                                <input type="text" name="e-mail" id="e-mail" autocomplete="given-e-mail"
                                       class="block w-full  h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="topic"
                                   class="block text-xs font-semibold leading-6 text-black">{{ __("contact.form.title") }}</label>
                            <div class="mt-2.5">
                                <input type="text" name="topic" id="topic" autocomplete="topic"
                                       class="block w-full h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="message"
                                   class="block text-xs font-semibold leading-6 text-black">{{ __("contact.form.message") }}</label>
                            <div class="mt-2.5">
                                <textarea id="message" name="message" rows="4"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 min-h-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-row justify-between items-end">
                        <x-primary-button type="submit" href="" class="px-14 w-ful">{{ __("buttons.send") }}</x-primary-button>
                    </div>
                </form>
            </div>
        </section>
        <section class="flex flex-col h-full justify-between text-black">
            <div class=" flex bg-white p-8 lg:max-w-xl h-auto self-center xl:self-end rounded-3xl bg-opacity-80 gap-4">
                <div>
                    <div class="text-base font-semibold text-black">Katarzyna Nowak</div>
                    <div class="text-md font-light leading-6 text-black break-words pb-2">{{__("footer.contactTo.job")}}</div>
                    <div class="text-sm text-black break-normal break-words">{{__("footer.contactTo.description")}}</div>
                    <div>
                        <div class="flex mt-2 items-center">
                            <span class="sr-only">Phone number</span>
                            <i class="fa-solid fa-phone"></i>
                            <div class="ml-2">+48 780 142 367</div>
                        </div>
                        <div class="flex mt-2 items-center break-words">
                            <span class="sr-only">Email</span>
                            <i class="fa-solid fa-envelope"></i>
                            <div class="ml-2">katarzyna.nowak@blumilk.pl</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                    <div class="flex justify-center space-x-6 md:order-2 mt-2">
                        <a href="https://clutch.co/profile/blumilk-0" class="md:m-auto" target="_blank">
                            <span class="sr-only">Clutch</span>
                            <x-icons.clutch></x-icons.clutch>
                        </a>
                        <a href="https://github.com/blumilksoftware" class="text-white" target="_blank">
                            <span class="sr-only">Github</span>
                            <i class="fa-brands fa-square-github text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://linkedin.com/company/blumilksoftware" class="text-white" target="_blank">
                            <span class="sr-only">LinkedIn</span>
                            <i class="fa-brands fa-linkedin text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://twitter.com/blumilksoftware" class="text-white" target="_blank">
                            <span class="sr-only">X</span>
                            <i class="fa-brands fa-x-twitter text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://www.facebook.com/blumilksoftware/" class="text-white" target="_blank">
                            <span class="sr-only">X</span>
                            <i class="fa-brands fa-facebook text-xl lg:text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection

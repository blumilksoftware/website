<footer class="bg-gradient-to-t from-footer-dark to-footer-light relative">
    <x-waves.wave-footer></x-waves.wave-footer>
    <div class="grid xl:grid-cols-2 md:justify-between xl:flex-row items-center gap-6 2xl:gap-24 text-white px-[10%] md:px-[20%] pt-12 pb-16 md:py-16">
        <section class="hidden md:flex flex-col">
            <h4 class="text-3xl sm:text-4xl lg:text-5xl  font-semibold text-white ">{{__("footer.contact.title")}}</h4>
            <p class="text-sm xl:text-md leading-8 text-white py-3">{{__("footer.contact.subtitle")}}</p>
            <div class="flex flex-col lg:flex-row">
                <form action="#" method="POST" class="lg:flex-auto">
                    <div class="grid grid-cols-1 gap-y-3">
                        <div>
                            <label for="e-mail"
                                   class="block text-xs font-normal leading-6 text-white">{{ __("footer.form.email") }}</label>
                            <div class="mt-2">
                                <input type="text" name="e-mail" id="e-mail" autocomplete="given-e-mail"
                                       class="block w-full  h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="topic"
                                   class="block text-xs font-normal leading-6 text-white">{{ __("footer.form.title") }}</label>
                            <div class="mt-2">
                                <input type="text" name="topic" id="topic" autocomplete="topic"
                                       class="block w-full h-12 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="message"
                                   class="block text-xs font-normal leading-6 text-white">{{ __("footer.form.message") }}</label>
                            <div class="mt-2">
                                <textarea id="message" name="message" rows="4"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 min-h-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-row justify-between items-end">
                        <div>
                            <p class="text-sm leading-6 text-white">NIP 6912551135</p>
                            <p class="text-sm leading-6 text-white">KRS 0000866755</p>
                            <p class="text-sm leading-6 text-white">
                                <a href="#" class="font-semibold text-white">{{ __("footer.form.policy") }}</a>
                            </p>
                        </div>
                        <x-primary-button type="submit" href="" class="px-16">{{ __("buttons.send") }}</x-primary-button>
                    </div>
                </form>
            </div>
        </section>
        <section class="flex flex-col h-full justify-between">
            <div class="hidden md:flex bg-footer-light p-8 lg:max-w-xl h-auto self-center xl:self-end rounded-3xl bg-opacity-80 gap-4">
                <img src="{{ asset('images/kasia.jpeg') }}" alt="" class="size-16 xl:size-20 flex-none rounded-full">
                <div>
                    <div class="text-base font-semibold text-white">Katarzyna Nowak</div>
                    <div class="text-xs font-light leading-6 text-white break-words pb-3">{{__("footer.contactTo.job")}}</div>
                    <div class="text-xs text-white leading-loose break-normal break-words">{{__("footer.contactTo.description")}}</div>
                    <div class="text-base">
                        <div class="flex mt-4 items-center">
                            <span class="sr-only">Phone number</span>
                            <x-icons.phone></x-icons.phone>
                            <div class="ml-6">+48 780 142 367</div>
                        </div>
                        <div class="flex mt-2 items-center break-words">
                            <span class="sr-only">Email</span>
                            <x-icons.mail></x-icons.mail>
                            <div class="ml-6">katarzyna.nowak@blumilk.pl</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="md:flex text-center justify-center xl:justify-end">
                    <div class="md:hidden text-3xl font-semibold">
                        Blumilk sp. z o.o.
                        <p class="text-sm font-normal leading-6 text-white">NIP 6912551135 KRS 0000866755</p>
                        <p class=" text-sm leading-6 text-white">
                            <a href="#" class="font-semibold text-white">{{__("footer.form.policy")}}</a>
                        </p>
                    </div>
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
                        <a href="https://www.youtube.com/@blumilksoftware" class="text-white" target="_blank">
                            <span class="sr-only">Youtube</span>
                            <i class="fa-brands fa-square-youtube text-xl lg:text-2xl"></i>
                        </a>
                        <a href="https://www.facebook.com/blumilksoftware/" class="text-white" target="_blank">
                            <span class="sr-only">Facebook</span>
                            <i class="fa-brands fa-square-facebook text-xl lg:text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</footer>

<footer class="bg-gradient-to-t from-footer-dark to-footer-light">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 230">
        <path fill="#ffffff" fill-opacity="1"
              d="M0,128L80,149.3C160,171,320,213,480,224C640,235,800,213,960,176C1120,139,1280,85,1360,58.7L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
    <div class="text-white section-padding py-16 flex flex-col justify-between lg:flex-row items-center gap-8">
        <section class="hidden md:flex flex-col md:basis-1/2">
            <h4 class="text-4xl sm:text-5xl lg:text-6xl  font-bold text-white">{{__("footer.contact.title")}}</h4>
            <p class=" text-lg leading-8 text-white">{{__("footer.contact.subtitle")}}</p>
            <div class="py-8 flex flex-col gap-16 sm:gap-y-20 lg:flex-row">
                <form action="#" method="POST" class="lg:flex-auto">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="e-mail"
                                   class="block text-sm font-normal leading-6 text-white">{{__("footer.form.email")}}</label>
                            <div class="mt-2.5">
                                <input type="text" name="e-mail" id="e-mail" autocomplete="given-e-mail"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="topic"
                                   class="block text-sm font-normal leading-6 text-white">{{__("footer.form.title")}}</label>
                            <div class="mt-2.5">
                                <input type="text" name="topic" id="topic" autocomplete="topic"
                                       class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message"
                                   class="block text-sm font-normal leading-6 text-white">{{__("footer.form.message")}}</label>
                            <div class="mt-2.5">
                        <textarea id="message" name="message" rows="4"
                                  class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 flex justify-between">
                        <div>
                            <p class="text-sm leading-6 text-white">NIP 1234567890 KRS 1234567890
                            </p>
                            <p class=" text-sm leading-6 text-white">
                                <a href="#" class="font-semibold text-white">{{__("footer.form.policy")}}</a>
                            </p>
                        </div>

                        <x-primary-button type="submit" href="">{{ __("buttons.lets_talk") }}</x-primary-button>
                    </div>

                </form>
            </div>
        </section>
        <section class="flex flex-col lg:h-[500px] justify-between md:basis-1/2">
            <div class="hidden md:flex bg-footer-light p-8 lg:p-12 lg:min-w-[400px] lg:max-w-[600px] self-center rounded-3xl bg-opacity-80">
                <div class="flex gap-4">
                    <img src="images/kasia.jpeg" alt="" class="h-24 w-24 flex-none rounded-full">
                    <div class="gap-12">
                        <div class="text-base font-semibold text-white">Katarzyna Nowak</div>
                        <div class="text-md leading-6 text-white break-words pb-2">{{__("footer.contactTo.job")}}</div>
                        <div class="text-md text-white break-normal">{{__("footer.contactTo.description")}}</div>
                        <div class="">
                            <div class="flex mt-2 items-center">
                                <span class="sr-only">Phone number</span>
                                <i class="fa-solid fa-phone"></i>
                                <div class="ml-2">+48 500 123 348</div>
                            </div>
                            <div class="flex mt-2 items-center break-words">
                                <span class="sr-only">Email</span>
                                <i class="fa-solid fa-envelope"></i>
                                <div class="ml-2">example@example.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 lg:mt-0">
                <div class="md:flex text-center justify-center lg:justify-end">
                    <div class="md:hidden text-3xl font-semibold pb-4">
                        Blumilk sp. z o.o.
                        <p class="text-sm font-medium leading-6 text-white">NIP 1234567890 KRS 1234567890
                        </p>
                        <p class=" text-sm leading-6 text-white">
                            <a href="#" class="font-semibold text-white">{{__("footer.form.policy")}}</a>
                        </p>
                    </div>
                    <div class="flex justify-center space-x-6 md:order-2">
                        <a href="https://clutch.co/profile/blumilk-0" class="items-center" target="_blank">
                            <span class="sr-only">Clutch</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 lg:h-7" viewBox="0 0 512 512">
                                <g fill="#ffffff">
                                    <path
                                        d="M255.5 490.4 c-9.2 -0.9 -28.3 -3.5 -32 -4.4 -2.2 -0.5 -7.9 -1.9 -12.6 -3 -63.5 -14.8 -120.8 -57.5 -150.9 -112.5 -1.8 -3.3 -3.6 -6.4 -4 -7 -0.4 -0.5 -2.2 -4.6 -4 -8.9 -1.7 -4.4 -3.6 -8.7 -4 -9.5 -1 -1.9 -5.1 -14.2 -7.4 -22.1 -3 -10.4 -6.4 -29.5 -7.5 -42.3 -1.5 -17 -1.4 -27.2 0.4 -45.2 5 -51.7 26.3 -97.5 61.9 -133 26.7 -26.6 54.8 -44 91.1 -56.3 11.7 -4 14.2 -4.7 27.5 -7.8 33.7 -7.7 75.9 -8.9 110 -3.3 17.3 2.9 44.9 10.9 58.7 17 6.5 2.8 21.9 10.4 26.8 13.2 4.1 2.3 5 2.9 17 10.5 6.2 4 21.8 16.1 30 23.3 1.7 1.5 4.4 3.8 6 5.3 3 2.6 3 2.6 -3 8.1 -11.6 10.9 -29.9 28 -32 30 -4.7 4.5 -31.2 29.3 -34.4 32.2 -3.4 3.1 -3.4 3.1 -15 -6.1 -25 -19.9 -42.7 -28.3 -72.6 -34.3 -10.1 -2.1 -42.5 -2.3 -53.5 -0.4 -31.8 5.5 -57.4 17.7 -76.4 36.5 -9.2 9 -14.4 15.7 -20.2 26.1 -14.3 25.5 -19.4 55.9 -14.4 85.7 4.4 26.4 15 48.1 32.4 66.5 6.7 7.1 20.4 18.2 27.1 21.9 1.1 0.6 4.2 2.3 6.8 3.8 31.3 17.3 78.5 21.5 115.2 10.2 22.1 -6.8 37.1 -15.5 60 -34.8 5.3 -4.4 7 -5.4 8 -4.5 0.6 0.7 6.1 5.7 12 11.2 6 5.5 11.3 10.5 11.9 11 0.6 0.6 4.3 3.9 8.1 7.5 17.6 16 30.5 28 36.7 34 6.8 6.5 6.8 6.5 -4.5 16.2 -21.6 18.5 -33.4 26.7 -54.1 37.2 -26.3 13.4 -51 21.3 -81.6 26.2 -10 1.6 -53.2 2.8 -63.5 1.8z"/>
                                </g>
                                <g fill="#ffffff">
                                    <path
                                        d="M259.6 337 c-20.6 -3.7 -39.8 -15.2 -51.5 -30.6 -9.7 -12.8 -16.1 -30.8 -16.1 -45.1 0.1 -6.8 2.8 -19.5 6 -27.3 7.1 -17.9 24.2 -34.6 43 -42.3 13 -5.3 17.5 -6.1 33.5 -6.1 16 0.1 20.3 0.9 34.4 6.9 17 7.1 31.4 20.7 39.5 37.1 20.8 42.3 -2.9 91.4 -51 105.5 -7.9 2.3 -29.7 3.4 -37.8 1.9z"/>
                                </g>
                            </svg>
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
                    </div>
                </div>
            </div>
        </section>
    </div>
</footer>

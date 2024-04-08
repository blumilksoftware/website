<footer>
    <div class="bg-gradient-to-t from-footer-dark to-footer-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240"><path fill="#ffffff" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,224C640,235,800,213,960,176C1120,139,1280,85,1360,58.7L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        <div class="flex text-white justify-center padding">
            <div class="flex gap-x-16">
                <div class="lg:w-1/2">
                    <h4 class="text-4xl font-bold tracking-tight text-white">{{__("footer.contact.title")}}</h4>
                    <p class="mt-2 text-lg leading-8 text-white">{{__("footer.contact.subtitle")}}</p>
                    <div class="mt-8 flex flex-col gap-16 sm:gap-y-20 lg:flex-row">
                        <form action="#" method="POST" class="lg:flex-auto">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div>
                                    <label for="e-mail"
                                           class="block text-sm font-semibold leading-6 text-white">{{__("footer.form.email")}}</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="e-mail" id="e-mail" autocomplete="given-e-mail"
                                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="topic"
                                           class="block text-sm font-semibold leading-6 text-white">{{__("footer.form.title")}}</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="topic" id="topic" autocomplete="topic"
                                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message"
                                           class="block text-sm font-semibold leading-6 text-white">{{__("footer.form.message")}}</label>
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
                </div>
                <div class="lg:w-1/2 lg:mt-6 lg:flex-none px-8 gap-x-6">
                    <div class="bg-footer-light p-8 rounded-3xl bg-opacity-80 gap-x-6">
                        <figure class="mt-10">
                            <figcaption class="flex gap-x-6">
                                <img src="images/kasia.jpeg" alt="" class="h-24 w-24 flex-none rounded-full">
                                <div>
                                    <div class="text-base font-semibold text-white">Katarzyna Nowak</div>
                                    <div class="text-sm leading-6 text-white">{{__("footer.contactTo.job")}}</div>
                                    <div class="text-sm mt-4 text-white">{{__("footer.contactTo.description")}}</div>
                                    <div class="mt-6">
                                        <div class="flex mt-2">
                                            <span class="sr-only">Email</span>
                                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                 aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            <div class="ml-2">example@example.com</div>
                                        </div>
                                        <div class="flex mt-2">
                                            <span class="sr-only">Phone number</span>
                                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                 aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            <div class="ml-2">+48 500 123 348</div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                            <figcaption class="flex gap-x-6 mt-10">

                            </figcaption>


                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12 padding md:flex md:items-center md:justify-between">
            <div class="mt-8 md:order-1 md:mt-0">
                <p class="text-center text-xs leading-5 text-white font-medium md:font-normal">&copy; 2024 Blumilk, Inc.
                    All rights reserved.</p>
            </div>
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="#" class="text-white">
                    <span class="sr-only">Clutch</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-white">
                    <span class="sr-only">Github</span>
                    <i class="fa-brands fa-square-github fa-xl"></i>
                </a>
                <a href="#" class="text-white">
                    <span class="sr-only">LinkedIn</span>
                    <i class="fa-brands fa-linkedin fa-xl"></i>
                </a>
                <a href="#" class="text-white">
                    <span class="sr-only">GitHub</span>
                    <i class="fa-brands fa-x-twitter fa-xl"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

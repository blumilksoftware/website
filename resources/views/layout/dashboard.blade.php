<!doctype html>
<html class="h-full bg-gray-50" lang="{{ App::currentLocale() }}">
    <head>
        <title>Blumilk</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
        @vite("resources/js/app.ts")
    </head>
    <body class="h-full">
        <div>
            @auth
            <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
            <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
                <!--
                  Off-canvas menu backdrop, show/hide based on off-canvas menu state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="fixed inset-0 bg-gray-900/80"></div>

                <div class="fixed inset-0 flex">
                    <!--
                      Off-canvas menu, show/hide based on off-canvas menu state.

                      Entering: "transition ease-in-out duration-300 transform"
                        From: "-translate-x-full"
                        To: "translate-x-0"
                      Leaving: "transition ease-in-out duration-300 transform"
                        From: "translate-x-0"
                        To: "-translate-x-full"
                    -->
                    <div class="relative mr-16 flex w-full max-w-xs flex-1">
                        <!--
                          Close button, show/hide based on off-canvas menu state.

                          Entering: "ease-in-out duration-300"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "ease-in-out duration-300"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                            <button type="button" class="-m-2.5 p-2.5">
                                <span class="sr-only">Close sidebar</span>
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Sidebar component, swap this element with another sidebar if you like -->
                        <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-2">
                            <div class="flex h-16 shrink-0 items-center">
                                <img class="h-8 w-auto" src="/logo.png" alt="Blumilk">
                            </div>
                            <nav class="flex flex-1 flex-col">
                                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                    <li>
                                        <ul role="list" class="-mx-2 space-y-1">
                                            <li>
                                                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                                <a href="#" class="bg-gray-50 text-indigo-600 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                    Aktualności
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                    Referencje
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                    Case studies
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                    Meetupy
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                    Liczby
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                                    Kontakt
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Static sidebar for desktop -->
            <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex grow flex-col gap-y-5 overflow-hidden border-r border-gray-200 bg-white px-6 relative">
                    <nav class="my-6 flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                        <a href="#" class="bg-gray-50 text-indigo-600 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            Aktualności
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            Referencje
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            Case studies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            Meetupy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            Liczby
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                            Kontakt
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="-mx-6 mt-auto">
                                <form action="{{ route("logout") }}" method="post">
                                    @csrf
                                    <input type="submit" value="Wyloguj" class="cursor-pointer w-full text-left gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">
                                </form>
                            </li>
                        </ul>
                    </nav>
                    <div class="bottom-0 right-0 -mr-24 -mb-24 opacity-25 absolute">
                        <img class="size-64" src="/logo.png" alt="Blumilk">
                    </div>
                </div>
            </div>
            @endauth

            @auth
            <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-white px-4 py-4 shadow-sm sm:px-6 lg:hidden">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div class="flex-1 text-sm font-semibold leading-6 text-gray-900">Dashboard</div>
                <a href="#">
                    <span class="sr-only">Your profile</span>
                    <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </a>
            </div>
            @endauth

            <main class="py-10 @auth lg:pl-72 @endauth">
                <div class="px-4 sm:px-6 lg:px-8">
                    @yield("content")
                </div>
            </main>
        </div>
    </body>
</html>

<!doctype html>
<html class="h-full bg-gray-50" lang="pl">
    <head>
        <title>Blumilk :: panel zarządzania stroną internetową</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="{{ asset("logo.png") }}" type="image/x-icon">
        @vite("resources/js/app.ts")
    </head>
    <body class="h-full">
        <div x-data="{ open: false }">
            @auth
            <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true" x-show="open"
                 x-transition:enter="transition-opacity ease-linear duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-linear duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">
                <div class="fixed inset-0 bg-gray-900/80"></div>

                <div class="fixed inset-0 flex"
                     x-transition:enter="transition ease-in-out duration-300 transform"
                     x-transition:enter-start="-translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300 transform"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="-translate-x-full">
                    <div class="relative mr-16 flex w-full max-w-xs flex-1"
                         x-transition:enter="ease-in-out duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="ease-in-out duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                        <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                            <button type="button" class="-m-2.5 p-2.5" @click="open = !open">
                                <span class="sr-only">Zamknij sidebar</span>
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-2">
                            <div class="flex h-16 shrink-0 items-center">
                                <img class="h-8 w-auto" src="{{ asset("logo.png") }}" alt="Blumilk">
                            </div>
                            <nav class="flex flex-1 flex-col">
                                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                    <li>
                                        <ul role="list" class="-mx-2 space-y-1">
                                            <x-dashboard.menu-item label="Dashboard" :active="true"></x-dashboard.menu-item>
                                            <x-dashboard.menu-item label="Aktualności"></x-dashboard.menu-item>
                                            <x-dashboard.menu-item label="Referencje"></x-dashboard.menu-item>
                                            <x-dashboard.menu-item label="Case studies"></x-dashboard.menu-item>
                                            <x-dashboard.menu-item label="Liczby"></x-dashboard.menu-item>
                                            <x-dashboard.menu-item label="Meetupy"></x-dashboard.menu-item>
                                            <x-dashboard.menu-item label="Kontakt"></x-dashboard.menu-item>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
                <div class="flex grow flex-col gap-y-5 overflow-hidden border-r border-gray-200 bg-white px-6 relative">
                    <nav class="my-6 flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <x-dashboard.menu-item label="Dashboard" :active="true"></x-dashboard.menu-item>
                                    <x-dashboard.menu-item label="Aktualności"></x-dashboard.menu-item>
                                    <x-dashboard.menu-item label="Referencje"></x-dashboard.menu-item>
                                    <x-dashboard.menu-item label="Case studies"></x-dashboard.menu-item>
                                    <x-dashboard.menu-item label="Liczby"></x-dashboard.menu-item>
                                    <x-dashboard.menu-item label="Meetupy"></x-dashboard.menu-item>
                                    <x-dashboard.menu-item label="Kontakt"></x-dashboard.menu-item>
                                </ul>
                            </li>
                            <li class="mt-auto -mx-2 space-y-1">
                                <form action="{{ route("logout") }}" method="post">
                                    @csrf
                                    <input type="submit" value="Wyloguj" class="cursor-pointer w-full text-left text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md px-4 py-2 text-sm leading-6 font-semibold">
                                </form>
                            </li>
                        </ul>
                    </nav>
                    <div class="bottom-0 right-0 -mr-24 -mb-24 opacity-25 absolute">
                        <img class="size-64" src="{{ asset("logo.png") }}" alt="Blumilk">
                    </div>
                </div>
            </div>

            <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-white px-4 py-4 shadow-sm sm:px-6 lg:hidden">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="open = !open">
                    <span class="sr-only">Otwórz sidebar</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div class="flex-1 text-sm font-semibold leading-6 text-gray-900"></div>
                <a href="#">
                    <form action="{{ route("logout") }}" method="post">
                        @csrf
                        <input type="submit" value="Wyloguj" class="cursor-pointer w-full text-left text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md px-4 py-2 text-sm leading-6 font-semibold">
                    </form>
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

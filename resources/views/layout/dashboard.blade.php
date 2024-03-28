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
        <div>
            @auth
                <div x-data="{ open: false }">
                    <x-dashboard.sidebar.mobile></x-dashboard.sidebar.mobile>
                    <x-dashboard.sidebar.desktop></x-dashboard.sidebar.desktop>
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

<!doctype html>
<html lang="{{ App::currentLocale() }}">

<head>
    <title>@yield('title') - Blumilk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="QCB2LFVYnUSGvJgRjtceHW6LDr8p8ksYCWAVDTcYyTM"/>
    @yield('meta')
    <link rel="shortcut icon" href="{{ asset('identification/sygnet.svg') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/f6187d55ef.js" crossorigin="anonymous"></script>
    @vite('resources/js/app.ts')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"/>

    {!! RecaptchaV3::initJs() !!}
</head>

<body class="font-outfit flex flex-col h-screen justify-between">
<div class="relative z-10">
    @include('edulanding.navigation')
    <div> Erasmus </div>
@include('layout.footer')
</div>
</body>

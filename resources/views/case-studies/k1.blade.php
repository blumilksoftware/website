@php

$challenges = [
    [
        "icon" => "shield-check",
        "title" => "Zapewnienie bezpieczeństwa danych",
        "description" => "lorem ipsum tutaj potrzebujemy zdanie uzupełniające",
    ],
    [
        "icon" => "user-check",
        "title" => "Implementacja modelu przywilejów i ról",
        "description" => "zapewniający właściwy rozdział uprawnień",
    ],
    [
        "icon" => "devices",
        "title" => "Kontrola i nadzór maszyn klienckich",
        "description" => "dopuszczonych do funkcjonowania w systemie",
    ],
    [
        "icon" => "app-window",
        "title" => "Uruchamianie dostarczanych aplikacji",
        "description" => "bez konieczności ich instalacji w systemie operacyjnym",
    ],
    [
        "icon" => "photo-scan",
        "title" => "Interfejs użytkownika",
        "description" => "czytelny i intuicyjny",
    ]
];

$functionalities = [
    [
        "icon" => "subtask",
        "title" => "Zarządzanie",
        "description" => "programowaniem znajdujących się na komputerach uczelnianych",
    ],
    [
        "icon" => "heart-rate-monitor",
        "title" => "Monitorowanie",
        "description" => "liczby przypisanych licencji z możliwością blokady ich instalacji ponad ten stan",
    ],
    [
        "icon" => "users",
        "title" => "Zarządzanie użytkownikami",
        "description" => "szeroki zakres możliwości zarządzania",
    ],
    [
        "icon" => "list",
        "title" => "Synchronizacja listy",
        "description" => "sal, komputerów i harmonogramów z zewnątrz",
    ],
    [
        "icon" => "calendar-plus",
        "title" => "Tworzenie harmonogramów",
        "description" => "możliwość ręcznego tworzenia harmonogramu wraz z listą udostępnianych programów,",
    ]
];

@endphp

@extends("layout.case-study")

@section("case-study-content")
    <x-case-studies.title>
        <span class="text-k1 mt-4">System zarządzania</span>
        licencjami i dystrybucji oprogramowania
    </x-case-studies.title>

    <x-case-studies.main-image src="{{ asset('images/case-studies/k1/laptop_1.svg') }}" alt="K1" />

    <x-case-studies.description>
        System do zarządzania oprogramowaniem znajdującym się na komputerach uczelnianych
        na podstawie zdefiniowanych reguł i harmonogramów, z uwzględnieniem licencji oprogramowania.
    </x-case-studies.description>

    <x-case-studies.tiles title="Wyzwania" :tiles="$challenges" />

    <x-case-studies.color-palette description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos" primary="#FF5555" secondary="#000000" surface="#F7F6F9" text="#FFFFFF"/>

    <x-case-studies.typography font="Sora" description="
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos"/>

    <x-case-studies.image src="{{ asset('images/case-studies/k1/laptop_2.svg') }}" alt="K1" />

    <div class="py-40">
        <x-case-studies.title> Sitemap </x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/k1/sitemap.png') }}" alt="sitemap K1" margin="true" />

    </div>

    <x-case-studies.tiles title="Funkcjonalności" :tiles="$functionalities"/>

    <div class="py-10 lg:py-20">
        <x-case-studies.image src="{{ asset('images/case-studies/k1/example.gif') }}" alt="K1 example gif" margin="true" />
    </div>

    <div class="py-20">
        <x-case-studies.title> Schemat architektury systemu </x-case-studies.title>
        <x-case-studies.image src="{{ asset('images/case-studies/k1/architecture.png') }}" alt="sitemap K1" margin=true />
    </div>

    <x-case-studies.image src="{{ asset('images/case-studies/k1/mobiles.svg') }}" alt="K1" />
@endsection

@extends('errors.layout')

@section('title', __('Not Found'))
@section('message')
    <section class="flex flex-col-reverse xl:flex-row md:pt-10 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto md:gap-5">
        <div class="flex basis-2/5 relative flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start">
                <h2 class="font-semibold text-gray-900 leading-relaxed md:leading-snug">{{ __("content.404.title_1") }}
                    <span class="block">{{ __("content.404.title_2") }}</span>
                </h2>
            </div>
            <div class="flex flex-col items-center xl:items-start pb-12 xl:pb-0">
                <p class="text-sm sm:text-md lg:text-lg font-normal text-center xl:text-start leading-loose md:leading-relaxed">
                    <span class="block pb-6 xl:pr-20">{{ __("content.404.subtitle_1") }}</span>
                    <a type="button" href="{{ route("home") }}"
                       class="text-website-normal hover:border-b-2 border-website-normal">
                        {{ __("content.404.subtitle_2") }}
                    </a>
                    {{ __("content.404.subtitle_3") }}
                </p>
            </div>
        </div>
        <div class="flex basis-3/5 relative self-center pb-8 md:pb-24 xl:pb-4 xl:left-16">
            <img src="{{ asset('graphics/404.svg') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
    </section>
@endsection

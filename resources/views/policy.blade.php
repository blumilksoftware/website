@extends('layout.public')

@section('content')
    <div class="relative md:block -z-10">
        <div class="absolute -left-[15%] sm:-left-[8%] md:-left-[2%] xl:-left-[1%]  top-16 md:top-30">
            <x-bubble size="100" />
        </div>
        <div class="absolute  left-[8%] md:left-[4%] xl:left-[5%] top-8 md:top-18 ">
            <x-bubble size="50" />
        </div>
        <div class="absolute right-[7%] top-8">
            <x-bubble size="50" />
        </div>
    </div>
    <section
        class="px-[10%] xl:px-[20%] text-center  pt-[8%] pb-[4%] text-base xl:text-lg grid grid-cols-1 gap-6  xl:text-left leading-loose">

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-black pt-16 xl:pt-0">
            {{ __('content.policy.title_1') }}
            <span class="text-website-normal"> {{ __('content.policy.title_2') }}</span>
        </h2>
        <p class="pt-6 ">{{ __('content.policy.content_1') }}</p>
        <h4 class="font-semibold text-black pt-6">{{ __('content.policy.subtitle_1') }} </h4>
        <p class="">{{ __('content.policy.content_2') }}</p>
        <h4 class="font-semibold text-black pt-6">{{ __('content.policy.subtitle_2') }} </h4>
        <div>
            <p class="">{{ __('content.policy.content_3') }} </p>
            <a class="text-website-normal" href="{{ __('content.policy.link_1.addresss') }} ">
                {{ __('content.policy.link_1.description') }} </a>
            <span>{{ __('content.policy.conjunction') }} </span>
            <a class="text-website-normal" href="{{ __('content.policy.link_2.addresss') }} ">
                {{ __('content.policy.link_2.description') }} </a>
        </div>
        <h4 class="font-semibold text-black pt-6">{{ __('content.policy.subtitle_3') }} </h4>
        <p class="">{{ __('content.policy.content_4') }} <span class="text-website-normal">
                {{ __('content.policy.email') }} </span> </p>

    </section>
@endsection

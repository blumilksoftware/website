@extends("layout.public")

@section("title", __("meta.privacy-policy.title"))
@section("description", __("meta.privacy-policy.description"))

@section("content")
    <section class="relative 2xl:-top-16 flex flex-col-reverse xl:flex-row mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto place-items-end">
        <div class="basis-2/5 pb-16 xl:pt-24 2xl:pt-0">
                <h2 class="font-semibold text-gray-900 text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start pb-6">
                    <span class="inline text-website-normal leading-relaxed"> {{ __("content.policy.title_1") }}</span>
                    <span class="inline">{{ __("content.policy.title_2") }}</span>
                </h2>
                <p class="text-sm md:text-lg font-normal text-center xl:text-start leading-loose md:leading-relaxed">
                    {{ __("content.policy.content_1") }}
                </p>
        </div>
        <div class="flex basis-3/5 relative xl:-bottom-36 xl:-right-20 place-content-center xl:place-content-end w-full">
            <img src="{{ asset('graphics/policy.svg') }}" class="h-auto w-full aspect-auto object-center shrink-0 py-10 xl:py-0"
                 alt="placeholder"/>
        </div>
    </section>
    <section class="mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto text-center text-gray-400 xl:text-lg grid grid-cols-1 gap-6 xl:text-left leading-loose mb-4 xl:mb-16">
        <div class="xl:w-[45%] text-sm">
            <h4 class="font-semibold text-lg text-black pt-12 xl:pt-0 mb-4">{{ __("content.policy.subtitle_1") }}</h4>
            <p class="leading-loose md:leading-relaxed">{{ __("content.policy.content_2") }}</p>
            <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.subtitle_2") }}</h4>
            <div class="leading-loose md:leading-relaxed">
                <p>{{ __("content.policy.content_3") }}</p>
                <a class="text-website-normal" href="{{ __("content.policy.link_1.address") }} " target="_blank">
                    {{ __("content.policy.link_1.description") }}
                </a>
                <span>{{ __("content.policy.conjunction") }}</span>
                <a class="text-website-normal" href="{{ __("content.policy.link_2.address") }} " target="_blank">
                    {{ __("content.policy.link_2.description") }}
                </a>
            </div>
            <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.subtitle_3") }}</h4>
            <p class="leading-loose md:leading-relaxed">{{ __("content.policy.content_4") }}
                <a href="mailto:{{ __("content.policy.email") }}"
                   class="text-website-normal" rel="noopener noreferrer">
                    {{ __("content.policy.email") }}
                </a>
            </p>
        </div>
    </section>
    <x-text-us-section/>
@endsection

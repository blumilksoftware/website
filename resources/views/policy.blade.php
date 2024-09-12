@extends("layout.public")

@section("title", __("meta.privacy-policy.title"))
@section("description", __("meta.privacy-policy.description"))

@section("content")
    <section class="relative 2xl:-top-16 flex flex-col-reverse xl:flex-row mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto place-items-end">
        <div class="basis-2/5 md:pb-16 xl:pt-24 2xl:pt-0">
                <h2 class="font-semibold text-gray-900 text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start pb-6">
                    <span class="inline text-website-normal leading-relaxed"> {{ __("content.policy.title_1") }}</span>
                    <span class="inline">{{ __("content.policy.title_2") }}</span>
                </h2>
                <p class="text-sm md:text-lg font-normal text-center xl:text-start leading-loose md:leading-relaxed">
                    {{ __("content.policy.content_1") }}
                </p>
        </div>
        <div class="flex basis-3/5 relative xl:-bottom-36 xl:-right-20 place-content-center xl:place-content-end w-full">
            <img src="{{ asset('graphics/policy.svg') }}" class="reh-auto w-full aspect-auto object-center shrink-0 py-10 xl:py-0"
                 alt="{{ __('alt.policy') }}"/>
        </div>
    </section>
    <section class="mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto text-gray-400 xl:text-lg grid grid-cols-1 gap-6 text-left leading-loose mb-4 xl:mb-16 md:pt-16">
            <ol class="list-decimal text-sm md:text-lg">
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-0 mb-4">{{ __("content.policy.point_1") }}</h4>
                    <p class="leading-loose md:leading-relaxed">
                        {{ __("content.policy.text_1.text_1") }}
                        <span class="text-black">{{ __("content.policy.text_1.text_2") }}</span>
                        {{ __("content.policy.text_1.text_3") }}
                        <span class="block pt-4">{{ __("content.policy.text_1.text_4") }}</span>
                        <span class="block">{{ __("content.policy.text_1.text_5") }}</span>
                    </p>
                </li>
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.point_2") }}</h4>
                    <div class="leading-loose md:leading-relaxed pl-6">
                        <ol class="list-alpha">
                            <li>{{ __("content.policy.text_2.a") }}</li>
                            <li>{{ __("content.policy.text_2.b") }}</li>
                        </ol>

                    </div>
                </li>
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.point_3") }}</h4>
                    <p>{{ __("content.policy.text_3.text_1") }}
                        <a href="{{ __("content.policy.text_3.link") }}" target="_blank" class="text-website-normal hover:underline">
                            {{ __("content.policy.text_3.text_2") }}
                        </a>
                    </p>
                </li>
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.point_4") }}</h4>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_4.text_1") }}</p>
                    <ul class="list-square pl-12">
                        <li>{{ __("content.policy.text_4.a") }}</li>
                        <li>{{ __("content.policy.text_4.b") }}</li>
                        <li>{{ __("content.policy.text_4.c") }}</li>
                        <li>{{ __("content.policy.text_4.d") }}</li>
                    </ul>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_4.text_2") }}</p>
                </li>
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.point_5") }}</h4>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_5.text_1") }}</p>
                    <ul class="list-square pl-12">
                        <li>{{ __("content.policy.text_5.a") }}</li>
                    </ul>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_5.text_2") }}</p>
                </li>
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.point_6") }}</h4>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_6") }}</p>
                </li>
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.point_7") }}</h4>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_7.text_1") }}</p>
                    <ul class="list-square pl-12">
                        <li>{{ __("content.policy.text_7.a") }}</li>
                        <li>{{ __("content.policy.text_7.b") }}</li>
                        <li>{{ __("content.policy.text_7.c") }}</li>
                        <li>{{ __("content.policy.text_7.d") }}</li>
                    </ul>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_7.text_2") }}
                        <a href="mailto:{{ __("content.policy.text_7.text_3") }}" class="text-website-normal" rel="noopener noreferrer">
                            {{ __("content.policy.text_7.text_3") }}
                        </a>
                    </p>
                </li>
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.point_8") }}</h4>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_8.text_1") }}</p>
                    <ul class="list-square pl-12">
                        <li>{{ __("content.policy.text_8.a") }}</li>
                        <li>{{ __("content.policy.text_8.b") }}</li>
                    </ul>
                    <p class="leading-loose md:leading-relaxed">{{ __("content.policy.text_8.text_2") }}
                        <span class="font-semibold">{{ __("content.policy.text_8.text_3") }}</span>
                        {{ __("content.policy.text_8.text_4") }}
                        <a class="text-website-normal" href="{{ __("content.policy.text_8.text_5") }}" target="_blank">
                            {{ __("content.policy.text_8.text_5") }}
                        </a>
                        {{ __("content.policy.text_8.text_6") }}
                        <a class="text-website-normal" href="{{ __("content.policy.text_8.text_7") }}" target="_blank">
                            {{ __("content.policy.text_8.text_7") }}
                        </a>
                        .
                    </p>
                </li>
                <li>
                    <h4 class="font-semibold text-lg text-black pt-12 xl:pt-6 mb-4">{{ __("content.policy.point_9") }}</h4>
                    <p class="leading-loose md:leading-relaxed">
                        {{ __("content.policy.text_9.text_1") }}
                        <a href="mailto:{{ __("content.policy.text_9.text_2") }}" class="text-website-normal" rel="noopener noreferrer">
                            {{ __("content.policy.text_9.text_2") }}
                        </a>
                    </p>
                </li>
            </ol>
    </section>
    <x-text-us-section/>
@endsection

@extends("layout.public", ["excludeBigBubbles" => true])

@section("title", __("meta.company-data.title"))
@section("description", __("meta.company-data.description"))

@section("content")
    <section class="grid 2xl:grid-cols-5 mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto pt-20 gap-16">
        <div class="2xl:col-span-2 xl:pt-24 2xl:pt-0 justify-between flex flex-col gap-12">
            <div>
                <h2 class="font-semibold text-gray-900 text-3xl md:text-4xl lg:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4">
                    <span class="inline text-blue-normal leading-7.5"> {{ __("content.data.title_1") }}</span>
                    <span class="inline">{{ __("content.data.title_2") }}</span>
                </h2>
                <p class="text-sm md:text-lg font-normal text-center 2xl:text-start leading-7.5">
                    {{ __("content.data.subtitle_1") }}
                </p>
            </div>
            <div class="flex flex-row text-xs sm:text-sm text-blue-dark place-items-center gap-x-5 sm:gap-x-10 justify-center 2xl:justify-start">
                <div class="flex mt-3">
                    <span class="sr-only">{{ __('alt.mail') }}</span>
                    <i class="ti ti-mail text-2xl text-blue-dark"></i>
                    <div class="ml-3 my-auto"><a href="mailto:{{ __('content.data.email') }}">{{ __('content.data.email') }}</a></div>
                </div>
                <div class="flex mt-3">
                    <span class="sr-only">{{ __('alt.phone') }}</span>
                    <i class="ti ti-phone text-2xl text-blue-dark"></i>
                    <div class="ml-3 my-auto"><a href="callto:{{ __('content.data.phone') }}">{{ __('content.data.phone') }}</a></div>
                </div>
            </div>
        </div>
        <div class="2xl:col-span-3 grid lg:grid-cols-2 gap-10 place-self-center place-items-center 2xl:place-content-between 2xl:place-self-stretch h-full w-fit">
            <div class="order-2 2xl:order-none bg-blue-light p-10 rounded-lg h-full my-auto flex flex-col lg:text-center w-[300px] xl:w-auto 2xl:w-full lg:place-self-center 2xl:place-self-center 2xl:place-items-start 2xl:text-start">
                <div class="text-lg font-bold mb-3">{{ __("content.data.official_address.title") }}</div>
                <div class="text-sm text-tile-content space-y-1">
                    <span class="block">{{ __("content.data.company") }}</span>
                    <span class="block">{{ __("content.data.official_address.street") }}</span>
                    <span class="block">{{ __("content.data.postalCode") }}</span>
                    <span class="block">{{ __("content.data.country") }}</span>
                </div>
            </div>
            <div class="order-3 2xl:order-none bg-blue-light py-10 pl-10 pr-8 xl:p-10 rounded-lg h-full my-auto flex flex-col lg:text-center w-[300px] xl:w-auto 2xl:w-full lg:place-self-center 2xl:place-self-center 2xl:place-items-start 2xl:text-start">
                <div class="text-lg font-bold mb-3">{{ __("content.data.office_address.title") }}</div>
                <div class="text-sm text-tile-content space-y-1">
                    <span class="block">{{ __("content.data.company") }}</span>
                    <span class="block">{{ __("content.data.office_address.street") }}</span>
                    <span class="block">{{ __("content.data.postalCode") }}</span>
                    <span class="block">{{ __("content.data.country") }}</span>
                </div>
            </div>
            <div class="order-1 2xl:order-none bg-blue-light p-10 2xl:p-0 lg:bg-transparent rounded-lg lg:col-span-2 w-[300px] lg:w-auto 2xl:w-full">
                <div class="text-lg font-bold mb-3 lg:hidden lg:text-center">{{ __("content.data.info") }}</div>
                <div class="flex flex-col lg:flex-row space-y-0.5 lg:gap-8 place-self-center 2xl:place-items-end place-content-between text-blue-dark">
                    <div class="flex items-center">
                        <div class="text-sm lg:text-lg lg:font-bold lg:pr-4">NIP</div>
                        <div class="lg:hidden">:&nbsp;</div>
                        <div class="2xl:text-sm my-auto 2xl:my-0 2xl:font-medium">{{ __("content.data.NIP") }}</div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-sm lg:text-lg lg:font-bold lg:pr-4">VAT</div>
                        <div class="lg:hidden">:&nbsp;</div>
                        <div class="2xl:text-sm my-auto 2xl:font-medium">{{ __("content.data.VAT") }}</div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-sm lg:text-lg lg:font-bold lg:pr-4">REGON</div>
                        <div class="lg:hidden">:&nbsp;</div>
                        <div class="2xl:text-sm my-auto 2xl:font-medium">{{ __("content.data.REGON") }}</div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-sm lg:text-lg lg:font-bold lg:pr-4">KRS</div>
                        <div class="lg:hidden">:&nbsp;</div>
                        <div class="2xl:text-sm my-auto 2xl:font-medium">{{ __("content.data.KRS") }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-text-us-section/>

@endsection

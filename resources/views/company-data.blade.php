@extends("layout.public")

@section("title", __("meta.privacy-policy.title"))
@section("description", __("meta.privacy-policy.description"))

@section("content")
    <section class="relative grid xl:grid-cols-2 mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="pb-16 xl:pt-24 2xl:pt-0">
            <h2 class="font-semibold text-gray-900 text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start pb-6">
                <span class="inline text-website-normal leading-relaxed"> {{ __("content.data.title_1") }}</span>
                <span class="inline">{{ __("content.data.title_2") }}</span>
            </h2>
            <p class="text-sm md:text-lg font-normal text-center xl:text-start leading-loose md:leading-relaxed">
                {{ __("content.data.subtitle_1") }}
            </p>
            <div class="flex flex-col lg:flex-row text-sm text-gray-400 gap-x-6">
                <div class="flex mt-3 items-start">
                    <span class="sr-only">Phone number</span>
                    <x-icons.phone/>
                    <div class="ml-4">{{ __('content.contact.phone') }}</div>
                </div>
                <div class="flex mt-3 items-start">
                    <span class="sr-only">Email</span>
                    <x-icons.mail/>
                    <div class="ml-4">{{ __('content.contact.email') }}</div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 place-items-center">
            <div class="bg-blue-light p-8 rounded-lg">
                <div class="text-md font-semibold mb-2">{{ __("content.data.official_address.title") }}</div>
                <div class="text-sm text-gray-400 block">
                    <span class="block">{{ __("content.data.company") }}</span>
                    <span class="block">{{ __("content.data.official_address.street") }}</span>
                    <span class="block">{{ __("content.data.postalCode") }}</span>
                    {{ __("content.data.country") }}
                </div>
            </div>
            <div class="bg-blue-light p-8 rounded-lg">
                <div class="text-md font-semibold mb-2">{{ __("content.data.office_address.title") }}</div>
                <div class="text-sm text-gray-400 block">
                    <span class="block">{{ __("content.data.company") }}</span>
                    <span class="block">{{ __("content.data.office_address.street") }}</span>
                    <span class="block">{{ __("content.data.postalCode") }}</span>
                    {{ __("content.data.country") }}
                </div>
            </div>
            <div class="col-span-2 flex gap-x-4">
                <div><span class="text-md font-semibold pr-2">NIP</span>{{ __("content.data.NIP") }}</div>
                <div><span class="text-md font-semibold pr-2">KRS </span>{{ __("content.data.KRS") }}</div>
                <div><span class="text-md font-semibold pr-2">VAT</span>{{ __("content.data.VAT") }}</div>
                <div><span class="text-md font-semibold pr-2">REGON</span>{{ __("content.data.REGON") }}</div>
            </div>
        </div>
    </section>

    <x-text-us-section/>

@endsection

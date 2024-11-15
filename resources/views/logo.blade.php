@extends("layout.public", ["excludeBigBubbles" => true])

@section("title", __("meta.logo.title"))
@section("description", __("meta.logo.description"))

@section("content")
    <section class="py-12 text-center mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="pb-24">

            <h2 class="font-semibold text-gray-900 text-3xl md:text-4xl lg:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4">
                <span class="inline"> {{ __("content.logo.title_1") }}</span>
                <span class="inline text-website-normal leading-7.5">{{ __("content.logo.title_2") }}</span>
            </h2>
        </div>
    <div class="bg-white border border-gray-200 rounded-lg flex p-4 items-center justify-between shadow-sm">
        <div class="flex items-center">
            <div class="relative w-44 h-24 bg-gray-100 flex items-center justify-center rounded-md mr-4">
                <i class="ti ti-paperclip text-website-normal -rotate-45 text-xl"></i>
                <span class="absolute bottom-2 left-2 bg-website-normal text-white text-[10px] font-medium px-2 py-1 ">
        pdf, 2 MB
    </span>
            </div>
            <div>
                <h2 class="text-lg font-semibold text-gray-800">Księga znaku</h2>
                <p class="text-sm text-gray-500">Zbiór zasad wykorzystania logotypu</p>
            </div>
        </div>
            <x-small-primary-button href="#" class="font-semibold text-sm"><span>{{ __("buttons.download") }}</span>
                <span class="sr-only">{{ __('alt.download') }}</span>
                <i class="ti ti-download text-lg text-white ml-2 font-semibold"></i>
            </x-small-primary-button>
    </div>


</section>

@endsection

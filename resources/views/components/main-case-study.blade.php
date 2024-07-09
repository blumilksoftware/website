<div class="relative">
    <div class="h-52 w-52 bg-website-normal absolute -left-52 top-0">
    </div>
    <div class="h-44 w-80 bg-white rounded-2xl absolute shadow-2xl border-gray-100 border-2 -right-72 top-12">
        <div class="divide-y divide-gray-200 overflow-hidden">
            <div class="px-4 py-5 sm:px-6 text-center font-semibold text-md">
                {{ __('content.home.section_4.tile_1.title_1') }}
            </div>
            <div class="px-4 py-5 sm:p-6 text-sm text-gray-500">
                {{ __('content.home.section_4.tile_1.description_1') }}
            </div>
        </div>

    </div>
    <div class="h-12 w-80 bg-website-normal text-white text-sm text-center py-3 font-semibold rounded-3xl absolute -right-56 bottom-56">
        {{ __('content.home.section_4.badge') }}
    </div>
    <div class="h-32 w-96 bg-white rounded-2xl absolute -left-64 shadow-xl border-gray-100 border-2 bottom-4">
        <div class="flex items-center align-middle gap-x-6 size-full mx-8">
            <div class="shadow-lg bg-white p-4 rounded-full">
                <x-icons.window />
            </div>
            <div>
                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ __('content.home.section_4.tile_2.title_1') }}</h3>
                <p class="font-normal leading-6 text-sm text-gray-500">{{ __('content.home.section_4.tile_2.description_1') }}</p>
            </div>
        </div>
    </div>
    <x-ipad-frame img="{{ asset('graphics/vita.png') }}"/>
{{--    <x-icons.add-lens />--}}
</div>

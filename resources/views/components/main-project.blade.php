<div class="relative flex mx-auto max-w-4xl place-content-center">
    <div class="size-40 absolute hidden lg:grid lg:-left-32 2xl:-left-24 top-16 grid-cols-3 grid-rows-3 gap-6 place-items-center">
            <div class="bg-blue-light rounded-lg p-2"> <x-icons.crop-rotate/> </div>
            <div class="bg-blue-light rounded-lg p-2"> <x-icons.add-lens/> </div>
            <div class="bg-blue-light rounded-lg p-2"> <x-icons.frame/> </div>
            <div class="bg-blue-light rounded-lg p-2"> <x-icons.border-left/> </div>
            <div class="bg-blue-light rounded-lg p-2"> <x-icons.ruler/> </div>
            <div class="bg-blue-light rounded-lg p-2"> <x-icons.droplet/> </div>
            <div class="bg-blue-light rounded-lg p-2"> <x-icons.color-picker/> </div>
            <div class="bg-blue-light rounded-lg p-2"> <x-icons.collage-frame/> </div>
            <div class="bg-website-normal rounded-lg p-2 scale-110 relative text-white left-1 top-1"> <x-icons.color-filter/> </div>
    </div>
    <div class="w-80 bg-white rounded-2xl absolute shadow-lg border-gray-100 border-2 hidden lg:block lg:-right-36 2xl:-right-52 top-20">
        <div class="divide-y divide-gray-200 overflow-hidden">
            <div class="py-3 px-6 text-center font-semibold text-md">
                {{ __('content.home.section_5.tile_2.title_1') }}
            </div>
            <div class="p-5 text-sm text-center text-gray-500">
                {{ __('content.home.section_5.tile_2.description_1') }}
            </div>
        </div>
    </div>
    <div class="absolute hidden lg:block lg:-right-46 2xl:-right-56 top-75 space-y-2">
        <div class="w-96 bg-gray-900 rounded-full shadow-lg">
            <div class="overflow-hidden text-white">
                <div class="py-2 px-4 text-center text-sm">
                    {{ __('content.home.section_5.tile_3.title_1') }}
                    <span class="font-semibold">{{ __('content.home.section_5.tile_3.title_2') }}</span>
                </div>
            </div>
        </div>
        <div class="w-96 bg-gray-900 rounded-full shadow-lg">
            <div class="overflow-hidden text-white">
                <div class="py-2 px-4 text-center text-sm">
                    {{ __('content.home.section_5.tile_4.title_1') }}
                    <span class="font-semibold">{{ __('content.home.section_5.tile_4.title_2') }}</span>
                </div>
            </div>
        </div>
        <div class="w-96 bg-gray-900 rounded-full shadow-lg">
            <div class="overflow-hidden text-white">
                <div class="py-2 px-4 text-center text-sm">
                    {{ __('content.home.section_5.tile_5.title_1') }}
                    <span class="font-semibold">{{ __('content.home.section_5.tile_5.title_2') }}</span>
                </div>
            </div>
        </div>
        <div class="w-96 bg-gray-900 rounded-full shadow-lg">
            <div class="overflow-hidden text-white">
                <div class="py-2 px-4 text-center text-sm">
                    {{ __('content.home.section_5.tile_6.title_1') }}
                    <span class="font-semibold">{{ __('content.home.section_5.tile_6.title_2') }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="h-36 lg:flex items-center bg-white rounded-2xl absolute hidden lg:-left-36 xl:-left-48 2xl:-left-64 shadow-lg border-gray-100 border-2 bottom-8 w-[26rem]">
        <div class="flex items-center align-middle gap-x-6 ml-6 mr-6">
            <div class="shadow-md bg-white p-4 rounded-full size-16 shrink-0">
                <x-icons.window/>
            </div>
            <div>
                <div class="text-base font-semibold leading-7 tracking-tight text-gray-900">
                    {{ __('content.home.section_5.tile_1.title_1') }}
                </div>
                <div class="mt-1 text-sm text-gray-500">
                    {{ __('content.home.section_5.tile_1.description_1') }}
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('graphics/main_project/with_frame.webp') }}" class="h-[550px] w-[750px] max-w-4xl hidden md:block" alt="{{ __('alt.home_project') }}"/>
    <img src="{{ asset('graphics/main_project/no_frame.webp') }}" class="h-auto w-full max-w-4xl md:hidden block mb-8" alt="{{ __('alt.home_project') }}"/>
    <img src="{{ asset('graphics/shadow_2.svg') }}" alt="" class="hidden md:block absolute -z-10"/>
</div>

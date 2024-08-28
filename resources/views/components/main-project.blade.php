<div class="relative flex mx-auto max-w-4xl place-content-center">
    <div class="size-40 absolute hidden lg:grid lg:-left-32 2xl:-left-44 top-0 grid-cols-3 grid-rows-3 gap-6 place-items-center">
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
    <div class="w-80 bg-white rounded-2xl absolute shadow-xl border-gray-100 border-2 hidden lg:block lg:-right-36 2xl:-right-64 top-32">
        <div class="divide-y divide-gray-200 overflow-hidden">
            <div class="py-3 px-6 text-center font-semibold text-md">
                {{ __('content.home.section_4.tile_1.title_1') }}
            </div>
            <div class="p-5 text-sm text-center text-gray-500">
                {{ __('content.home.section_4.tile_1.description_1') }}
            </div>
        </div>
    </div>
    <div class="h-auto w-auto bg-blue-normalNeon text-white text-sm text-center place-self-center py-3 px-8 font-normal rounded-3xl absolute hidden lg:flex lg:-right-32 xl:-right-44 2xl:-right-52 top-96">
        {{ __('content.home.section_4.badge') }}
    </div>
    <div class="h-36 w-[430px] bg-white rounded-2xl absolute hidden lg:block lg:-left-36 xl:-left-48 2xl:-left-64 shadow-xl border-gray-100 border-2 bottom-8">
        <div class="flex items-center align-middle gap-x-6 size-full mx-8">
            <div class="shadow-lg bg-white p-4 rounded-full size-16">
                <x-icons.window/>
            </div>
            <div>
                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ __('content.home.section_4.tile_2.title_1') }}</h3>
                <p class="font-normal leading-6 w-80 text-sm text-gray-500">{{ __('content.home.section_4.tile_2.description_1') }}</p>
            </div>
        </div>
    </div>
    <img src="{{ asset('graphics/main_project/with_frame.svg') }}" class="h-auto w-auto max-w-4xl hidden md:block" alt="placeholder"/>
    <img src="{{ asset('graphics/main_project/no_frame.svg') }}" class="h-auto w-full max-w-4xl md:hidden block mb-8" alt="placeholder"/>
</div>

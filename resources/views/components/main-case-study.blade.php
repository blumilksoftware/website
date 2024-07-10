<div class="relative">
    <div class="size-40 absolute -left-44 top-0 grid grid-cols-3 grid-rows-3 gap-6 place-items-center">
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
    <div class="h-44 w-80 bg-white rounded-2xl absolute shadow-xl border-gray-100 border-2 -right-72 top-32">
        <div class="divide-y divide-gray-200 overflow-hidden">
            <div class="px-4 py-5 sm:px-6 text-center font-semibold text-md">
                {{ __('content.home.section_4.tile_1.title_1') }}
            </div>
            <div class="px-4 py-5 sm:p-6 text-sm text-gray-500">
                {{ __('content.home.section_4.tile_1.description_1') }}
            </div>
        </div>
    </div>
    <div class="flex h-12 w-auto bg-blue-normalNeon text-white text-sm text-center py-3 font-semibold rounded-3xl absolute -right-52 top-96 px-4">
        {{ __('content.home.section_4.badge') }}
    </div>
    <div class="h-36 w-[430px] bg-white rounded-2xl absolute -left-64 shadow-xl border-gray-100 border-2 bottom-8">
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
    <x-ipad-frame img="{{ asset('graphics/vita.png') }}"/>
</div>

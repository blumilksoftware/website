<section class="relative overflow-hidden py-12 lg:py-48 z-10">
    <div
        class="relative overflow-hidden px-4 sm:px-6 lg:px-12 mx-auto py-16 lg:py-36 bg-[#252528] flex items-center justify-center max-w-7xl rounded-2xl">
        <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
             class="absolute z-0 hidden xl:block -top-27 left-27" alt=""/>
        <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
             class="absolute z-0 hidden xl:block top-70 right-27" alt=""/>
        <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
             class="absolute z-0 hidden xl:block -bottom-30 -left-20 -translate-x-1/2" alt=""/>
        <img src="{{ asset('images/edulanding/plus-icons.svg') }}"
             class="absolute z-0 hidden xl:block -top-30 -right-27" alt=""/>

        <div class="flex flex-col items-center justify-center gap-y-4 relative z-10">
            <div class="text-3xl md:text-4xl text-center">
                <h2 class="font-medium text-white leading-7 md:leading-tight">
                    <span class="inline">{{ $title }}</span>
                </h2>
            </div>
            <p class="leading-7 text-md text-white max-w-3xl text-center">
                {{ $description }}
            </p>
        </div>
    </div>
</section>

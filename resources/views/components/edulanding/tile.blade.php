@props([ 'title', 'description' => null ])

<div class="color-gray-extra-light rounded-xl shadow-md px-4 md:px-10 lg:py-8">
    <div class="{{ $attributes->get('class') }} flex flex-col leading-7 lg:text-xl py-6 w-fit h-full gap-2">
        <div class="flex items-center gap-4">
            <div class="mr-2">
                {{ $slot }}
            </div>
            <span class="font-semibold text-sm sm:text-md lg:text-lg text-tile-title">
                {!! $title !!}
            </span>
        </div>
        <div class="text-left mt-2">
            <div @class([
                "font-normal text-tile-content text-xs sm:text-sm leading-relaxed" => isset( $description ),
                "hidden" => !isset( $description )])>
                {!! $description !!}
            </div>
        </div>

    </div>
</div>

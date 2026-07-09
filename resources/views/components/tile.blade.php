@props(['title', 'description' => null])

<div {{ $attributes->class(['bg-tile-background rounded-xl px-4 md:px-8 h-full']) }}>
    <div class="flex place-items-start flex-row leading-7 lg:text-lg py-6 w-full h-full">
        <div class="bg-white shadow-md rounded-full mr-5 p-4 size-16 aspect-square shrink-0">
            {{ $slot }}
        </div>

        <div class="2xl:mt-2 text-left">
            <span class="font-semibold text-sm sm:text-md lg:text-lg block pb-2 text-tile-title">
                {!! $title !!}
            </span>
            <div @class([
                "font-normal text-tile-content text-xs sm:text-sm leading-5" => isset($description),
                "hidden" => !isset($description),
            ])>
                {!! $description !!}
            </div>
        </div>
    </div>
</div>

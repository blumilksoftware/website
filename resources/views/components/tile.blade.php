@props([
    'title',
    'description' => null,
])

<div class="bg-tile-background rounded-xl px-4 md:px-8">
    <div class="{{ $attributes->get('class') }} flex items-center lg:items-start gap-5 leading-7 lg:text-lg py-6 w-full h-full">
        <div class="bg-white shadow-md rounded-full p-4 size-16 aspect-square shrink-0">
            {{ $slot }}
        </div>

        <div class="flex-1 min-w-0 text-left">
            <span class="font-semibold text-sm sm:text-base lg:text-lg block pb-2 text-tile-title leading-7">
                {!! $title !!}
            </span>

            @if($description)
                <div class="font-normal text-tile-content text-xs sm:text-sm leading-5">
                    {!! $description !!}
                </div>
            @endif
        </div>
    </div>
</div>

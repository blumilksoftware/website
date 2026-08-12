@props(['title', 'description' => null])

<div class="bg-tile-background rounded-xl px-4 md:px-8 py-6 shadow-sm w-full">
    <div class="flex flex-col items-center text-center gap-4">
        @if($slot)
            <div class="bg-white shadow-md rounded-full p-4 size-16 aspect-square flex items-center justify-center">
                {{ $slot }}
            </div>
        @endif
        <div>
            <span class="font-semibold text-sm sm:text-md lg:text-lg block pb-2 text-tile-title">
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

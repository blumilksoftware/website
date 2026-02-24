@props(['title', 'description'])

<div class="bg-tile-background rounded-xl px-4 md:px-8 py-6 shadow-sm">
    <div class="text-left">
        <span class="font-semibold text-md sm:text-lg lg:text-2xl block pb-2 text-tile-title">
            {!! $title !!}
        </span>
        @if($description)
            <div class="font-normal text-tile-content text-xs sm:text-sm leading-5">
                {!! $description !!}
            </div>
        @endif
    </div>
</div>

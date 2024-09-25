@props([ 'title', 'description' => null ])

<div class="bg-tile-background rounded-xl md:px-6">
    <div class="{{$attributes->get('class')}} flex place-items-start flex-row leading-7.5 lg:text-lg py-6 w-fit h-full">
        <div class="bg-white shadow-md rounded-full mx-5 p-4 size-16 aspect-square">
            {{ $slot }}
        </div>

        <div class="2xl:mt-2 text-left">
            <span class="font-semibold text-sm sm:text-md lg:text-lg block pb-2 text-tile-title">
                {!! $title !!}
            </span>
            <div @class([
                "font-normal text-tile-content text-xs sm:text-sm leading-7.5" => isset( $description ),
                "hidden" => !isset( $description )])>
            {!! $description !!}
        </div>
        </div>
    </div>
</div>

@props([ 'title', 'description' => null ])

<div class="bg-gray-extraLight rounded-xl md:px-6">
    <div class="{{$attributes->get('class')}} flex flex-row leading-relaxed lg:text-lg py-8 w-fit h-full">
        <div class="bg-white shadow-xl rounded-full mx-5 p-4 size-16 aspect-square">
            {{ $slot }}
        </div>
        <div class="2xl:mt-2 text-left">
            <span class="font-semibold text-sm sm:text-md lg:text-lg block pb-2 pr-4">
                {!! $title !!}
            </span>
            <span @class([
                "font-normal text-gray-400 text-xs sm:text-sm leading-relaxed pr-3" => isset( $description ),
                "hidden" => !isset( $description )])>
            {!! $description !!}
        </span>
        </div>
    </div>
</div>

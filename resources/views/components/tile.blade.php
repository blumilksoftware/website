@props([ 'title', 'description' => null ])

<div class="bg-gray-extraLight rounded-xl">
    <div class="{{$attributes->get('class')}} flex flex-col place-items-center 2xl:flex-row leading-relaxed lg:text-lg py-6 px-12 gap-4 w-fit h-full">
        <div class="bg-white shadow-xl rounded-full p-4 size-16 aspect-square">
            {{ $slot }}
        </div>

        <div class="2xl:mt-2 text-center 2xl:text-left">
            <span class="font-semibold text-md block pb-2">
                {!! $title !!}
            </span>
            <span @class([
                "font-normal text-gray-400 text-sm leading-relaxed mr-6" => isset( $description ),
                "hidden" => !isset( $description )])>
            {!! $description !!}
        </span>
        </div>
    </div>
</div>

<div class="{{$attributes->get('class')}}">
    <div class="flex flex-col place-items-center 2xl:place-items-start 2xl:flex-row bg-gray-extraLight rounded-xl leading-relaxed lg:text-lg p-6 gap-4 w-full h-full shrink">
        <div class="bg-white shadow-xl rounded-full p-4 size-14 aspect-square">
            {{ $slot }}
        </div>

        <div class="2xl:mt-2 text-center 2xl:text-left">
            <span class="font-semibold text-md block pb-2">
                {!! $title !!}
            </span>
            <span class="font-normal text-gray-400 text-sm leading-3">
                {{ $description }}
            </span>
        </div>
    </div>

</div>

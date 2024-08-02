<div class="{{$attributes->get('class')}}">
    <div class="flex flex-col place-items-center 2xl:place-items-start 2xl:flex-row bg-gray-extraLight rounded-xl lg:text-lg p-6 gap-6 w-full h-full shrink">
        <div class="bg-white shadow-xl rounded-full p-4 size-16 aspect-square mt-4">
            {{ $slot }}
        </div>

        <div class="2xl:mt-2 text-center 2xl:text-left">
            <span class="font-semibold text-md block pb-2">
                {!! $title !!}
            </span>
            <div class="font-normal leading-relaxed text-gray-400 text-sm mr-6">
                {{ $description }}
            </div>
        </div>
    </div>

</div>

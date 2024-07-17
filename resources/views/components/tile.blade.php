<div class="flex flex-col items-center 2xl:place-items-start 2xl:flex-row bg-blue-light rounded-xl leading-relaxed lg:text-lg p-6 gap-4 w-full h-full shrink">
    <img src="{{ $image }}" class="size-20 2xl:m-4"
             alt="{{ $alt }}">
    <div class="2xl:mt-2 text-center 2xl:text-left">
        <span class="font-semibold text-md block pb-2">
            {!! $title !!}
        </span>
        <span class="font-normal text-gray-400 text-sm">
            {{ $description }}
        </span>
    </div>

</div>

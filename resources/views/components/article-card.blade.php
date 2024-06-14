<article {{ $attributes->merge(['class' => 'relative isolate flex flex-col justify-end overflow-hidden pb-8 aspect-square']) }}>
    <img src="{{ $imageSrc }}" alt="" class="absolute inset-0 -z-10 size-full object-cover">
    <div class="flex absolute flex-wrap items-center overflow-hidden text-md text-white font-semibold top-0 right-8 w-14">
        <time datetime="{{ $date }}" class="bg-website-normal pt-6 py-2 text-center">{{ $dateFormatted }}</time>
    </div>
    <div class="flex flex-wrap items-center overflow-hidden text-sm text-black font-semibold">
        <span class="bg-white p-2">{{ $firstText }}</span>
    </div>
    <h3 class="mt-3 text-md text-sm font-semibold text-black">
        <a href="{{ route($articleRoute) }}" class="bg-white p-2">
            <span class="absolute inset-0"></span>
            {{ $secondText }}
        </a>
    </h3>
</article>

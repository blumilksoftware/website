<article class="relative isolate flex flex-col justify-end overflow-hidden pb-8 aspect-square">
    <img src="{{ $imageSrc }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
    <div class="flex absolute flex-wrap items-center overflow-hidden text-md text-white font-semibold top-0 right-8 w-14 delay-[300ms] duration-[600ms] taos:translate-y-[-100%] taos:invisible" data-taos-offset="500">
        <time datetime="{{ $date }}" class="bg-website-normal pt-6 py-2 text-center">{{ $dateFormatted }}</time>
    </div>
    <div class="flex flex-wrap items-center overflow-hidden text-md text-black font-semibold delay-[300ms] duration-[600ms] taos:translate-x-[-100%] taos:invisible" data-taos-offset="200">
        <span class="bg-white p-2">{{ $firstText }}</span>
    </div>
    <h3 class="mt-3 text-md subtitle font-semibold text-black delay-[350ms] duration-[600ms] taos:translate-x-[-100%] taos:invisible" data-taos-offset="200">
        <a href="{{ route($articleRoute) }}" class="bg-white p-2">
            <span class="absolute inset-0"></span>
            {{ $secondText }}
        </a>
    </h3>
</article>

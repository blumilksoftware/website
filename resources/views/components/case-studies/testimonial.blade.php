<figure class="mx-[10%] lg:mx-[15%] 2xl:mx-auto mt-36 mb-20 rounded-3xl bg-white shadow-2xl ring-1 ring-gray-900/5 max-w-[969px]">
    <blockquote class="px-20 py-6 md:text-xl md:font-semibold leading-7 md:tracking-tight text-gray-900 lg:py-28 sm:text-md md:leading-8">
        <p>{{ "“".$description."”" }}</p>
    </blockquote>
    <figcaption class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-16 py-8 sm:flex-nowrap">
        <img class="size-16 flex-none rounded-full bg-gray-50"
             src="{{ asset($photo) }}"
             alt="">
        <div class="flex-auto text-md md:text-xl">
            <a href="{{ $link }}" target="_blank">
                <div class="font-semibold text-left">{{ $name }}</div>
                <div class="text-gray-600 text-left">{{ $company }}</div>
            </a>
        </div>

    </figcaption>
</figure>

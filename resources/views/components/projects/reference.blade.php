<figure class="mx-[10%] lg:mx-[15%] 2xl:mx-auto mt-16 md:mt-36 md:mb-20 rounded-3xl bg-white shadow-2xl ring-1 ring-gray-900/5 max-w-[969px]">
    <blockquote class="px-8 md:px-20 py-6 md:text-xl md:font-semibold leading-7 md:tracking-tight text-gray-900 lg:py-28 sm:text-md md:leading-8 text-center md:text-left">
        <p>{{ "“".$description."”" }}</p>
    </blockquote>
    <figcaption class="flex items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-8 md:px-16 py-8 sm:flex-nowrap">
        <img class="size-16 flex-none rounded-full bg-gray-50"
             src="{{ asset($photo) }}"
             alt="{{ __('alt.reference') . " " . $name }}">
        <div class="flex text-sm md:text-md md:text-xl">
            <a href="{{ $link }}" target="_blank">
                <div class="font-semibold text-left break-words">{{ $name }}</div>
                <div class="text-gray-600 text-left">{{ $company }}</div>
            </a>
        </div>
    </figcaption>
</figure>

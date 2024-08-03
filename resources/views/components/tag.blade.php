<a href="{{ $href }}"
    {{ $attributes->merge(['class' => "inline-flex items-center border-b-2 border-gray-200 px-1 pt-1 text-sm font-medium hover:border-website-normal hover:text-black"]) }}>
    {{ $slot }}
    @isset($articlesCount)<span class="text-xs py-1 px-2 ml-2 bg-gray-light text-black rounded-full">{{ $articlesCount }}</span>@endisset
</a>

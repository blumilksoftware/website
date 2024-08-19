<a href="{{ $href }}"
    {{ $attributes->merge(['class' => "w-full sm:w-auto flex place-content-center sm:border-b-[3px] border-gray-200 px-1 pt-1 text-sm font-medium hover:border-website-normal hover:text-black"]) }}>
    {{ $slot }}
    @if( isset($articlesCount) && $articlesCount != 0 )
        <span class="text-xs py-1 px-2 ml-2 bg-gray-light text-black rounded-full">{{ $articlesCount }}</span>
    @endif
</a>

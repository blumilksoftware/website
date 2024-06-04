<button type="button"
        {{ $attributes->merge(['class' => 'm-2 p-3 text-sm sm:text-lg text-website-normal shadow-sm ring-1 ring-inset ring-website-normal items-center flex transform transition hover:scale-110 hover:rounded-sm']) }}
        @isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{ $slot }}
</button>

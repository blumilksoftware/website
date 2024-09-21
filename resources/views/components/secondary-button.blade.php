<a type="button"
        {{ $attributes->merge(['class' => 'm-2 py-2 text-base h-12 sm:text-lg text-website-normal font-normal shadow-sm rounded-lg ring-1 ring-inset ring-website-normal text-center flex transform transition hover:scale-110']) }}
        @isset($href) href="{{ $href }}" @endisset>
    {{ $slot }}
</a>

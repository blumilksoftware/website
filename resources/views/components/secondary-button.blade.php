<a type="button"
        {{ $attributes->merge(['class' => 'm-2 p-3 text-sm sm:text-lg text-website-normal font-semibold shadow-sm rounded-lg ring-2 ring-inset ring-website-normal items-center text-center flex transform transition hover:scale-110']) }}
        @isset($href) href="{{ $href }}" @endisset>
    {{ $slot }}
</a>

<button type="button"
        class="m-1 px-3.5 py-3 text-md text-website-normal shadow-sm ring-1 ring-inset ring-website-normal items-center flex transform transition hover:scale-110 hover:rounded-sm"
        @isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{ $slot }}
</button>

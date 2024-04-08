<button type="button"
        class="m-1 px-3.5 py-2.5 text-sm text-website-button shadow-sm ring-1 ring-inset ring-website-normal flex transform transition hover:scale-110 hover:rounded-sm"
        @isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{ $slot }}
</button>

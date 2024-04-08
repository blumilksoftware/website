<button type="button"
        class="m-1 bg-website-button px-3.5 py-2.5 text-sm h-min font-normal text-white shadow-sm transform transition hover:scale-110 hover:rounded-sm flex items-center space-x-2"
        @isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{ $slot }}
</button>

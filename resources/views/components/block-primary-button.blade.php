<button
    type="button"
    class="block w-full shadow-xs text-xl transform transition hover:scale-110 hover:rounded-xs bg-website-normal px-6 py-3 font-normal leading-7.5 text-white"
    @isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{$slot}}
</button>

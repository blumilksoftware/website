<button
    type="button"
    class="block w-full shadow-sm text-xl transform transition hover:scale-110 hover:rounded-sm bg-website-normal px-6 py-3 font-normal leading-normal text-white"
    @isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{$slot}}
</button>

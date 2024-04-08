<button
    type="button"
    class="mb-2 block w-full shadow-sm text-sm transform transition hover:scale-110 hover:rounded-sm bg-website-button px-6 pb-2 pt-2.5 font-normal leading-normal text-white"
    @isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{$slot}}
</button>

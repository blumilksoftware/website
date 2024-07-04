<button
    type="button"
    class="block w-full shadow-sm text-sm 3xl:text-lg transform transition hover:scale-110 rounded-lg bg-website-normal px-6 3xl:px-5 py-4 font-normal leading-normal text-white"
    @isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{$slot}}
</button>

<button type="button"
{{ $attributes->merge(['class' => 'bg-website-normal p-3 text-sm sm:text-lg h-min w-auto font-normal text-white shadow-sm transform transition hover:scale-110 hover:rounded-sm flex items-center']) }}
@isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{ $slot }}
</button>
{{--<div class="text-sm"--}}

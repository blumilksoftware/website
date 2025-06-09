<a type="button"
{{ $attributes->merge([
'class' => "block shadow-xs text-base h-12 3xl:text-lg text-center transform transition hover:scale-110 rounded-lg bg-blue-normal px-6 3xl:px-5 py-3 font-normal leading-7 text-white flex items-center justify-center" ]) }}
@isset($href) href="{{ $href }}" @endisset>
    {{$slot}}
</a>

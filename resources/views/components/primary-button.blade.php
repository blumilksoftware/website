<a type="button"
   {{ $attributes->merge(['class' => 'm-2 p-3 text-base sm:text-lg rounded-lg min-h-12 w-fit text-center font-normal text-white shadow-xs transform transition hover:scale-110 flex justify-center items-center space-x-2']) }}
   @isset($href) href="{{ $href }}" @endisset @isset($target) target="{{ $target }}" @endisset>
    {{ $slot }}
</a>

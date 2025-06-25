<a type="button"
   {{ $attributes->merge(['class' => 'py-4 px-10 text-base sm:text-lg rounded-lg w-auto text-center font-normal text-white shadow-xs transform transition hover:scale-110 flex justify-center items-center space-x-2 bg-edu-normal hover:bg-edu-dark']) }}
   @isset($href) href="{{ $href }}" @endisset @isset($target) target="{{ $target }}" @endisset>
    {{ $slot }}
</a>

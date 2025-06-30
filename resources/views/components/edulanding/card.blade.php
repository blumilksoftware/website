@props(['title', 'class' => ''])

<div class="rounded-2xl py-8 px-10 text-center bg-white shadow-sm flex flex-col justify-center items-center h-full">
    <div {{ $attributes->merge([
        'class' => "size-16 mx-auto mb-6 flex items-center justify-center bg-edu-light rounded-xl $class"
    ]) }}>
        {{ $slot }}
    </div>
    <h3 class="text-edu-gray-dark text-xl lg:text-2xl leading-snug max-w-lg">
        {!! $title !!}
    </h3>
</div>

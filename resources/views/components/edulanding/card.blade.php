@props(['title', 'class' => ''])

<div {{ $attributes->merge([
    'class' => "rounded-2xl py-8 px-10 text-center bg-white shadow-sm flex flex-col justify-center h-full $class"
]) }}>
    <div class="size-16 mx-auto mb-6 flex items-center justify-center bg-edu-light rounded-xl">
        {{ $slot }}
    </div>
    <h3 class="text-edu-gray-dark text-xl lg:text-2xl leading-snug">
        {!! $title !!}
    </h3>
</div>

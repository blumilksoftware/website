@props([
    'title',
    'iconBg' => 'bg-edu-light',
    'iconColor' => 'text-edu-dark',
])

<div class="rounded-2xl py-8 px-10 text-center bg-white shadow-xl flex flex-col justify-center items-center h-full">
    <div class="size-16 mx-auto mb-6 flex items-center justify-center rounded-xl {{ $iconBg }}">
        <div class="{{ $iconColor }}">
            {{ $slot }}
        </div>
    </div>
    <h3 class="text-edu-gray-dark text-xl lg:text-2xl leading-snug max-w-lg font-medium">
        {!! $title !!}
    </h3>
</div>

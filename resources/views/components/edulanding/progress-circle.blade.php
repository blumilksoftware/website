@props([
    'value' => 75,
    'color' => 'text-edu-normal',
    'size' => 'size-16',
])

@php
    $offset = 100 - $value;
@endphp

<div class="relative {{ $size }}">
    <svg class="w-full h-full -rotate-90 origin-center" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
        <circle cx="18" cy="18" r="16" fill="none"
                class="stroke-current text-gray-extra-dark"
                stroke-width="4" />
        <circle cx="18" cy="18" r="16" fill="none"
                class="stroke-current {{ $color }}"
                stroke-width="4"
                stroke-dasharray="100"
                stroke-dashoffset="{{ $offset }}"
                stroke-linecap="round" />
    </svg>

    <div class="absolute inset-0 flex items-center justify-center">
        <span class="text-sm font-bold text-tile-title {{ $color }}">{{ $value }}%</span>
    </div>
</div>

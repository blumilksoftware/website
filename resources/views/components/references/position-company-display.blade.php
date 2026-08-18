@props(['reference'])

@php
    $parts = array_filter([
        $reference->position,
        $reference->company,
    ], fn ($value) => filled($value));
@endphp

@if (count($parts))
    {{ implode(' ' . __('content.at') . ' ', $parts) }}
@endif

@props(['size' => '40'])

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {{ $size }} {{ $size }}" width="{{ $size }}" height="{{ $size }}" class="bubble-motion">
    <circle cx="{{ $size/2 }}" cy="{{ $size/2 }}" r="{{ $size/2 }}" fill="#F7F8FB" />
</svg>

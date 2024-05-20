@props(['class' => ''])

<span class="rounded-full bg-blue-100 w-min px-4 py-1 text-xs font-medium uppercase text-website-normal {{ $class }}">
    {{ $slot }}
</span>

@props(['class' => ''])

<div class="my-6">
<span class="rounded-full bg-website-extra_light w-min px-4 py-1 text-xs font-medium uppercase text-website-normal {{ $class }}">
    {{ $slot }}
</span>
</div>

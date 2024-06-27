<a href="#" class="transform transition hover:scale-110 w-fit">
        <span  {{ $attributes->merge(['class' => "rounded-full bg-bubble w-auto uppercase text-black font-semibold text-xs"]) }}>
            {{ $slot }}
        </span>
</a>

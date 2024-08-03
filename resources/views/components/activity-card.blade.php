@props(['activity', 'class' => ''])

<article {{ $attributes->class([$class, 'relative isolate flex flex-col overflow-hidden gap-3']) }}>
    <div class="w-auto h-[340px]">
        <img src="{{ asset("storage/".$activity['photo']) }}" alt="" class="size-full object-cover">
    </div>
    <div class="text-gray-400 text-sm pt-3">
        <time datetime="{{ $activity['published_at'] }}">
            {{ $activity['published_at'] }}
        </time>
    </div>
    <div class="font-semibold text-md">
        <h3>
            <a href="{{ route('activities.entry', $activity['slug']) }}">
                <span class="absolute inset-0"></span>
                {{ $activity['title'] }}
            </a>
        </h3>
    </div>
    <div class="line-clamp-2 text-gray-400 text-sm">
        {{ $activity['subtitle'] }}
    </div>
</article>

@props(['activity', 'class' => '', 'isFirst' => false])

<article {{ $attributes->class([$class, 'relative isolate flex flex-col overflow-hidden gap-3']) }}>
    <div
         @class([
            'w-auto',
            'h-[591px]' => $isFirst,
            'h-[340px]' => !$isFirst,
         ])>
        <img src="{{ asset("storage/".$activity['photo']) }}" alt="" class="size-full object-cover">
    </div>
    <div
         @class([
             'relative -top-28 pt-6 px-12 flex flex-col w-auto mx-32 gap-6 bg-white'=>$isFirst,
         ])
    >
        <div class="text-gray-400 text-sm pt-3">
            <time datetime="{{ $activity['published_at'] }}">
                {{ $activity['published_at'] }}
            </time>
        </div>
        <div class="font-semibold text-md">
            <h3
            @class(['text-2xl' => $isFirst])>
                <a href="{{ route('activities.entry', $activity['slug']) }}">
                    <span class="absolute inset-0"></span>
                    {{ $activity['title'] }}
                </a>
            </h3>
        </div>
        <div class="line-clamp-2 text-gray-400 text-sm">
            {{ $activity['subtitle'] }}
        </div>
    </div>

</article>

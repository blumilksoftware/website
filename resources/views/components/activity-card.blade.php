@props(['activity', 'class' => '', 'isFirst' => false])

<article {{ $attributes->class([$class, 'relative isolate flex flex-col overflow-hidden gap-3']) }}>
    <div
         @class([
            'w-auto',
            'h-[591px] mb-24' => $isFirst,
            'h-[340px]' => !$isFirst,
         ])>
        <a href="{{ route('activities.entry', $activity['slug']) }}">
            <span class="absolute inset-0"></span>
            <img src="{{ asset("storage/".$activity['photo']) }}" alt="" class="size-full object-cover">
        </a>
    </div>
    <div
         @class([
             'absolute bottom-0 px-12 pb-12 pt-6 flex flex-col w-[80%] place-self-center gap-3 bg-white'=>$isFirst,
             'flex flex-col gap-2' => !$isFirst,

         ])
    >
        <div class="flex text-sm pt-3 justify-between">
            <time datetime="{{ $activity['published_at'] }}" class="text-gray-400 my-auto">
                {{ $activity['published_at'] }}
            </time>
            @if($isFirst) <x-icons.arrow-up-right/> @endif
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
        <div class="line-clamp-2 text-gray-400 text-sm prose">
            {!! $activity['description'] !!}
        </div>
    </div>
</article>

@props(['news', 'class' => '', 'isFirst' => false])

<article {{ $attributes->class([$class, 'relative isolate flex flex-col overflow-hidden gap-3']) }}>
    <div
         @class([
            'w-auto',
            'lg:h-[591px] lg:mb-24' => $isFirst,
            'lg:h-[340px]' => !$isFirst,
         ])>
        <a href="{{ route('news.entry', $news['slug']) }}">
            @if($isFirst)
                <img src="{{ asset("storage/".$news['photo']) }}"
                     alt="{{ $news['title'] }}"
                     class="absolute h-auto w-full lg:h-full object-cover aspect-square blur-md lg:aspect-auto">
                <img src="{{ asset("storage/".$news['photo']) }}"
                     alt="{{ $news['title'] }}"
                     class="absolute h-auto w-full lg:h-full object-contain aspect-square lg:aspect-auto">
            @else
                <img src="{{ asset("storage/".$news['photo']) }}" alt="{{ $news['title'] }}" class="h-auto w-full lg:h-full object-cover aspect-square lg:aspect-auto">
            @endif
        </a>
    </div>
    <div
         @class([
             'lg:absolute lg:bottom-0 lg:px-12 lg:pb-12 lg:pt-6 flex flex-col lg:w-[80%] lg:place-self-center gap-2 lg:gap-3 lg:bg-white'=>$isFirst,
             'flex flex-col gap-3' => !$isFirst,
         ])>
        <div class="flex text-sm pt-3 justify-between">
            <time datetime="{{ $news['published_at'] }}" class="text-gray-400 my-auto">
                {{ $news['published_at'] }}
            </time>
            @if($isFirst) <span class="hidden lg:block"><i class="ti ti-arrow-up-right text-5xl"></i></span> @endif
        </div>
        <div class="font-semibold text-md">
            <h3
            @class(['lg:text-2xl' => $isFirst])>
                <a href="{{ route('news.entry', $news['slug']) }}">
                    <span class="absolute inset-0"></span>
                    {{ $news['title'] }}
                </a>
            </h3>
        </div>
        <div class="line-clamp-2 text-gray-400 text-sm prose">
            {!! $news['description'] !!}
        </div>
    </div>
</article>

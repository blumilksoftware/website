@extends("layout.public")

@section("title", __("meta.activities.title"))
@section("description", __("meta.activities.description"))

@php
    $isFirst = true;
@endphp

@section("content")
    <section x-data="{ openTags: false }"
             class="py-16 text-center mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-16">
        <div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-black my-6 break-words">
                <span class="text-blue-normal">{{ __("content.activities.section_1.title_1") }}</span>
                {{ __("content.activities.section_1.title_2") }}
            </h2>
        </div>
        <div class="sm:hidden">
            <button type="button"
                    @click="openTags = ! openTags"
                    class="flex border-b-[3px] border-website-normal text-gray-600 hover:text-black w-full">
                <span class="relative w-full sm:w-auto flex place-content-center px-1 pt-1 mb-1 text-sm font-medium">
                    @if($selectedTag)
                        {{ $selectedTag }}
                    @else
                        {{ __("tags.all") }}
                    @endisset
                        @if($selectedTag && $tags->contains($selectedTag) !== false)
                            <span class="text-xs p-1 px-2 ml-2 bg-gray-light text-black rounded-full">{{ $tagsNewsCount[$selectedTag] }}</span>
                        @elseif (!$selectedTag)
                            <span class="text-xs p-1 px-2 ml-2 bg-gray-light text-black rounded-full">{{ $allNewsCount }}</span>
                        @endif
                    <span class="absolute right-0 text-right">
                        <i :class="{'rotate-0': openTags, 'rotate-180': ! openTags}"
                           class="fa-solid fa-chevron-up text-current"></i>
                    </span>
                </span>
            </button>
            <div :class="{'block': openTags, 'hidden': ! openTags}"
                 class="flex flex-wrap gap-y-2 pt-2">
                <x-tag href="{{ route('news') }}"
                       articlesCount="{{ $allNewsCount }}"
                    @class([ "px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3 text-center", "hidden" => $selectedTag === null, "text-gray-400" => $selectedTag !== null ])>
                    {{ __("tags.all") }}
                </x-tag>
                @foreach($tags as $tag)
                    @if ($tag != $selectedTag)
                        <x-tag href="{{ route('news', ['tag' => $tag]) }}"
                               articlesCount="{{ $tagsNewsCount[$tag] }}"
                            @class([
                                'px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3',
                                'text-black border-website-normal' => $selectedTag && $tag === $selectedTag,
                                'text-gray-400' => !($selectedTag && $tag === $selectedTag),
                            ])>{{ $tag }}</x-tag>
                    @endif
                @endforeach
                @if($selectedTag && $tags->contains($selectedTag) === false)
                    <x-tag href="{{ route('news') }}"
                        @class([
                            "my-1 m-2 md:my-2 xl:my-3 px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3",
                            "text-black border-website-normal",
                        ])
                    >{{ $selectedTag }}</x-tag>
                @endif
            </div>
        </div>

        <div class="hidden sm:flex place-content-center flex-wrap gap-y-4">
            <x-tag href="{{ route('news') }}"
                   articlesCount="{{ $allNewsCount }}"
                @class([ "px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3 text-center", "text-black border-website-normal" => $selectedTag === null, "text-gray-500" => $selectedTag !== null ])>
                {{ __("tags.all") }}
            </x-tag>
            @foreach($tags as $tag)
                <x-tag href="{{ route('news', ['tag' => $tag]) }}"
                       articlesCount="{{ $tagsNewsCount[$tag] }}"
                    @class([
                        'px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3',
                        'text-black border-website-normal' => $selectedTag && $tag === $selectedTag,
                        'text-gray-500' => !($selectedTag && $tag === $selectedTag),
                    ])>{{ $tag }}</x-tag>
            @endforeach
            @if($selectedTag && $tags->contains($selectedTag) === false)
                <x-tag href="{{ route('news') }}" class="px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3 text-black border-website-normal">
                    {{ $selectedTag }}</x-tag>
            @endif
        </div>
    </section>
    <section class="relative mx-[10%] 2xl:max-w-screen-2xl 2xl:mx-auto pb-16">
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-16">
            @foreach($news as $singleNews)
                @if ($isFirst)
                    <x-news-card :news="$singleNews->resolve()" class="lg:col-span-2 xl:col-span-3" isFirst="true"/>
                    @php($isFirst = false)
                @else
                    <x-news-card :news="$singleNews->resolve()"/>
                @endif
            @endforeach
        </div>
    </section>

    <section class="mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        {{ $news->onEachSide(1)->links() }}
    </section>

    <x-text-us-section/>
@endsection

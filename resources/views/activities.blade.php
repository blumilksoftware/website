@extends("layout.public")

@section("title", __("meta.activities.title"))
@section("description", __("meta.activities.description"))

@php
    $isFirst = true;
@endphp

@section("content")
    <section class="py-16 text-center mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto space-y-16">
        <div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-black my-6 break-words">
                <span class="text-website-normal">{{ __("content.activities.section_1.title_1") }}</span>
                {{ __("content.activities.section_1.title_2") }}
            </h2>
        </div>
        <div class="flex place-content-center flex-wrap gap-y-4">
            <x-tag href="{{ route('activities') }}"
                   articlesCount="{{ $allActivitiesCount }}"
                @class([ "px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3", "text-black border-website-normal" => $selectedTag === null, "text-gray-400" => $selectedTag !== null ])>
                {{ __("tags.all") }}
            </x-tag>
            @foreach($tags as $tag)
                <x-tag href="{{ route('activities', ['tag' => $tag]) }}"
                       articlesCount="{{ $tagsActivitiesCount[$tag] }}"
                    @class([
                        "px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3",
                        "text-black border-website-normal" => $selectedTag && $tag === $selectedTag,
                        "text-gray-400" => !($selectedTag && $tag === $selectedTag)
                    ])>{{ $tag }}</x-tag>
            @endforeach
            @if($selectedTag && $tags->contains($selectedTag) === false)
                    <x-tag href="{{ route('activities') }}"
                        @class([
                            "my-1 m-2 md:my-2 xl:my-3 px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3",
                            "text-black border-website-normal",
                        ])
                    >{{ $selectedTag }}</x-tag>
            @endif
        </div>
    </section>
    <section class="relative mx-[10%] 2xl:max-w-screen-2xl 2xl:mx-auto">
        <div class="grid lg:grid-cols-3 gap-16">
            @foreach($activities as $activity)
                @if ($isFirst)
                    <x-activity-card :activity="$activity->resolve()" class="col-span-3" isFirst="true"/>
                    @php($isFirst = false)
                @else
                    <x-activity-card :activity="$activity->resolve()"/>
                @endif
            @endforeach
        </div>
    </section>
    <section class="mx-[10%] md:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto  pt-16 pb-8 md:pb-0">
        {{ $activities->onEachSide(1)->links() }}
    </section>

    <x-text-us-section/>
@endsection

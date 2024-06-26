@extends("layout.public")

@section("content")
    <div class="relative md:block -z-10">
        <div class="absolute -left-[6%] md:left-[1%] top-28 md:top-40">
            <x-bubble size="80"/>
        </div>
        <div class="absolute left-[8%] md:left-[4%] top-20 md:top-28">
            <x-bubble size="30"/>
        </div>
        <div class="absolute right-[4%] top-36">
            <x-bubble size="40"/>
        </div>
        <div class="relative top-24">
            <div class="absolute right-[8%] md:right-[3%] top-72">
                <x-bubble size="90"/>
            </div>
        </div>
        <div class="relative top-24">
            <div class="absolute hidden md:block md:right-[4%] top-96">
                <x-bubble size="200"/>
            </div>
        </div>
    </div>
    <section class="py-16 text-center px-[10%] md:px-[20%] space-y-16">
        <div class="">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-black my-6 break-words">
                {{ __("content.activities.section_1.title_1") }}
            </h2>
        </div>
        <div class="flex flex-wrap place-content-center gap-y-2 md:gap-y-6 2xl:gap-y-8">
            <a href="{{ route("activities") }}">
                <x-tag
                    @class([
                        "my-1 m-2 md:my-2 xl:my-3 px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3",
                        "text-website-normal" => $selectedTag === null
                    ])
                > {{ __("tags.all") }}</x-tag>
            </a>
            @foreach($tags as $tag)
                <a href="{{ route("activities", ["tag" => $tag]) }}">
                    <x-tag
                        @class([
                            "my-1 m-2 md:my-2 xl:my-3 px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3",
                            "text-website-normal" => $selectedTag && $tag === $selectedTag
                        ])
                    >{{ $tag }}</x-tag>
                </a>
            @endforeach
            @if($selectedTag && $tags->contains($selectedTag) === false)
                <a href="{{ route("activities") }}">
                    <x-tag
                        @class([
                            "my-1 m-2 md:my-2 xl:my-3 px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3",
                            "text-website-normal"
                        ])
                    >{{ $selectedTag }}</x-tag>
                </a>
            @endif
        </div>
        <div class="grid lg:grid-cols-3 gap-12">
            @foreach($activities as $activity)
                <x-activity-card :activity="$activity->resolve()"/>
            @endforeach
        </div>
    </section>
    <section class="px-[10%] md:px-[20%] pb-8 md:pb-0">
        {{ $activities->onEachSide(1)->links() }}
    </section>
@endsection

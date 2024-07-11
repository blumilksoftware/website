@extends("layout.public")
@section("title", $activity->title)
@section("description", $activity->subtitle)
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

            <div class="absolute z-10 hidden lg:block -left-[10%] lg:-left-[3%] top-96">
                <x-bubble size="250"/>
            </div>
        </div>
    </div>
    <section class="flex flex-col gap-16 xl:gap-32 lg:flex-row place-content-between relative mx-[10%] md:mx-[20%] lg:pt-32">
        <div class="flex flex-col">
            <div class="relative aspect-square max-w-xl overflow-hidden rounded-3xl order-2 lg:order-1 mt-8 md:mt-16 lg:mt-0">
                <img src="{{  asset("storage/".$activity->photo) }}"
                     alt=""
                     class="inset-0 -z-10 size-full object-cover">
            </div>
            <div class="mt-8 lg:mt-16 w-full max-w-2xl lg:max-w-none order-1 lg:order-2">
                <div class="max-w-xl">
                    <div class="text-2xl md:text-3xl lg:text-4xl">
                        <h1 class="font-bold">{{ $activity->title }}</h1>
                        <h1>{{ $activity->subtitle }}</h1>
                    </div>

                </div>
            </div>
            <div class="order-3 mt-20">
                <div class="prose">{!! $activity->description !!}</div>
                @if(!empty( $activity->url ))
                    <a class="block mt-10 text-lg lg:text-xl font-light"
                       href="{{ $activity->url }}"
                       target="_blank">
                        ▶ {{ $activity->url }}</a>
                @endif
            </div>
        </div>
        <div>
            <div class="mt-10 md:mt-0">
                <h3 class="text-lg lg:text-xl font-semibold">{{__("content.activity.section_1.title_1")}}</h3>
                <div class="mt-4 w-72">
                    @foreach($recommendedActivities as $recommendedActivity)
                        <div class="relative flex bg-bubble my-4">
                            <div class="bg-website-normal w-16 shrink-0 h-auto text-center text-white font-bold py-3">
                                <div class="flex flex-wrap items-center overflow-hidden text-md">
                                    <time datetime="{{ $recommendedActivity['published_at'] }}">
                                        {{ $recommendedActivity['published_at'] }}
                                    </time>
                                </div>
                            </div>
                            <div class="flex bg-bubble my-auto pl-8 max-w-xs">
                                <h3 class="text-gray-900 text-left text-base font-bold line-clamp-2">
                                    <a href="{{ route('activities.entry', $recommendedActivity['slug']) }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $recommendedActivity['title'] }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div @class(['mt-10', 'hidden' => count($tags) == 0 ])>
                <h3 class="text-lg lg:text-xl font-semibold">{{__("content.activity.section_1.title_2")}}</h3>
                <div class="flex flex-col place-content-left">
                    @foreach($tags as $tag)
                        <a href="{{ route("activities", ["tag" => $tag['title']]) }}">
                            <x-tag class="flex my-1 md:my-2 xl:my-3 px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3 text-center w-fit"> {{ $tag['title'] }}</x-tag>
                        </a>
                    @endforeach
                </div>
            </div>
            <div @class(['mt-10', 'hidden' => count($peopleTags) == 0 ])>
                <h3 class="text-lg lg:text-xl font-semibold">{{__("content.activity.section_1.title_3")}}</h3>
                <div class="flex flex-col place-content-left">
                    @foreach($peopleTags as $tag)
                        <a href="{{ route("activities", ["tag" => $tag['title']]) }}">
                            <x-tag class="flex my-1 md:my-2 xl:my-3 px-4 py-1 md:px-3 md:py-2 xl:px-4 xl:py-2 2xl:px-6 2xl:py-3 text-center w-fit"> {{ $tag['title'] }}</x-tag>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

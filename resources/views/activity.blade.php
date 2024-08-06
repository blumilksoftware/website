@extends("layout.public")

@section("title", $activity['title'])
@section("description", $activity['subtitle'])

@section("content")
    <meta property="og:url" content="{{ $articleUrl }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $activity['title'] }}"/>
    <meta property="og:description" content="{{ $activity['subtitle'] }}"/>
    <meta property="og:image" content="https://blumilk.pl/storage/{{ $activity['photo'] }}"/>

    <section class="2xl:mx-[10%] 3xl:max-w-screen-2xl 3xl:mx-auto -mb-32">
        <div class="w-full h-[232px] sm:h-[594px] overflow-hidden order-2 lg:order-1 lg:mt-0">
            <img src="{{ asset("storage/".$activity['photo']) }}"
                 alt=""
                 class="inset-0 size-full object-cover">
        </div>
        <div class="flex flex-col lg:gap-24 xl:gap-32 lg:flex-row lg:place-content-between">
            <div class="relative sm:-top-28 mx-auto lg:left-16 pt-8 sm:pt-16 px-12 flex flex-col sm:bg-white sm:w-[70%] gap-8">
                <time datetime="{{ $activity['published_at'] }}" class="text-sm text-gray-400">
                    {{ $activity['published_at'] }}
                </time>
                <div class="w-full max-w-2xl lg:max-w-none order-1 lg:order-2">
                    <div class="w-full">
                        <div class="text-2xl md:text-3xl lg:text-4xl">
                            <h1 class="font-bold">{{ $activity['title'] }}</h1>
                        </div>
                    </div>
                </div>
                <div class="order-3">
                    <div class="prose">{!! $activity['description'] !!}</div>
                </div>
                <div class="lg:block hidden order-4 mt-20">
                    <h3 class="text-lg lg:text-xl font-semibold pb-4">{{ __("content.activity.section_1.title_1") }}</h3>
                    <div class="flex flex-col place-items-center md:place-items-start md:flex-row gap-16 w-full mt-4">
                        @foreach($recommendedActivities as $recommendedActivity)
                            <div class="relative flex flex-col w-[461px] gap-3">
                                <img src="{{ asset("storage/".$recommendedActivity['photo']) }}"
                                     alt=""
                                     class="w-full h-auto xl:h-[343px] object-cover aspect-square xl:aspect-auto">
                                <time datetime="{{ $activity['published_at'] }}" class="text-sm text-gray-400 mt-3">
                                    {{ $activity['published_at'] }}
                                </time>
                                <h3 class="text-gray-900 text-left text-base font-bold">
                                    <a href="{{ route('activities.entry', $recommendedActivity['slug']) }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $recommendedActivity['title'] }}
                                    </a>
                                </h3>
                                <div class="line-clamp-2 text-sm text-gray-400">
                                    {{ $recommendedActivity['description'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full lg:mr-[5%] 2xl:mr-0 relative sm:-top-28 lg:top-0 sm:w-[70%] mx-auto px-12">
                <div @class(['mt-10', 'hidden' => count($tags) === 0])>
                    <h3 class="text-lg lg:text-xl font-semibold pb-8">{{ __("content.activity.section_1.title_2") }}</h3>
                    <div class="flex flex-col divide-y-2 divide-dotted">
                        @foreach($tags as $tag)
                            <a href="{{ route('activities', ['tag' => $tag]) }}"
                               class="flex capitalize justify-between py-3 font-light hover:text-website-normal hover:font-normal">
                                <span>
                                {{ $tag['title'] }}
                                </span>
                                <span>
                                {{ $tagsActivitiesCount[$tag['title']] }}
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div @class(['mt-10', 'hidden' => count($peopleTags) === 0])>
                    <h3 class="text-lg lg:text-xl font-semibold">{{ __("content.activity.section_1.title_3") }}</h3>
                    <div class="flex flex-wrap gap-4 pt-4">
                        @foreach($peopleTags as $tag)
                            <span class="capitalize justify-between font-light text-sm text-gray-500 border border-gray-300 w-fit px-3 py-2 rounded-md">
                                {{ $tag['title'] }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="block lg:hidden mt-20 pb-36 relative sm:-top-28 lg:top-0 sm:w-[70%] mx-auto px-12">
                <h3 class="text-lg lg:text-xl font-semibold pb-4">{{ __("content.activity.section_1.title_1") }}</h3>
                <div class="flex flex-col place-items-center md:place-items-start md:flex-row gap-16 w-full mt-4">
                    @foreach($recommendedActivities as $recommendedActivity)
                        <div class="relative flex flex-col w-[461px] gap-3">
                            <img src="{{ asset("storage/".$recommendedActivity['photo']) }}"
                                 alt=""
                                 class="w-full h-auto xl:h-[343px] object-cover aspect-square xl:aspect-auto">
                            <time datetime="{{ $activity['published_at'] }}" class="text-sm text-gray-400 mt-3">
                                {{ $activity['published_at'] }}
                            </time>
                            <h3 class="text-gray-900 text-left text-base font-bold">
                                <a href="{{ route('activities.entry', $recommendedActivity['slug']) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $recommendedActivity['title'] }}
                                </a>
                            </h3>
                            <div class="line-clamp-2 text-sm text-gray-400">
                                {{ $recommendedActivity['description'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <span class="relative sm:-top-14 lg:top-0">
            <x-text-us-section/>
    </span>
@endsection

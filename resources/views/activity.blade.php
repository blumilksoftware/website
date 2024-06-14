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

        <div class="absolute z-10 hidden lg:block -left-[10%] lg:-left-[3%] top-96">
            <x-bubble size="250"/>
        </div>
        </div>
    </div>
    <section class="flex flex-col md:flex-row place-content-between relative mx-[10%] md:mx-[20%] pt-16">
            <div class="basis-3/5">
                <div class="relative aspect-square max-w-2xl overflow-hidden rounded-3xl">
                    <img src="{{asset("$activity->photo")}}"
                         alt=""
                         class="inset-0 -z-10 size-full object-cover">
                </div>
                <div class="mx-auto mt-16 w-full max-w-2xl lg:col-span-4 lg:mt-0 lg:max-w-none">
                    <div class="mt-14 max-w-2xl sm:mt-16 lg:col-span-3 lg:row-span-2 lg:row-end-2 lg:mt-0 lg:max-w-2xl">
                        <div class="mt-14 text-2xl md:text-3xl lg:text-4xl">
                            <h1 class="font-bold">{{$activity->title}}</h1>
                            <h1>{{$activity->subtitle}}</h1>
                        </div>
                        <p class="mt-6 text-lg lg:text-xl font-light">{{$activity->description}}</p>
                    </div>
                </div>
            </div>
            <div class="basis-2/5">
                <div class="mt-10 md:mt-0 md:pt-10">
                    <h3 class="text-lg lg:text-xl font-semibold">{{__("content.activity.section_1.title_1")}}</h3>
                    <div class="prose prose-sm mt-4">
                        opis
                    </div>
                </div>
                <div class="mt-10 pt-10">
                    <h3 class="text-lg lg:text-xl font-semibold">{{__("content.activity.section_1.title_2")}}</h3>
                    <p class="mt-4 text-sm">
                        @foreach($activity->tags as $tag)
                            <x-badge class="my-4"> {{__("tags.$tag")}}</x-badge>
                        @endforeach
                    </p>
                </div>
            </div>
    </section>

@endsection

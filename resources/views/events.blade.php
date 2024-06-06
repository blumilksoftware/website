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
                {{__("content.events.section_1.title_1")}}
            </h2>
        </div>
        <div>
            <a href=""
               class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold text-sm px-12 py-6 mr-2 mb-2">
                {{__("tags.all")}}
            </a>
            @foreach($tags as $tag)
                <a href=""
                   class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold text-sm px-12 py-6 mr-2 mb-2">
                    {{$tag}}
                </a>
            @endforeach
        </div>
        <div class="grid lg:grid-cols-3 gap-12 3xl:mx-32">
            @foreach($events as $index => $event)
                <x-article-card :event="$event"/>
            @endforeach
        </div>
    </section>
@endsection

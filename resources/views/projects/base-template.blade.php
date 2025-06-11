@extends("layout.public")

@section("title", $project->name)
@section("description", $project->description)

@section("content")
    <section class="relative pt-16 md:pt-28 px-[10%] md:px-[20%]">
        <div class="self-center">
            <div class="text-4xl md:text-5xl xl:text-6xl text-center pb-4">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    {{ $project->name_first_part }}
                    <span style="color: {{$project->color}}">{{ $project->name_second_part }}</span>
                    {{ $project->name_third_part }}
                </h2>
            </div>
            <div class="items-center">
                <p class="text-lg lg:text-xl font-light text-center">
                    <span class="leading-7">{{ $project->description }}</span>
                </p>
            </div>
        </div>
        <div class="pt-12 md:py-24 w-full">
            <img src="{{ asset("storage/" . $project->photo) }}"
                 class="relative aspect-5/3 w-auto h-full mx-auto rounded-3xl bg-white shadow-md"
                 alt="{{ $project->company }}"/>
        </div>
    </section>
    <x-text-us-section/>
@endsection

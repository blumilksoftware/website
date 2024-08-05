@extends("layout.public")

@section("title", __("meta.software-engineer.title"))
@section("description", __("meta.software-engineer.description"))

@section("content")
    <section class="flex flex-col-reverse xl:flex-row pt-28 pb-10 mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="flex basis-2/5 relative flex-col self-center gap-5">
            <div class="text-3xl md:text-4xl lg:text-5xl text-center xl:justify-start xl:text-start">
                <h2 class="font-semibold text-gray-900 leading-snug">
                    {{ __("content.software_engineer.section_1.title_1") }}
                    <span class="text-website-normal">{{ __("content.software_engineer.section_1.title_2") }}</span>
                </h2>
            </div>
            <div class="flex flex-col items-center xl:items-start text-lg font-normal text-center xl:text-start pb-12 leading-relaxed">
                {{ __("content.software_engineer.section_1.subtitle_1") }}
            </div>
        </div>
        <div class="flex basis-3/5 relative self-center pb-24 xl:pb-0">
            <img src="{{ asset('graphics/software-engineer.svg') }}" class="h-auto w-full aspect-auto object-center shrink-0"
                 alt="placeholder"/>
        </div>
    </section>
    <section class="mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto pt-28 pb-8">
        <div class="flex flex-col xl:flex-row gap-4 2xl:gap-8">
            <div class="flex flex-col place-items-start xl:flex-row bg-gray-extraLight rounded-xl leading-relaxed  py-6 px-12 gap-2 size-auto">
                <div class="bg-white shadow-md rounded-full size-16 aspect-square mt-4 mx-auto sm:mx-0 flex place-items-center justify-center">
                    <x-icons.device-desktop/>
                </div>
                <div class="2xl:mt-2 text-left ml-4">
                    <span class="font-semibold text-lg block pb-2">
                        {{ __('content.software_engineer.section_2.stack.title_1') }}
                    </span>
                    <ul class="list-square list-inside font-normal text-gray-400 text-sm leading-relaxed">
                        @for($stackListItem = 1; $stackListItem <= 9; $stackListItem++)
                            <li class="text-md leading-relaxed">
                                {{ __("content.software_engineer.section_2.stack.content_$stackListItem") }}
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="flex flex-col place-items-start xl:flex-row bg-gray-extraLight rounded-xl leading-relaxed py-6 px-12 gap-2 size-auto">
                <div class="bg-white shadow-md rounded-full size-16 aspect-square mt-4 mx-auto sm:mx-0 flex place-items-center justify-center">
                    <x-icons.crown/>
                </div>
                <div class="2xl:mt-2 text-left ml-4">
                    <span class="font-semibold text-lg block pb-2">
                        {{ __('content.software_engineer.section_2.requirements.title_1') }}
                    </span>
                    <ul class="list-square list-inside font-normal text-gray-400 text-sm leading-relaxed">
                        @for($stackListItem = 1; $stackListItem <= 9; $stackListItem++)
                            <li class="text-md leading-relaxed">
                                {{ __("content.software_engineer.section_2.requirements.content_$stackListItem") }}
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <x-text-us-section/>
@endsection

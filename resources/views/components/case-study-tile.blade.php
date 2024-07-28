{{--<div {{ $attributes->merge(['class' => 'grid gap-8 content-start max-w-xl mx-auto text-center lg:text-left']) }}>--}}
{{--        <a href="{{ route('case-studies.entry', $caseStudy->slug) }}">--}}
{{--            <img src="{{ asset("storage/" . $caseStudy->photo)  }}"--}}
{{--                 class="relative m-auto size-full aspect-[5/3] shadow-md rounded-3xl"--}}
{{--                 alt="{{ $caseStudy->company }}"/>--}}
{{--        </a>--}}
{{--    <div class="grid gap-2">--}}
{{--        <span class="font-semibold leading-relaxed">{{ $caseStudy->name }}</span>--}}
{{--    </div>--}}
{{--</div>--}}
<article class="relative flex overflow-hidden rounded-2xl px-8 pb-8 pt-80 sm:pt-48 lg:pt-80 place-content-end">
    <img src="{{ asset("storage/" . $caseStudy->photo)  }}" alt="{{ $caseStudy->company }}" class="absolute inset-0 -z-10 h-full w-full object-cover">

    <div class="flex mt-3 text-lg font-semibold leading-relaxed place-items-end">
        <a href="{{ route('case-studies.entry', $caseStudy->slug) }}">
            <span class="absolute inset-0"></span>
            <h3 class="flex bg-white min-h-24 w-auto shadow-2xl rounded-lg p-8">
                {{ $caseStudy->name }}

            </h3>
        </a>
    </div>
</article>

<div {{ $attributes->merge(['class' => 'grid gap-8 content-start max-w-xl mx-auto text-center lg:text-left']) }}>
    <div class="relative rounded-3xl md:bg-gray-dark aspect-[5/3] max-h-80 pl-1 shadow-md -rotate-3 md:-left-2">
        <a href="{{ route('case-studies.entry', $caseStudy->slug) }}">
            <img src="{{ asset($caseStudy->photo)  }}"
                 class="relative max-h-80 m-auto w-full aspect-[5/3] shadow-md rounded-3xl rotate-3 md:left-3 -bottom-2"
                 alt="{{ $caseStudy->company }}"/>
        </a>
    </div>
    <div class="grid gap-2">
        <x-badge>{{ $caseStudy->company }}</x-badge>
        <span class="font-semibold leading-relaxed">{{ $caseStudy->name }}</span>
        <span class="hidden lg:block line-clamp-2">{{ $caseStudy->description }}</span>
    </div>
</div>

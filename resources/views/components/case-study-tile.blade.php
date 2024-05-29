<div class="grid gap-8 content-start max-w-xl mx-auto text-left">
    <div class="rounded-3xl md:bg-gray-dark aspect-[5/3] max-h-80 -rotate-3 relative md:shadow-md md:-left-2">
        <a href="{{ route('case-studies.entry', $caseStudy->slug) }}">
            <img src="{{ asset('storage/' . $caseStudy->photo)  }}"
                 class=" max-h-80 m-auto w-full aspect-[5/3] rounded-3xl shadow-md rotate-3 md:left-4"
                 alt="{{ $caseStudy->company }}"/>
        </a>
    </div>
    <div class="grid gap-2">
        <x-badge>{{ $caseStudy->company }}</x-badge>
        <span class="font-semibold leading-relaxed">{{ $caseStudy->name }}</span>
        <span class="block">{{ $caseStudy->description }}</span>
    </div>
</div>

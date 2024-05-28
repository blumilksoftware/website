<div class="grid gap-y-10 content-start">
        <div class="rounded-3xl md:bg-gray-dark max-w-lg aspect-[5/3] -rotate-3 relative md:shadow-md -left-2">
            <a href="{{ route('case-studies.entry', $caseStudy->slug) }}" class="absolute inset-0 z-10">
                <img src="{{ asset('storage/' . $caseStudy->photo)  }}"
                     class="relative h-auto w-full max-w-xl aspect-[5/3] flex overflow-hidden rounded-3xl bg-white shadow-md rotate-3 left-4"
                     alt="{{ $caseStudy->company }}"/>
            </a>
        </div>
    <div class="flex flex-col w-full text-left gap-2 pl-3">
        <div>
            <x-badge>{{ $caseStudy->company }}</x-badge>
        </div>
        <div>
            <span class="font-semibold leading-relaxed">{{ $caseStudy->name }}</span>
        </div>
        <div>
            {{ $caseStudy->description }}
        </div>
    </div>
</div>

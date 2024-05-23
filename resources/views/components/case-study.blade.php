<div class="grid gap-y-10">
    <div class="rounded-3xl md:bg-gray-light -rotate-3 relative md:shadow-md lg:left-[0%] lg:pb-0">
        <img src="{{ asset('storage/' . $caseStudy->photo)  }}"
             class="h-auto w-full aspect-video flex lg:left-[2%] overflow-hidden rounded-3xl bg-white shadow-md rotate-3"
             alt="{{ $caseStudy->company }}"/>
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

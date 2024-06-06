<article {{ $attributes->merge(['class' => 'relative isolate flex flex-col justify-end overflow-hidden pb-8 aspect-square']) }}>
    <img src="{{ Storage::url($event->photo) }}" alt="" class="absolute inset-0 -z-10 size-full object-cover">
    <div class="flex absolute flex-wrap items-center overflow-hidden text-md text-white font-semibold top-0 right-8 w-14">
        <time datetime="{{ $event->published_at }}" class="bg-website-normal pt-6 py-2 text-center">
            {{ \Carbon\Carbon::parse($event->published_at)->format('d/m Y') }}
        </time>
    </div>
    <div class="flex flex-wrap items-center overflow-hidden text-md text-black font-semibold">
        <span class="bg-white p-2">{{ $event->title }}</span>
    </div>
    <h3 class="mt-3 flex flex-wrap items-center overflow-hidden text-md text-black font-semibold">
        <a href="{{ route('case-studies.entry', $event->id) }}" class="bg-white p-2">
            <span class="absolute inset-0"></span>
            {{ $event->subtitle }}
        </a>
    </h3>
</article>

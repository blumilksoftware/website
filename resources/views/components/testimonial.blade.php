@props([
    'photoUrl',
    'name',
    'occupation',
    'description',
    'linkedIn'
])

<div class="relative my-20 md:mb-0">
    <div class="mb-6 flex justify-center relative">
        <div class="relative">
            <img src="{{ $photoUrl }}" class="w-32 rounded-full shadow-lg relative z-10" alt=""/>
            <img src="gifs/quote.gif" alt="gif" class="w-24 shrink absolute justify-center  -left-[35%] -top-12"/>
        </div>
    </div>
    <h5 class="text-xl font-semibold">{{ $name }}</h5>
    <h6 class="mb-4 font-normal text-black">{{ $occupation }}</h6>
    <p class="text-neutral-600 line-clamp-3">
        {!! $description !!}
    </p>
    <a class="mb-8 text-sm flex items-center justify-center text-neutral-400 px-4 py-2" href="#">
        {{__('buttons.read_more')}}
    </a>
    <a class="mb-0 flex items-center justify-center" href="{{ $linkedIn }}" target="_blank">
        <i class="fa-brands fa-linkedin fa-xl text-website-normal"></i>
    </a>
</div>

@props([
    'photoUrl',
    'name',
    'occupation',
    'description',
    'linkedIn'
])

<div class="relative mt-8 mb-24 sm:my-20 mx-8 lg:mx-12 2xl:mx-16">
    <div class="mb-6 flex justify-center relative">
        <img src="{{ $photoUrl }}" class="w-32 rounded-full shadow-lg" alt=""/>
    </div>
    <h5 class="text-xl font-semibold">{{ $name }}</h5>
    <h6 class="mb-4 font-normal text-black">{{ $occupation }}</h6>
    <p class="text-neutral-600 line-clamp-3 px-10">
        {!! $description !!}
    </p>
    <a class="mb-8 text-sm flex items-center justify-center text-neutral-400 px-12 py-2" href="#">
        {{__('buttons.read_more')}}
    </a>
    <a class="mb-0 flex items-center justify-center" href="{{ $linkedIn }}" target="_blank">
        <i class="fa-brands fa-linkedin fa-xl text-website-normal"></i>
    </a>
</div>

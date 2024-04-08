@props([
    'photoUrl',
    'name',
    'occupation',
    'description',
])

<div class="mb-12 md:mb-0">
    <i class="fa-solid fa-quote-left fa-2xl relative right-8 top-2"></i>
    <div class="mb-6 flex justify-center relative z-10">
        <img src="{{ $photoUrl }}" class="w-32 rounded-full shadow-lg"/>
    </div>
    <h5 class="text-xl font-semibold">{{ $name }}</h5>
    <h6 class="mb-4 font-normal text-black">{{ $occupation }}</h6>
    <p class="text-neutral-600">
        {!! $description !!}
    </p>
    <a class="mb-8 text-sm flex items-center justify-center text-neutral-600 px-4 py-2" href="#">
        Czytaj więcej
    </a>
    <a class="mb-0 flex items-center justify-center" href="#">
        <i class="fa-brands fa-linkedin fa-xl" style="color: #5379f6;"></i>
    </a>
</div>

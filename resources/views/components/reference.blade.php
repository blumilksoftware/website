<div class="gallery-cell gap-6 py-4 2xl:gap-12">
    <div class="mt-8 mb-24 sm:my-20 mx-8 lg:mx-12 2xl:mx-16">
        <div class="mb-6 flex justify-center relative">
            <img src="{{ asset("storage/" . $reference->photo) }}" class="w-32 rounded-full shadow-lg" alt=""/>
        </div>
        <h5 class="text-xl font-semibold break-words">{{ $reference->creator_name }}</h5>
        <h6 class="mb-4 font-normal text-black break-words">{{ $reference->company }}</h6>
        <p class="text-neutral-600 line-clamp-3 px-10">
            {!! $reference->description !!}
        </p>
        <a class="mb-8 text-sm flex items-center justify-center text-neutral-400 px-12 py-2">
            {{ __('buttons.read_more') }}
        </a>
        <a class="mb-0 flex items-center justify-center" href="{{ $reference->associate_link }}" target="_blank">
            <i class="fa-brands fa-linkedin fa-xl text-website-normal"></i>
        </a>
    </div>
</div>

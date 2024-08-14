<section class="relative 2xl:max-w-screen-3xl 2xl:mx-auto overflow-visible">
    <img src="{{$src}}" alt="{{$alt}}" @class([
        "w-auto object-cover mx-auto h-[500px] sm:h-[650px] lg:h-[940px] relative z-10",
        "object-left" => isset($moveRight),
])>
    <div class="font-bold text-blue-light leading-none text-[85px] md:text-[120px] 2xl:text-[180px] text-center absolute m-auto left-12 right-0 -top-8 z-0">CASE STUDY</div>
</section>

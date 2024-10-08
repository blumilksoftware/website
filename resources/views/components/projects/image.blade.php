@props([
    'src' => '',
    'alt' => '',
    'margin' => false
])

<section>
    <img src="{{$src}}" alt="{{$alt}}"
    @class([
        "px-[10%] 2xl:px-0 2xl:max-w-7xl 2xl:mx-auto" => $margin,
        "w-full object-cover h-auto"
    ])>
</section>

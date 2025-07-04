@props(['title', 'description' => null])

<div {{ $attributes->merge([
    'class' => 'rounded-xl shadow-md px-4 md:px-9 lg:py-8 flex flex-col justify-center items-center h-full',
]) }}>
    <div @class([
        'flex flex-col leading-7 lg:text-xl py-6 w-fit',
        'items-center' => !$description,
    ])>

        @if (trim($slot))
            <div class="flex items-center justify-center gap-x-2">
                <div>
                    {{ $slot }}
                </div>
                <span class="font-semibold text-sm sm:text-md lg:text-lg text-tile-title">
                    {!! $title !!}
                </span>
            </div>
        @else
            <span @class([
                'font-semibold text-sm sm:text-md lg:text-lg text-tile-title block',
                'text-center' => !$description
            ])>
                {!! $title !!}
            </span>
        @endif

        @if ($description)
            <div class="text-left mt-4">
                <div class="font-normal text-edu-gray text-xs sm:text-sm leading-relaxed">
                    {!! $description !!}
                </div>
            </div>
        @endif

    </div>
</div>

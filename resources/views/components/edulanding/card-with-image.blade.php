@props([
    'title',
    'description' => null,
    'image',
    'buttonText' => __('edulanding.case_studies.button'),
    'url' => '#',
    'class' => '',
])

<div {{ $attributes->merge([
    'class' => "bg-white rounded-2xl flex flex-col h-full $class"
]) }}>
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-72 object-cover rounded-xl shadow-lg/10">
    <div class="flex flex-col flex-1 gap-y-4">
        <h2 class="font-semibold text-edu-gray-dark mb-2 text-4xl mt-4">
            {{ $title  }}
        </h2>
        <p class="text-edu-gray-dark text-lg mb-4 flex-1">
            {{ $description }}
        </p>
        <x-edulanding.button href="{{ $url }}" class="px-1 py-3 mt-4">
        {{ $buttonText }}
        </x-edulanding.button>
    </div>
</div>

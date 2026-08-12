@props(['reference'])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-lg p-6 w-full shrink-0']) }}>
    <div class="flex items-center gap-3 mb-3">
        <img src="{{ $reference->getPhotoPath() }}"
             alt="{{ __('alt.reference') . ' ' . $reference->creator_name }}"
             class="h-10 w-10 rounded-full object-cover flex-none"/>
        <div>
            <div class="font-semibold text-gray-900 text-sm">{{ $reference->creator_name }}</div>
            <div class="text-gray-500 text-xs">
                <x-references.position-company-display :reference="$reference"/>
            </div>
        </div>
    </div>
    <p class="text-sm text-gray-600 leading-6">{!! '"' . $reference->description . '"' !!}</p>
</div>

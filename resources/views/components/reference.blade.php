<figure class="{{ $attributes->get('class') }} rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5 size-fit max-w-96 place-self-center">
    <blockquote class="text-gray-900">
        <p>{!! "“" . $reference->description . "”" !!}</p>
    </blockquote>
    <figcaption class="mt-6 flex items-center gap-x-4">
        @php
            $photoPath = (file_exists(storage_path('app/public/' . $reference->photo)) && !!$reference->photo)
                         ? asset('storage/' . $reference->photo)
                         : null;
            $placeholder = $reference->sex === 'female'
                           ? asset('graphics/placeholders/female.svg')
                           : asset('graphics/placeholders/male.svg');
        @endphp
        <img class="h-10 w-10 rounded-full bg-gray-50"
             src="{{ $photoPath ?? $placeholder }}"
             alt="{{ __('alt.reference') . ' ' . $reference->creator_name }}">
        <div>
            <div class="font-semibold text-left">{{ $reference->creator_name }}</div>
            <div class="text-gray-600 text-left">{{ $reference->company }}</div>
        </div>
    </figcaption>
</figure>

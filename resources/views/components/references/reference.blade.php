<figure class="{{ $attributes->get('class') }} rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5 size-fit max-w-96 place-self-center">
    <blockquote class="text-gray-900">
        <p>{!! "“" . $reference->description . "”" !!}</p>
    </blockquote>
    <figcaption class="mt-6 flex items-center gap-x-4">
        <img class="h-10 w-10 rounded-full bg-gray-50"
             src="{{ $reference->getPhotoPath() }}"
             alt="{{ __('alt.reference') . ' reference.blade.php' . $reference->creator_name }}">
        <div>
            <div class="font-semibold text-left">{{ $reference->creator_name }}</div>
            <div class="text-gray-600 text-left">
                <x-references.position-company-display :reference="$reference" />
            </div>

        </div>
    </figcaption>
</figure>

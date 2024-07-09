<div
    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
    @isset($references[0])
    <figure
        class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
        <blockquote
            class="p-6 text-lg font-semibold leading-7 tracking-tight text-gray-900 sm:p-12 sm:text-xl sm:leading-8">
            <p>{!! "“".$references[0]->description."”" !!}</p>
        </blockquote>
        <figcaption
            class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-6 py-4 sm:flex-nowrap">
            <img class="h-10 w-10 flex-none rounded-full bg-gray-50"
                 src="{{ asset("storage/" . $references[0]->photo) }}"
                 alt="">
            <div class="flex-auto">
                <a href="{{ $references[0]->associate_link }}" target="_blank">
                    <div class="font-semibold text-left">{{ $references[0]->creator_name }}</div>
                    <div class="text-gray-600 text-left">{{ $references[0]->company }}</div>
                </a>
            </div>

        </figcaption>
    </figure>
    @endisset
    <div class="space-y-8 xl:contents xl:space-y-0">
        <div class="space-y-8 xl:row-span-2">
            @isset($references[1])
                <x-reference :reference="$references[1]"/>
            @endisset
            @isset($references[2])
                <x-reference :reference="$references[2]"/>
            @endisset
            @isset($references[3])
                <x-reference :reference="$references[3]"/>
            @endisset
        </div>
        <div class="space-y-8 xl:row-start-1">
            @isset($references[1])
                <x-reference :reference="$references[1]"/>
            @endisset
            @isset($references[2])
                <x-reference :reference="$references[2]"/>
            @endisset
            @isset($references[3])
                <x-reference :reference="$references[3]"/>
            @endisset
        </div>
    </div>
    <div class="space-y-8 xl:contents xl:space-y-0">
        <div class="space-y-8 xl:row-start-1">
            @isset($references[1])
                <x-reference :reference="$references[1]"/>
            @endisset
            @isset($references[2])
                <x-reference :reference="$references[2]"/>
            @endisset
            @isset($references[3])
                <x-reference :reference="$references[3]"/>
            @endisset
        </div>
        <div class="space-y-8 xl:row-span-2">
            @isset($references[1])
                <x-reference :reference="$references[1]"/>
            @endisset
            @isset($references[2])
                <x-reference :reference="$references[2]"/>
            @endisset
            @isset($references[3])
                <x-reference :reference="$references[3]"/>
            @endisset
        </div>
    </div>
</div>

@php
switch (count($references)) {
    case 1:
        $main = 0;
        $topLeft = null;
        $topRight = null;
        $middleLeft = null;
        $middleRight = null;
        break;
    case 2:
        $main = null;
        $topLeft = null;
        $topRight = null;
        $middleLeft = 0;
        $middleRight = 1;
        break;
    case 3:
        $main = 0;
        $topLeft = 1;
        $topRight = 2;
        $middleLeft = null;
        $middleRight = null;
        break;
    case 4:
        $main = null;
        $topLeft = 0;
        $topRight = 1;
        $middleLeft = 2;
        $middleRight = 3;
        break;
    default:
        $main = 0;
        $topLeft = 1;
        $topRight = 2;
        $middleLeft = 3;
        $middleRight = 4;
}
@endphp
<div
    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
    @isset($main)
    <figure
        class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
        <blockquote
            class="p-6 text-lg font-semibold leading-7 tracking-tight text-gray-900 sm:p-12 sm:text-xl sm:leading-8">
            <p>{!! "“".$references[$main]->description."”" !!}</p>
        </blockquote>
        <figcaption
            class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-6 py-4 sm:flex-nowrap">
            <img class="h-10 w-10 flex-none rounded-full bg-gray-50"
                 src="{{ asset("storage/" . $references[$main]->photo) }}"
                 alt="">
            <div class="flex-auto">
                <a href="{{ $references[$main]->associate_link }}" target="_blank">
                    <div class="font-semibold text-left">{{ $references[$main]->creator_name }}</div>
                    <div class="text-gray-600 text-left">{{ $references[$main]->company }}</div>
                </a>
            </div>

        </figcaption>
    </figure>
    @endisset
    <div class="space-y-0 xl:contents xl:space-y-0">
        <div class="space-y-8 xl:row-span-2 m-2">
            @isset($references[$topLeft])
                <x-reference :reference="$references[$topLeft]"/>
            @endisset
        </div>
        <div class="space-y-8 xl:row-start-1 m-2">
            @isset($references[$middleLeft])
                <x-reference :reference="$references[$middleLeft]"/>
            @endisset
        </div>
    </div>
    <div class="space-y-0 xl:contents xl:space-y-0">
        <div class="space-y-8 xl:row-start-1 m-2">
            @isset($references[$middleRight])
                <x-reference :reference="$references[$middleRight]"/>
            @endisset
        </div>
        <div class="space-y-8 xl:row-span-2 m-2">
            @isset($references[$topRight])
                <x-reference :reference="$references[$topRight]"/>
            @endisset
        </div>
    </div>
</div>

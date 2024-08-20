@php

    $main = null;
    $main2 = null;
    $c1r1 = null;
    $c1r2 = null;
    $c1r3 = null;
    $c2r1 = null;
    $c2r2 = null;
    $c3r1 = null;
    $c3r2 = null;
    $c4r1 = null;
    $c4r2 = null;
    $c4r3 = null;

    switch (count($references)) {
        case 1:
            $main = 0;
            break;
        case 2:
            $main = 0;
            $main2 = 1;
            break;
        case 3:
            $main = 0;
            $c1r1 = 1;
            $c4r1 = 2;
            break;
        case 4:
            $main = 0;
            $main2 = 1;
            $c1r1 = 2;
            $c4r1 = 3;
            break;
        case 5:
            $main = 0;
            $c1r1 = 1;
            $c2r1 = 2;
            $c3r1 = 3;
            $c4r1 = 4;
            break;
        case 6:
            $main = 0;
            $main2 = 1;
            $c1r1 = 2;
            $c1r2 = 3;
            $c4r1 = 4;
            $c4r2 = 5;
            break;
        case 7:
            $main = 0;
            $c1r1 = 1;
            $c1r2 = 2;
            $c2r1 = 3;
            $c3r1 = 4;
            $c4r1 = 5;
            $c4r2 = 6;
            break;
        case 8:
            $main = 0;
            $main2 = 1;
            $c1r1 = 2;
            $c1r2 = 3;
            $c2r1 = 4;
            $c3r1 = 5;
            $c4r1 = 6;
            $c4r2 = 7;
            break;
        case 9:
            $main = 0;
            $c1r1 = 1;
            $c1r2 = 2;
            $c1r3 = 3;
            $c2r1 = 4;
            $c3r1 = 5;
            $c4r1 = 6;
            $c4r2 = 7;
            $c4r3 = 8;
            break;
        case 10:
            $main = 0;
            $main2 = 1;
            $c1r1 = 2;
            $c1r2 = 3;
            $c1r3 = 4;
            $c2r1 = 5;
            $c3r1 = 6;
            $c4r1 = 7;
            $c4r2 = 8;
            $c4r3 = 9;
            break;
        default:
            $main = 0;
            $c1r1 = 1;
            $c1r2 = 2;
            $c1r3 = 3;
            $c2r1 = 4;
            $c2r2 = 5;
            $c3r1 = 6;
            $c3r2 = 7;
            $c4r1 = 8;
            $c4r2 = 9;
            $c4r3 = 10;
            break;
    }
@endphp
<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4 place-items-center md:place-items-start">
    <div @class([
    "sm:col-span-2 xl:col-start-2 xl:row-end-1 space-y-8",
    "hidden" => !(@isset($main) || @isset($main2))])>
        @isset($main)
            <figure class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5">
                <blockquote class="p-6 md:text-lg md:font-semibold leading-7 md:tracking-tight text-gray-900 sm:p-12 sm:text-xl md:leading-8">
                    <p>{!! "“".$references[$main]->description."”" !!}</p>
                </blockquote>
                <figcaption class="flex items-center gap-x-4 gap-y-4 md:border-t md:border-gray-900/10 px-6 py-4 sm:flex-nowrap">
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
        @isset($main2)
            <figure class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5">
                <blockquote class="p-6 md:text-lg md:font-semibold leading-7 md:tracking-tight text-gray-900 sm:p-12 sm:text-xl md:leading-8">
                    <p>{!! "“".$references[$main2]->description."”" !!}</p>
                </blockquote>
                <figcaption
                    class="flex flex-wrap items-center gap-x-4 gap-y-4 md:border-t md:border-gray-900/10 px-6 py-4 sm:flex-nowrap">
                    <img class="h-10 w-10 flex-none rounded-full bg-gray-50"
                         src="{{ asset("storage/" . $references[$main2]->photo) }}"
                         alt="">
                    <div class="flex-auto">
                        <a href="{{ $references[$main2]->associate_link }}" target="_blank">
                            <div class="font-semibold text-left">{{ $references[$main2]->creator_name }}</div>
                            <div class="text-gray-600 text-left">{{ $references[$main2]->company }}</div>
                        </a>
                    </div>
                </figcaption>
            </figure>
        @endisset
    </div>
    <div class="xl:contents xl:space-y-0">
        <div class="space-y-8 xl:row-span-2 m-2">
            @isset($references[$c1r1])
                <x-reference :reference="$references[$c1r1]"/>
            @endisset
            @isset($references[$c1r2])
                <x-reference :reference="$references[$c1r2]" class="hidden lg:block"/>
            @endisset
            @isset($references[$c1r3])
                <x-reference :reference="$references[$c1r3]" class="hidden lg:block"/>
            @endisset
        </div>
        <div class="space-y-8 xl:row-start-1 m-2">
            @isset($references[$c2r1])
                <x-reference :reference="$references[$c2r1]" class="hidden lg:block"/>
            @endisset
            @isset($references[$c2r2])
                <x-reference :reference="$references[$c2r2]" class="hidden lg:block"/>
            @endisset
        </div>
    </div>
    <div class="xl:contents xl:space-y-0">
        <div class="space-y-8 xl:row-start-1 m-2">
            @isset($references[$c3r1])
                <x-reference :reference="$references[$c3r1]" class="hidden lg:block"/>
            @endisset
            @isset($references[$c3r2])
                <x-reference :reference="$references[$c3r2]" class="hidden lg:block"/>
            @endisset
        </div>
        <div class="space-y-8 xl:row-span-2 m-2">
            @isset($references[$c4r1])
                <x-reference :reference="$references[$c4r1]"/>
            @endisset
            @isset($references[$c4r2])
                <x-reference :reference="$references[$c4r2]" class="hidden lg:block"/>
            @endisset
            @isset($references[$c4r3])
                <x-reference :reference="$references[$c4r3]" class="hidden lg:block"/>
            @endisset
        </div>
    </div>
</div>

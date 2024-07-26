<section class="mx-[10%] lg:mx-[15%] 2xl:max-w-screen-2xl 2xl:mx-auto space-y-10 py-20 text-center">
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold pb-8"> {{ $title }} </h2>
    <div class="grid md:grid-cols-2 xl:grid-cols-6 gap-4 2xl:gap-10 place-items-center xl:place-items-stretch">
        <x-tile image="{{ '<x-icons.' . $tiles[0]['icon'] }}"
                alt="{{ $tiles[0]['icon'] }}"
                title="{{ $tiles[0]['title'] }}"
                description="{{ $tiles[0]['description'] }}"
                class="xl:col-span-2 size-full">
            <x-icons.{{ $tiles[0]['icon'] }}/>
            <x-slot name="childSlot">
                <x-icons. />
            </x-slot>
        </x-tile>
        <x-tile image="{{ asset('graphics/icons/'.$tiles[1]['icon'].'.svg') }}"
                alt="{{ $tiles[1]['icon'] }}"
                title="{{ $tiles[1]['title'] }}"
                description="{{ $tiles[1]['description'] }}"
                class="xl:col-span-2 size-full"/>
        <x-tile image="{{ asset('graphics/icons/'.$tiles[2]['icon'].'.svg') }}"
                alt="{{ $tiles[2]['icon'] }}"
                title="{{ $tiles[2]['title'] }}"
                description="{{ $tiles[2]['description'] }}"
                class="xl:col-span-2 size-full"/>
        <x-tile image="{{ asset('graphics/icons/'.$tiles[3]['icon'].'.svg') }}"
                alt="{{ $tiles[3]['icon'] }}"
                title="{{ $tiles[3]['title'] }}"
                description="{{ $tiles[3]['description'] }}"
                class="xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-end size-full"/>
        <x-tile image="{{ asset('graphics/icons/'.$tiles[4]['icon'].'.svg') }}"
                alt="{{ $tiles[4]['icon'] }}"
                title="{{ $tiles[4]['title'] }}"
                description="{{ $tiles[4]['description'] }}"
                class="md:col-span-2 xl:col-span-3 xl:max-w-[345px] 2xl:max-w-[485px] xl:place-self-start size-full"/>
    </div>
</section>

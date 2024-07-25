<section class="mx-[10%] lg:mx-[15%] 2xl:max-w-5xl 2xl:mx-auto space-y-24 py-20">
    <div class="grid grid-cols-2">
        <div class="text-3xl md:text-4xl lg:text-5xl font-semibold"> Paleta kolorów </div>
        <div class="leading-loose text-md"> {{ $description }} </div>
    </div>
    <div class="w-full h-96 grid grid-cols-3 justify-items-stretch">
        <div style="background-color: {{ $primary }};"  class="size-full text-white col-span-3 rounded-t-2xl place-content-end pb-8 pl-8"><span class="font-semibold block">Primary color</span> {{ $primary }}</div>
        <div style="background-color: {{ $secondary }};" class="size-full text-white rounded-bl-2xl place-content-end pb-8 pl-8"><span class="font-semibold block">Secondary</span> {{ $secondary }}</div>
        <div style="background-color: {{ $surface }};" class="size-full place-content-end pb-8 pl-8"><span class="font-semibold block">Surface container</span> {{ $surface }}</div>
        <div style="background-color: {{ $text }};" class="size-full rounded-br-2xl place-content-end pb-8 pl-8"><span class="font-semibold block">Text</span> {{ $text }}</div>
    </div>
</section>

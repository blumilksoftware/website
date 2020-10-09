<div class="bg-gray-800 text-white mt-24 p-12 text-sm leading-relaxed z-30">
    <div class="container mx-auto grid grid-cols-3 gap-4">
        <div class="flex flex-col">
            <a href="#/">Home</a>
            {#each items as item}
                <a href="#/{ item.link }">{ item.label }</a>
            {/each}
        </div>
        <div class="flex flex-col mb-4">
            <span>hello@blumilk.pl</span>
            <span>+48 555 555 555</span>

            <hr class="my-3 opacity-0">

            <div class="text-3xl">
                <i class="linkedin icon"></i>
                <i class="github square icon"></i>
                <i class="facebook square icon"></i>
                <i class="twitter square icon"></i>
            </div>
        </div>
        <div class="flex flex-col">
            <span><strong class="font-bold">Blumilk</strong> sp. z o.o.</span>
            <span>NIP 0000000000</span>

            <hr class="my-3 opacity-0">

            <span>ul. Sejmowa 5A/303</span>
            <span>59-220 Legnica</span>
            <span>Poland</span>
        </div>
    </div>
</div>

<script>
    export let items
</script>

<div class="container mx-auto mt-6 mb-24 flex items-center">
    <div class="font-bold text-xl">
        <a href="#/" class="flex items-center">
            <img src="./logo.png" alt="Blumilk" class="w-12 mr-3">
            Blumilk
        </a>
    </div>
    <div class="flex-1 flex justify-end items-center">
        {#each items as item}
            <div class="ml-8">
                <a href="#/{ item.link }">{ item.label }</a>
            </div>
        {/each}
    </div>
</div>

<script>
    export let items
</script>

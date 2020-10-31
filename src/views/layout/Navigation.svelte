<div class="container mx-auto mt-6 mb-24 flex items-center">
    <div class="font-bold text-xl">
        <a href="#/" class="flex items-center">
            Blumilk
        </a>
    </div>
    <div class="flex-1 flex justify-end items-center">
        {#each items as item}
            <div class="ml-8">
                {#if !item.external}
                    <a href="#/{ item.link }">{ item.label }</a>
                {:else}
                    <a href="{ item.link }" target="_blank">{ item.label }</a>
                {/if}
            </div>
        {/each}
    </div>
</div>

<script>
  export let items
</script>

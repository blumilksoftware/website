<script>
    export let metadata = {}
</script>

<svelte:head>
    {#if metadata.title !== 'Blumilk Software Development'}
        <title>{metadata.title} | Blumilk </title>
    {:else}
        <title>{metadata.title}</title>
    {/if}

</svelte:head>
<Section classes="{ classes }">
    <div class="flex-1">
        <div class="text-4xl font-bold">
            <slot name="header"/>
        </div>
        <div class="mt-8 text-xl text-gray-500">
            <slot name="description"/>
        </div>
    </div>
    {#if !disableColumns}
        <div class="flex-1">
            <slot name="content"/>
        </div>
    {/if}
</Section>

<script>
  import Section from './section.svelte'

  export let disableColumns = false
  export let classes = ''
</script>

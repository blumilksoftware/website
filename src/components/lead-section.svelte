<Section classes="{ classes }">
    <div class="md:flex-1 { headerClasses }">
        <div class="text-4xl font-bold">
            <slot name="header"/>
        </div>
        <div class="mt-8 text-lg text-gray-500">
            <slot name="description"/>
        </div>
    </div>
    {#if !disableColumns}
        <div class="md:flex-1 w-full { contentClasses }">
            <slot name="content"/>
        </div>
    {/if}
</Section>

<script>
  import Section from '@/components/section.svelte'

  export let disableColumns = false
  export let classes = ''
  export let headerClasses = ''
  export let contentClasses = ''
</script>

<Section classes="md:my-12 items-start" disableColumns="true">
    <div slot="header">{ $_('pages.about.references.header') }</div>
    <div slot="description" class="text-center lg:text-left lg:w-2/3">
        <p>
            { $_('pages.about.references.lead') }
            <a class="font-bold text-brand" href="https://clutch.co/profile/blumilk-0" target="_blank">Clutch</a>.
        </p>
    </div>
</Section>

<div class="container px-6 mx-auto flex justify-center items-center flex-col lg:flex-row py-4 md:mb-12 xl:mb-0" data-cy="references-images">
    {#each clients as client}
        <div class="flex-1">
            <img src="{ client.logo }" alt="{ client.name }" title="{ client.name }" class="mx-auto relative z-10 w-48">
        </div>
    {/each}
</div>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import clients from '@/assets/clients.js'
</script>

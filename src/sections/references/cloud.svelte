<Section classes="md:my-12 items-start">
    <div slot="header">{ $_('pages.references.cloud.header') }</div>
    <div slot="description" class="text-center lg:text-left">
        <p>
            { $_('pages.references.cloud.lead') }
            <a class="font-bold text-brand" href="https://clutch.co/profile/blumilk-0" target="_blank">Clutch</a>.
        </p>
    </div>
</Section>

<div class="container px-6 mx-auto grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-5" data-cy="references-images">
    {#each clients as client}
        <div class="text-center opacity-90 hover:opacity-100 transition duration-300">
            <img src="{ client.logo }" alt="{ client.name }" title="{ client.name }" class="mx-auto relative z-10 w-48">
        </div>
    {/each}
</div>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import clients from '@/assets/clients.js'
</script>

<Section classes="my-24 items-start" disableColumns="true">
    <div slot="header">{ $_('pages.about.references.header') }</div>
    <div slot="description" class="w-2/3">
        <p class="pr-4">
            { $_('pages.about.references.lead') }
            <a class="font-bold" href="https://clutch.co/profile/blumilk-0" target="_blank">Clutch</a>.
        </p>
        <div class="my-12 grid grid-cols-2 md:grid-cols-5 gap-4 md:mr-16 md:mb-0 items-center">
        </div>
    </div>
</Section>

<div class="container flex items-center justify-content w-full mx-auto text-gray-400 px-16 text-sm text-center md:text-left" data-cy="references-images">
    {#each clients as client}
        <div class="flex-1">
            <img src="{ client.logo }" alt="{ client.name }" title="{ client.name }" class="mx-auto relative z-10 w-32">
        </div>
    {/each}
</div>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import clients from '@/assets/clients.js'
</script>

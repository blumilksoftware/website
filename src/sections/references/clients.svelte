<Section classes="md:mt-24">
    <div slot="header">
        { $_('pages.references.clients.header') }
    </div>
    <div slot="description">
        { $_('pages.references.clients.lead') }
        <h2 class="text-3xl font-bold my-6 text-gray-700">{ $_('pages.references.sectors.header') }</h2>
        { $_('pages.references.sectors.lead') }
    </div>
    <div slot="content">
        <img class="px-4 py-8 sm:px-16 sm:py-8 md:px-12 xl:p-24 relative z-10 pointer-events-none" src="/images/illustrations/clients.svg" alt="{ $_('pages.references.clients.header') }" data-cy="rnd-image" title="{ $_('pages.references.clients.header') }">
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
</script>

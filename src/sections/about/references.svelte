<Section classes="my-24 items-start">
    <div slot="header">{ $_('pages.about.references.header') }</div>
    <div slot="description">
        <p class="pr-4">
            { $_('pages.about.references.lead') }
        </p>
        <div class="my-12 grid grid-cols-2 md:grid-cols-4 gap-4 md:mr-16 md:mb-0" data-cy="references-images">
            <img src="/images/clients/pwsz.png" alt="Państwowa Wyższa Szkoła Zawodowa im. Witelona w Legnicy"
                 class="mx-auto">
            <img src="/images/clients/insly.png" alt="Insly Ltd." class="mx-auto">
            <img src="/images/clients/iizi.png" alt="Iizi Polska" class="mx-auto">
            <img src="/images/clients/wmd.png" alt="WMD Software" class="mx-auto" data-cy="wmd-image">
        </div>
    </div>
    <div slot="content">
        {#each references as reference}
            <ReferenceBalloon name="{ reference.name }" icon="{ reference.icon }"
                              position="{ $_('pages.about.references.references.' + reference.id + '.position') }">
                { $_('pages.about.references.references.' + reference.id + '.quote') }
            </ReferenceBalloon>
        {/each}
    </div>
</Section>

{#if false}
    <div class="mt-12 container mx-auto flex justify-evenly">
        <div class="bg-white rounded-xl shadow-lg">
            <img src="/images/photos/placeholder.jpg" alt="Team #1" class="w-96 p-3">
        </div>
        <div class="bg-white rounded-xl shadow-lg">
            <img src="/images/photos/placeholder.jpg" alt="Team #2" class="w-96 p-3">
        </div>
        <div class="bg-white rounded-xl shadow-lg">
            <img src="/images/photos/placeholder.jpg" alt="Team #3" class="w-96 p-3">
        </div>
    </div>
{/if}

<script>
  import { _ } from 'svelte-i18n'
  import Section from '../../components/lead-section.svelte'
  import ReferenceBalloon from '../../components/reference.svelte'
  import references from '../../assets/references'
</script>

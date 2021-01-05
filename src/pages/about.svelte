<Section classes="items-start">
    <div slot="header">{ $_('pages.about.references.header') }</div>
    <div slot="description">
        <p class="pr-4">
            { $_('pages.about.references.lead') }
        </p>
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

<script>
  import { _ } from 'svelte-i18n'
  import Section from '../components/lead-section.svelte'
  import ReferenceBalloon from '../components/reference.svelte'
  import references from '../assets/references'
</script>

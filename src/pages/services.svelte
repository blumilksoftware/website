<Meta title={ $_('title.services') } description={ $_('description.services') }/>
<Section>
    <div slot="header">
        { $_('pages.services.r&d.header') }
    </div>
    <div slot="description">
        { $_('pages.services.r&d.lead') }
    </div>
    <div slot="content">
        <img class="p-24 relative z-10 pointer-events-none" src="/images/illustrations/rnd.svg" alt="{ $_('pages.services.r&d.header') }" data-cy="rnd-image"
                title="{ $_('pages.services.r&d.header') }">
    </div>
</Section>

<Section classes="lg:flex-row-reverse">
    <div slot="header">
        { $_('pages.services.web.header') }
    </div>
    <div slot="description">
        { $_('pages.services.web.lead') }
    </div>
    <div slot="content">
        <img class="p-24 relative z-10 pointer-events-none" src="/images/illustrations/web.svg" alt="{ $_('pages.services.web.header') }"
                title="{ $_('pages.services.web.header') }">
    </div>
</Section>

<Section>
    <div slot="header">
        { $_('pages.services.business.header') }
    </div>
    <div slot="description">
        { $_('pages.services.business.lead') }
    </div>
    <div slot="content">
        <img class="p-24 relative z-10 pointer-events-none" src="/images/illustrations/data.svg" alt="{ $_('pages.services.business.header') }"
                title="{ $_('pages.services.business.header') }">
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
</script>

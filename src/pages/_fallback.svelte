<Meta title={ $_('title.404') }/>
<MetaDescription description={ $_('title.404') } />
<Section disableColumns="true" classes="text-center">
    <div slot="header" class="text-6xl">{ $_('pages.404.header') }</div>
    <div slot="description">
        { $_('pages.404.lead') }
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
  import MetaDescription from '@/components/meta-description.svelte'
</script>

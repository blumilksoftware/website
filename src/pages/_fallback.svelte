<Section disableColumns="true" classes="text-center">
    <div slot="header" class="text-6xl">{ $_('pages.404.header') }</div>
    <div slot="description">
        { $_('pages.404.lead') }
    </div>
</Section>

<Meta {metadata}/>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '../components/lead-section.svelte'
  import Meta from '../components/meta-title.svelte'

  const metadata = {
    title: 'Page not found'
  }
</script>

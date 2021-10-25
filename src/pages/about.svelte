<Meta title={ $_('title.about') } description={ $_('description.about') }/>
<MetaTags/>
<BlumilkSection/>
<PhotosSection/>
<CountersSection/>
<ReferencesSection/>
<ToolsSection/>

<script>
  import { _ } from 'svelte-i18n'
  import BlumilkSection from '@/sections/about/blumilk.svelte'
  import PhotosSection from '@/sections/about/photos.svelte'
  import CountersSection from '@/sections/about/counters.svelte'
  import ReferencesSection from '@/sections/about/references.svelte'
  import ToolsSection from '@/sections/about/tools.svelte'
  import Meta from '@/components/meta-title.svelte'
  import { MetaTags } from 'svelte-meta-tags'
</script>

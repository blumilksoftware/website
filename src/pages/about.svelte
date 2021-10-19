<MetaTitle title={ $_('title.about') }/>
<MetaDescription description={ $_('description.about') } />
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
  import MetaTitle from '@/components/meta-title.svelte'
  import MetaDescription from '@/components/meta-description.svelte'
</script>

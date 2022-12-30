<Meta title={ $_('title.about') } description={ $_('description.about') }/>
<BlumilkSection/>
<PhotosSection/>
<CountersSection/>
<ToolsSection/>

<script>
  import { _ } from 'svelte-i18n'
  import BlumilkSection from '@/sections/about/blumilk.svelte'
  import PhotosSection from '@/sections/about/photos.svelte'
  import CountersSection from '@/sections/about/counters.svelte'
  import ToolsSection from '@/sections/about/tools.svelte'
  import Meta from '@/components/meta-title.svelte'
</script>

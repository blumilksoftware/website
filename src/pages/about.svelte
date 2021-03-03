<BlumilkSection/>
<PhotosSection/>
<CountersSection/>
<ReferencesSection/>
<ToolsSection/>
<Meta {metadata}/>

<script>
  import BlumilkSection from '../sections/about/blumilk.svelte'
  import PhotosSection from '../sections/about/photos.svelte'
  import CountersSection from '../sections/about/counters.svelte'
  import ReferencesSection from '../sections/about/references.svelte'
  import ToolsSection from '../sections/about/tools.svelte'
  import Meta from '../components/meta-title.svelte'

  const metadata = {
    title: 'About'
  }
</script>

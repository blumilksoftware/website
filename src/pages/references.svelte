<Meta title={ $_('title.references') } description={ $_('description.references') }/>
<CloudSection></CloudSection>
<div data-aos="fade-right">
<ClientsSection></ClientsSection>
</div>

<script>
  import { _ } from 'svelte-i18n'
  import CloudSection from '@/sections/references/cloud.svelte'
  import ClientsSection from '@/sections/references/clients.svelte'
  import Meta from '@/components/meta-title.svelte'
</script>

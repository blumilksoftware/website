<Meta title={ $_('title.career') }/>

<LeadSection classes="lg:flex-row-reverse">
    <div slot="header">
        <div class="text-sm font-normal uppercase opacity-75 mb-2">{ $_('pages.career.opening') }</div>
        { $_('pages.career.jobs.intern.header') }
    </div>
    <div slot="description">
        <p class="py-2">{ $_('pages.career.jobs.intern.description.1') }</p>
        <p class="py-2">{ $_('pages.career.jobs.intern.description.2') }</p>
        <p class="py-2">{ $_('pages.career.jobs.intern.description.3') }</p>
    </div>
    <div slot="content">
        <img class="px-12 lg:px-24" src="/images/illustrations/intern.png" alt="{ $_('pages.career.header') }" title="{ $_('pages.career.header') }">
    </div>
</LeadSection>

<Ribbon/>
<Gdpr/>

<script>
  import { _ } from 'svelte-i18n'
  import LeadSection from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
  import Ribbon from '@/sections/contact.svelte'
  import Gdpr from '@/sections/gdpr.svelte'

  export let email = 'career@blumilk.pl'
</script>

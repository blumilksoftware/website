<Meta title={ $_('title.partnerships') } description={ $_('description.partnerships') }/>

{#each partners as partner, i}
    <Section classes="{ i % 2 !== 0 ? 'lg:flex-row-reverse' : '' } lg:my-12">
        <div slot="header">
            { $_(partner.header) }
        </div>
        <div slot="description">
            { $_(partner.lead) }
        </div>
        <div slot="content">
            <img class="p-12 relative z-10 pointer-events-none w-4/5 sm:w-3/5 md:w-3/4 xl:w-1/2 m-auto" src="{ partner.logo }" alt="{ $_(partner.header) }" title="{ $_(partner.header) }">
        </div>
    </Section>
{/each}

<script>
  import { _ } from 'svelte-i18n'

  import partners from '@/assets/partners.js'
  import Section from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
</script>

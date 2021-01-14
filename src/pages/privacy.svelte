<LeadSection>
    <div slot="header">
        { $_('pages.privacy.header') }
    </div>
    <div slot="description" class="text-base">
        { $_('pages.privacy.lead') }

        {#each $_('pages.privacy.qa') as qa}
            <h3 class="mt-4 mb-1 text-gray-600 font-bold text-lg">{ qa.question }</h3>
            {@html linker.link(qa.answer) }
        {/each}
    </div>
    <div slot="content">
        <img class="p-24" src="/images/privacy.png" alt="{ $_('pages.privacy.header') }"
             title="{ $_('pages.privacy.header') }">
    </div>
</LeadSection>

<script>
  import { _ } from 'svelte-i18n'
  import LeadSection from '../components/lead-section.svelte'

  export let linker = new Autolinker({
    className: 'text-blue-500'
  })
</script>

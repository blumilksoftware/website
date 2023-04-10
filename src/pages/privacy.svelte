<Meta title={ $_('title.privacy') } description={ $_('description.privacy') }/>
<LeadSection>
    <div slot="header" data-cy="privacy-policy-header">
        { $_('pages.privacy.header') }
    </div>
    <div slot="description" class="text-base">
        { $_('pages.privacy.lead') }

        <h3 class="mt-4 mb-1 text-gray-600 font-bold text-lg">{ $_('pages.privacy.qa.general.question') }</h3>
        {@html linker.link($_('pages.privacy.qa.general.answer')) }

        <h3 class="mt-4 mb-1 text-gray-600 font-bold text-lg">{ $_('pages.privacy.qa.purpose.question') }</h3>
        {@html linker.link($_('pages.privacy.qa.purpose.answer')) }

        <h3 class="mt-4 mb-1 text-gray-600 font-bold text-lg">{ $_('pages.privacy.qa.questions.question') }</h3>
        {@html linker.link($_('pages.privacy.qa.questions.answer')) }
    </div>
    <div slot="content">
        <img class="px-4 py-16 sm:px-16 md:px-12 xl:px-36 relative z-10 pointer-events-none" src="/images/illustrations/privacy.svg" alt="{ $_('pages.privacy.header') }"
             title="{ $_('pages.privacy.header') }">
    </div>
</LeadSection>

<script>
  import { _ } from 'svelte-i18n'
  import LeadSection from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'

  export let linker = new Autolinker({
    className: 'text-brand',
  })
</script>

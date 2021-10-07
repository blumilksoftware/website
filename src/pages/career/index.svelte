<Meta title={ $_('title.career') }/>

<LeadSection>
    <div slot="header">
        { $_('pages.career.header') }
    </div>
    <div slot="description">
        {#if jobs.length === 0}
            { $_('pages.career.excuse') }
        {:else}
            { $_('pages.career.lead') }

            <div class="m-12 flex flex-row gap-2">
                {#each jobs as job}
                    <a href="{ $url(job.url) }" class="text-center px-4 py-2 mt-1 block w-full rounded-md bg-brand hover:bg-blue-500 text-white">
                        { $_(job.name) }
                    </a>
                {/each}
            </div>
        {/if}
    </div>
    <div slot="content">
        <img class="px-12 lg:px-24" src="/images/illustrations/cv.png" alt="{ $_('pages.career.header') }"
                title="{ $_('pages.career.header') }">
    </div>
</LeadSection>

<Gdpr/>

<script>
  import { _ } from 'svelte-i18n'
  import { url } from '@roxi/routify'

  import jobs from '@/assets/jobs.js'
  import LeadSection from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
  import Gdpr from '@/sections/gdpr.svelte'
</script>

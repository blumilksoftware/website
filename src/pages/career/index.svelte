<Meta title={ $_('title.career') }/>

<LeadSection>
    <div slot="header">
        { $_('pages.career.header') }
    </div>
    <div class="w-full" slot="description">
        {#if jobs.length === 0}
            { $_('pages.career.excuse') }
        {:else}
            { $_('pages.career.lead') }

            <div class="mt-12 sm:m-12 flex flex-row gap-2">
                {#each jobs as job}
                    <a href="{ $url(job.url) }" class="flex justify-center text-center items-center w-full py-2 px-2 rounded-md text-white bg-brand hover:bg-blue-500">
                        { $_(job.name) }
                    </a>
                {/each}
            </div>
        {/if}
    </div>
    <div slot="content">
        <img class="px-12 lg:px-24 relative z-10" src="/images/illustrations/cv.png" alt="{ $_('pages.career.header') }"
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

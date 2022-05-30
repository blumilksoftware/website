<Meta title={ $_('title.career') }/>

<LeadSection classes="lg:flex-row-reverse">
    <div slot="header">
        <div class="text-sm font-normal uppercase opacity-75 mb-2">{ $_('pages.career.opening') }</div>
        { $_('pages.career.jobs.developer.header') }
    </div>
    <div slot="description">
        <p class="py-2">{ $_('pages.career.jobs.developer.description.1') }</p>
    </div>
    <div slot="content">
        <img class="px-4 py-8 sm:px-16 sm:py-8 md:px-12 xl:p-24 relative z-10 pointer-events-none" src="/images/illustrations/developer.svg" alt="{ $_('pages.career.header') }" title="{ $_('pages.career.header') }">
    </div>
</LeadSection>

<Section classes="mt-12">
    <LeadSection disableColumns="true" classes="md:-ml-4">
        <div slot="header">
            { $_('pages.career.requirements-header') }
        </div>
        <div slot="description" class="text-lg lg:text-base">
            { $_('pages.career.requirements-label') }
            <ul class="list-disc leading-loose pl-4 pt-4">
                {#each careers.requirements as career}
                    <li>{ $_(career.requirement) }</li>
                {/each}
            </ul>
        </div>
    </LeadSection>
    <LeadSection disableColumns="true" classes="md:-mr-4">
        <div slot="header">
            { $_('pages.career.stack-header') }
        </div>
        <div slot="description" class="text-lg lg:text-base" data-cy="stack-list">
            { $_('pages.career.stack-label') }
            <ul class="list-disc leading-loose pl-4 pt-4">
                {#each careers.stack as stack}
                    <li>
                        <span class="ml-2">
                            { $_(stack.name) }
                            <span class="opacity-75">{ $_(stack.description) }</span>
                        </span>
                    </li>
                {/each}
            </ul>
        </div>
    </LeadSection>
</Section>

<Ribbon/>
<Gdpr/>

<script>
  import { _ } from 'svelte-i18n'
  import LeadSection from '@/components/lead-section.svelte'
  import Section from '@/components/section.svelte'
  import Meta from '@/components/meta-title.svelte'
  import Gdpr from '@/sections/gdpr.svelte'
  import Ribbon from '@/sections/contact.svelte'
  import careers from '@/assets/careers.js'
</script>

<LeadSection>
    <div slot="header">
        { $_('pages.career.header') }
    </div>
    <div slot="description">
        { $_('pages.career.lead') }
    </div>
    <div slot="content">
        <img class="px-24" src="/images/cv.png" alt="{ $_('pages.career.header') }"
             title="{ $_('pages.career.header') }">
    </div>
</LeadSection>

<Section classes="mt-12">
    <LeadSection disableColumns="true">
        <div slot="header">
            { $_('pages.career.requirements-header') }
        </div>
        <div slot="description" class="text-base">
            { $_('pages.career.requirements-label') }
            <ul class="list-disc leading-loose pl-4 pt-4">
                {#each careers.requirements as career}
                    <li>{ $_(career.requirement) }</li>
                {/each}
            </ul>
        </div>
    </LeadSection>
    <LeadSection disableColumns="true">
        <div slot="header">
            { $_('pages.career.stack-header') }
        </div>
        <div slot="description" class="text-base">
            { $_('pages.career.stack-label') }
            <ul class="leading-loose pl-4 pt-4">
                {#each careers.stack as stack}
                    <li>
                        <i class="large { stack.icon }"></i>
                        { $_(stack.name) }
                        <span class="opacity-75">{ $_(stack.description) }</span>
                    </li>
                {/each}
            </ul>
        </div>
    </LeadSection>
</Section>

<Ribbon>
    <div class="text-lg pl-8 text-center">
        { $_('pages.career.application.1') }
        <a href="mailto:{email}" class="font-bold">{email}</a>
        { $_('pages.career.application.2') }
    </div>
</Ribbon>

<div class="container mx-auto opacity-50 px-16 pt-12 text-sm">
    { $_('pages.career.gdpr') }
</div>

<script>
  import { _ } from 'svelte-i18n'
  import careers from '../assets/careers'
  import LeadSection from '../components/lead-section.svelte'
  import Section from '../components/section.svelte'
  import Ribbon from '../components/ribbon.svelte'

  export let email = 'career@blumilk.pl'
</script>

<Meta title={ $_('title.career') }/>

<LeadSection classes="lg:flex-row-reverse">
    <div slot="header">
        Inżynier oprogramowania
    </div>
    <div slot="description">
        Poszukujemy programistów z doświadczeniem zawodowym w dziedzinie projektowania i wytwarzania aplikacji internetowych. Naszą podstawową technologią jest PHP i Laravel, ale jesteśmy otwarci na intertechnologiczny dialog.
    </div>
    <div slot="content">
        <img class="px-12 lg:px-24" src="/images/illustrations/developer.png" alt="{ $_('pages.career.header') }" title="{ $_('pages.career.header') }">
    </div>
</LeadSection>

<Section classes="mt-12">
    <LeadSection disableColumns="true" classes="md:-ml-4">
        <div slot="header">
            { $_('pages.career.requirements-header') }
        </div>
        <div slot="description" class="text-lg lg:text-base">
            { $_('pages.career.requirements-label') }
        </div>
    </LeadSection>
    <LeadSection disableColumns="true" classes="md:-mr-4">
        <div slot="header">
            { $_('pages.career.stack-header') }
        </div>
        <div slot="description" class="text-lg lg:text-base" data-cy="stack-list">
            { $_('pages.career.stack-label') }
        </div>
    </LeadSection>
</Section>

<Ribbon>
    <div class="text-lg text-center">
        { $_('pages.career.application.1') }
        <a href="mailto:{email}" class="font-bold">{email}</a>
        { $_('pages.career.application.2') }
    </div>
</Ribbon>

<Gdpr/>

<script>
  import { _ } from 'svelte-i18n'
  import LeadSection from '@/components/lead-section.svelte'
  import Section from '@/components/section.svelte'
  import Meta from '@/components/meta-title.svelte'
  import Ribbon from '@/components/ribbon.svelte'
  import Gdpr from '@/sections/gdpr.svelte'

  export let email = 'career@blumilk.pl'
</script>

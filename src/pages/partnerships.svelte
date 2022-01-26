<Meta title={ $_('title.services') } description={ $_('description.services') }/>
<Section>
    <div slot="header">
        { $_('pages.partnerships.soda.header') }
    </div>
    <div slot="description">
        { $_('pages.partnerships.soda.lead') }
    </div>
    <div slot="content">
        <img class="p-12 relative z-10 pointer-events-none w-3/4 m-auto" src="/images/partnerships/soda-logo.png" alt="{ $_('pages.services.r&d.header') }" data-cy="rnd-image"
                title="{ $_('pages.services.r&d.header') }">
    </div>
</Section>

<Section classes="lg:flex-row-reverse">
    <div slot="header">
        { $_('pages.partnerships.pwsz.header') }
    </div>
    <div slot="description">
        { $_('pages.partnerships.pwsz.lead') }
    </div>
    <div slot="content">
        <img class="p-12 relative z-10 pointer-events-none w-3/4 m-auto" src="/images/partnerships/pwsz.png" alt="{ $_('pages.services.web.header') }"
                title="{ $_('pages.services.web.header') }">
    </div>
</Section>

<Section>
    <div slot="header">
        { $_('pages.partnerships.laravel-meetup.header') }
    </div>
    <div slot="description">
        { $_('pages.partnerships.laravel-meetup.lead') }
    </div>
    <div slot="content">
        <img class="p-12 relative z-10 pointer-events-none w-3/4 m-auto" src="/images/partnerships/laravel-meetup.jpeg" alt="{ $_('pages.services.web.header') }"
                title="{ $_('pages.services.web.header') }">
    </div>
</Section>

<Section classes="lg:flex-row-reverse">
    <div slot="header">
        { $_('pages.partnerships.phpers.header') }
    </div>
    <div slot="description">
        { $_('pages.partnerships.phpers.lead') }
    </div>
    <div slot="content">
        <img class="p-12 relative z-10 pointer-events-none w-3/4 m-auto" src="/images/partnerships/phpers.png" alt="{ $_('pages.services.web.header') }"
                title="{ $_('pages.services.web.header') }">
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
</script>

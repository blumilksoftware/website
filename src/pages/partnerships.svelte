<Meta title={ $_('title.partnerships') } description={ $_('description.partnerships') }/>
<Section>
    <div slot="header">
        { $_('pages.partnerships.soda.header') }
    </div>
    <div slot="description">
        { $_('pages.partnerships.soda.lead') }
    </div>
    <div slot="content">
        <img class="p-12 relative z-10 pointer-events-none w-4/5 sm:w-3/5 md:w-3/4 xl:w-1/2 m-auto" src="/images/partnerships/soda-logo.png" alt="{ $_('pages.services.r&d.header') }" data-cy="rnd-image"
                title="{ $_('pages.services.r&d.header') }">
    </div>
</Section>

<Section classes="lg:flex-row-reverse lg:mt-12">
    <div slot="header">
        { $_('pages.partnerships.cwup.header') }
    </div>
    <div slot="description">
        { $_('pages.partnerships.cwup.lead') }
    </div>
    <div slot="content">
        <img class="p-12 relative z-10 pointer-events-none w-4/5 sm:w-3/5 xl:w-1/2 m-auto" src="/images/partnerships/pwsz.png" alt="{ $_('pages.services.web.header') }"
                title="{ $_('pages.services.web.header') }">
    </div>
</Section>

<Section classes="lg:mt-12">
    <div slot="header">
        { $_('pages.partnerships.laravel-meetup.header') }
    </div>
    <div slot="description">
        { $_('pages.partnerships.laravel-meetup.lead') }
    </div>
    <div slot="content">
        <img class="p-6 relative z-10 pointer-events-none w-4/5 sm:w-3/5 md:w-3/4 xl:w-1/2 m-auto" src="/images/partnerships/laravel-meetup.png" alt="{ $_('pages.services.web.header') }"
                title="{ $_('pages.services.web.header') }">
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
</script>

<Meta title={ $_('title.index') } description={ $_('description.index') }/>
<Section>
    <div slot="header" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl">
        { $_('pages.home.hero.prefix') }
        <span class="text-brand">{ $_('pages.home.hero.focus') }</span>
        { $_('pages.home.hero.suffix') }
    </div>
    <div slot="description" class="text-xl">
        { $_('pages.home.hero.about') }
    </div>
    <div slot="content">
        <img class="px-4 py-8 sm:px-16 sm:py-8 md:px-12 xl:px-48 xl:py-24 relative z-10 pointer-events-none" src="/images/illustrations/software.svg"
             alt="{ $_('pages.home.hero.prefix') } { $_('pages.home.hero.focus') } { $_('pages.home.hero.suffix') }"
             title="{ $_('pages.home.hero.prefix') } { $_('pages.home.hero.focus') } { $_('pages.home.hero.suffix') }">
    </div>
</Section>

<Section classes="lg:flex-row-reverse">
    <div slot="header">
        { $_('pages.home.academic.header') }
    </div>
    <div slot="description">
        <div class="text-xl text-gray-500">
            <p class="pb-4">{ $_('pages.home.academic.content.0') }</p>
            <p class="pb-4">{ $_('pages.home.academic.content.1') }</p>
            <p class="pb-4">{ $_('pages.home.academic.content.2') }</p>
        </div>
    </div>
    <div slot="content">
        <img class="px-4 py-8 sm:px-16 sm:py-8 md:px-12 xl:p-24 relative z-10 pointer-events-none" src="/images/illustrations/uni.svg" alt="{ $_('pages.home.academic.header') }"
             title="{ $_('pages.home.academic.header') }">
    </div>
</Section>

<Section>
    <div slot="header">
        { $_('pages.home.tools.header') }
    </div>
    <div slot="description">
        <div class="text-xl text-gray-500">
            <p class="pb-4">{ $_('pages.home.tools.content.0') }</p>
            <p class="pb-4">{ $_('pages.home.tools.content.1') }</p>
        </div>
    </div>
    <div slot="content">
        <img class="px-4 py-8 sm:px-16 sm:py-8 md:px-12 xl:p-24 relative z-10 pointer-events-none" src="/images/illustrations/tools.svg" alt="{ $_('pages.home.tools.header') }"
             title="{ $_('pages.home.tools.header') }">
    </div>
</Section>

<Section classes="lg:flex-row-reverse">
    <div slot="header">
        { $_('pages.home.projects.header') }
    </div>
    <div slot="description">
        <div class="text-xl text-gray-500">
            <p class="pb-4">{ $_('pages.home.projects.content.0') }</p>
            <p class="pb-4">{ $_('pages.home.projects.content.1') }</p>
        </div>
    </div>
    <div slot="content">
        <img class="px-4 py-8 sm:px-16 sm:py-8 md:px-12 xl:p-24 relative z-10 pointer-events-none" src="/images/illustrations/projects.svg" alt="{ $_('pages.home.projects.header') }" title="{ $_('pages.home.projects.header') }">
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
</script>

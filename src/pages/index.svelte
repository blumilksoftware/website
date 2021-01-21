<Section classes="lg:-mt-48 lg:h-screen">
    <div slot="header" class="text-5xl lg:text-6xl">
        { $_('pages.home.hero.prefix') }
        <span class="text-blue-500">{ $_('pages.home.hero.focus') }</span>
        { $_('pages.home.hero.suffix') }
    </div>
    <div slot="description" class="mt-16">
        { $_('pages.home.hero.about') }
    </div>
    <div slot="content">
        <img class="px-12 lg:p-12" src="/images/software.png"
             alt="{ $_('pages.home.hero.prefix') } { $_('pages.home.hero.focus') } { $_('pages.home.hero.suffix') }"
             title="{ $_('pages.home.hero.prefix') } { $_('pages.home.hero.focus') } { $_('pages.home.hero.suffix') }">
    </div>
</Section>

<Section classes="lg:flex-row-reverse">
    <div slot="header">
        { $_('pages.home.academic.header') }
    </div>
    <div slot="description">
        <div class="mt-16 text-xl text-gray-500">
            {#each $_('pages.home.academic.content') as item}
                <p class="pb-4">
                    { item }
                </p>
            {/each}
        </div>
    </div>
    <div slot="content">
        <img class="px-12 lg:p-12" src="/images/uni.png" alt="{ $_('pages.home.academic.header') }"
             title="{ $_('pages.home.academic.header') }">
    </div>
</Section>

<Section>
    <div slot="header">
        { $_('pages.home.tools.header') }
    </div>
    <div slot="description">
        <div class="mt-16 text-xl text-gray-500">
            {#each $_('pages.home.tools.content') as item}
                <p class="pb-4">
                    { item }
                </p>
            {/each}
        </div>
    </div>
    <div slot="content">
        <img class="px-12 lg:p-12" src="/images/tools.png" alt="{ $_('pages.home.tools.header') }"
             title="{ $_('pages.home.tools.header') }">
    </div>
</Section>

<Section classes="lg:flex-row-reverse">
    <div slot="header">
        { $_('pages.home.projects.header') }
    </div>
    <div slot="description">
        <div class="mt-16 text-xl text-gray-500">
            {#each $_('pages.home.projects.content') as item}
                <p class="pb-4">
                    { item }
                </p>
            {/each}
        </div>
    </div>
    <div slot="content">
        <img class="px-12 lg:p-12" src="/images/projects.png" alt="{ $_('pages.home.projects.header') }"
             title="{ $_('pages.home.projects.header') }">
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '../components/lead-section.svelte'
</script>

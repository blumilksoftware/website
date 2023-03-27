<Section classes="mt-12 flex-row-reverse">
  <div slot="header">{ $_('pages.about.stack.header') }</div>
  <div slot="description">
    <p class="lg:pr-12 pb-4">{ $_('pages.about.stack.content.0') }</p>
    <p class="lg:pr-12 pb-4">{ $_('pages.about.stack.content.1') }</p>
    <p class="lg:pr-12 pb-4">{ $_('pages.about.stack.content.2') }</p>
  </div>
  <div slot="content" class="p-4 relative z-10 pointer-events-none">
    <div class="mx-16 grid grid-cols-8 gap-4 mt-12">
      {#each tools as tool}
        <div class="{ tool.classes }" title="{ tool.name }">
          <img class="w-full" src="{ tool.logo }" alt="{ tool.name }" title="{ tool.name }">
        </div>
      {/each}
    </div>
  </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import tools from '@/assets/tools.js'
</script>

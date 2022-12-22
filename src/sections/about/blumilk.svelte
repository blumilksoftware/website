<Section disableColumns="true">
    <div slot="header">{ $_('pages.about.blumilk.header') }</div>
    <div slot="description" class="lg:flex text-lg">
        <div class="flex-1">
              <p class="lg:pr-12 pb-4">{ $_('pages.about.blumilk.company.0') }</p>
              <p class="lg:pr-12 pb-4">{ $_('pages.about.blumilk.company.1') }</p>
              <p class="lg:pr-12 pb-4">{ $_('pages.about.blumilk.company.2') }</p>
        </div>
        <div class="flex-1">
            <div class="lg:hidden text-center font-gray-100 py-4 mb-4">
                <div class="icon m-auto">
                    <FaAsterisk />
                </div>
            </div>
            <p class="lg:pr-12 pb-4">{ $_('pages.about.blumilk.team.0') }</p>
            <p class="lg:pr-12 pb-4">{ $_('pages.about.blumilk.team.1') }</p>
            <p class="lg:pr-12 pb-4">{ $_('pages.about.blumilk.team.2') }</p>
            <p class="lg:pr-12 pb-4">{ $_('pages.about.blumilk.team.3') }</p>
        </div>
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '@/components/lead-section.svelte'
  import FaAsterisk from 'svelte-icons/fa/FaAsterisk.svelte'
</script>

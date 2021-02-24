<Section disableColumns="true">
    <div slot="header">{ $_('pages.about.blumilk.header') }</div>
    <div slot="description" class="lg:flex text-lg">
        <div class="flex-1">
            {#each $_('pages.about.blumilk.company') as item}
                <p class="lg:pr-12 pb-4">
                    { item }
                </p>
            {/each}
        </div>
        <div class="flex-1">
            <div class="lg:hidden text-center font-gray-100 py-4 mb-4">
                <i class="asterisk icon" data-cy="asterisk-icon"></i>
            </div>
            {#each $_('pages.about.blumilk.team') as item}
                <p class="lg:pr-12 pb-4">
                    { item }
                </p>
            {/each}
        </div>
    </div>
</Section>

<script>
    import {_} from 'svelte-i18n'
    import Section from '../../components/lead-section.svelte'
</script>

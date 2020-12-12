<div class="container mx-auto mt-6 mb-36 flex items-center">
    <div class="text-2xl">
        <a href="{ $url('/') }" class="flex items-center">
            <img src="./logo.png" alt="Blumilk" class="w-12 mr-3">
            Blumilk
        </a>
    </div>
    <div class="flex-1 flex justify-end items-center">
        {#each items as item}
            <div class="lowercase ml-8">
                {#if !item.external}
                    <a href="{ $url(item.link) }">{ $_(item.label) }</a>
                {:else}
                    <a href="{ item.link }" target="_blank">{ $_(item.label) }</a>
                {/if}
            </div>
        {/each}
        <div class="ml-8">
            <img class="w-8 cursor-pointer" on:click={ switchLocale } src="{ $_('locale.flag') }" alt="$_('locale.language')"
                 title="{ $_('locale.language') }">
        </div>
    </div>
</div>

<script>
  import { url } from '@sveltech/routify'
  import { _, locale } from 'svelte-i18n'

  function switchLocale () {
    locale.set($_('locale.code'))
  }

  export let items
</script>

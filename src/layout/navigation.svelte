<div class="container mx-auto mt-6 mb-36 flex items-center z-10">
    <div class="text-2xl">
        <a href="{ $url('/') }" class="flex font-bold items-center">
            <img src="./logo.png" alt="Blumilk" class="w-12 mr-3">
            Blumilk
            <span id="cursor" class="text-blue-500">_</span>
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

<style>
    #cursor {
        -webkit-animation: blink 1.5s infinite;
    }

    @-webkit-keyframes blink {
        0% {opacity: 1}
        50% {opacity: 0}
        100% {opacity: 1}
    }
</style>
<div class="fixed left-0 right-0 py-4 z-10 bg-background shadow-sm">
    <div class="md:container mx-auto flex items-center px-6">
        <div class="text-2xl">
            <a href="{ $url('./') }" class="flex font-bold items-center">
                <img src="/logo.svg" alt="Blumilk" class="w-12 mr-3">
                blumilk
                <span id="cursor" class="text-brand">_</span>
            </a>
        </div>
        <div class="flex-1 justify-end items-center hidden md:flex">
            {#each items as item}
                <div class="lowercase ml-8">
                    {#if !item.external}
                        <a href="{ $url(item.link) }" data-cy={$_(item.label)}>{ $_(item.label) }</a>
                    {:else}
                        <a href="{ item.link }" target="_blank" data-cy={$_(item.label)}>{ $_(item.label) }</a>
                    {/if}
                </div>
            {/each}
            <div class="ml-8">
                <img class="w-6 cursor-pointer" on:click={ switchLocale } src="{ $_('locale.flag') }" data-cy={$_('locale.language')}
                     alt="{ $_('locale.language') }"
                     title="{ $_('locale.language') }">
            </div>
        </div>
        <div class="flex-grow cursor-pointer text-right md:hidden" on:click={ switchMenu }>
            <i class="large bars icon" data-cy="menu-bars"></i>
        </div>
    </div>
</div>
<div class="mb-48"></div>

{#if show}
    <div class="md:hidden fixed w-full h-full flex flex-col justify-center items-center bg-white bg-opacity-95 p-4 z-20"
         on:click={ switchMenu }>
        <div class="flex flex-col w-full text-center">
            <a href="{ $url('./') }" class="mx-auto mb-12">
                <img src="/logo.svg" alt="Blumilk" class="w-24">
            </a>
            {#each items as item}
                <div class="lowercase text-center p-2 hover:bg-blue-400 hover:bg-opacity-25">
                    {#if !item.external}
                        <a href="{ $url(item.link) }">{ $_(item.label) }</a>
                    {:else}
                        <a href="{ item.link }" target="_blank">{ $_(item.label) }</a>
                    {/if}
                </div>
            {/each}
            <div class="flex text-center p-2 hover:bg-blue-400 hover:bg-opacity-25 items-center justify-center cursor-pointer"
                 on:click={ switchLocale }>
                <img class="w-6 mx-2" src="{ $_('locale.flag') }" alt="{ $_('locale.language')}"
                     title="{ $_('locale.language') }"> { $_('locale.language') }
            </div>
        </div>
    </div>
{/if}

<script>
  import { url } from '@roxi/routify'
  import { _, locale } from 'svelte-i18n'

  function switchLocale () {
    locale.set($_('locale.code'))
  }

  function switchMenu () {
    show = !show
  }

  export let items
  export let show = false
</script>

<style>
    #cursor {
        -webkit-animation: blink 1.5s infinite;
    }

    @-webkit-keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>

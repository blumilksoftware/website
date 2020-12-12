<div class="bg-blue-500 text-white mt-24 p-12 text-sm leading-relaxed z-30 shadow-lg">
    <div class="container mx-auto grid grid-cols-3 gap-4">
        <div class="flex flex-col">
            <a href="{ $url('/') }">{ $_('navigation.home') }</a>
            {#each items as item}
                {#if !item.external}
                    <a href="{ $url(item.link) }">{ $_(item.label) }</a>
                {:else}
                    <a href="{ item.link }" target="_blank">{ $_(item.label) }</a>
                {/if}
            {/each}
        </div>
        <div class="flex flex-col mb-4">
            {#each contact.emails as email}
                <span><a href="mailto: { email }">{ email }</a></span>
            {/each}
            <hr class="my-3 opacity-0">
            <div class="text-3xl">
                {#each socials as social}
                    <a href="{ social.url }" target="_blank" title="{ social.name }">
                        <i class="{ social.icon }"></i>
                    </a>
                {/each}
            </div>
        </div>
        <div class="flex flex-col">
            <span><strong class="font-bold">{ contact.name }</strong> { contact.form }</span>
            <span>NIP { contact.nip }</span>
            <hr class="my-3 opacity-0">
            <span>{ contact.address }</span>
            <span>{ contact.city }, { contact.country }</span>
        </div>
    </div>
</div>

<script>
  import { url } from '@sveltech/routify'
  import { _ } from 'svelte-i18n'

  export let items
  export let socials
  export let contact
</script>

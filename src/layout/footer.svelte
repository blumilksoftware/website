<div class="bg-blue-500 text-white mt-24 p-12 text-sm leading-relaxed z-30 shadow-lg">
    <div class="container mx-auto grid grid-cols-4 gap-4">
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
            <div><strong class="font-bold">{ contact.name }</strong> { contact.form }</div>
            <div>NIP { contact.nip }</div>
            <hr class="my-3 opacity-0">
            <div>{ contact.address }</div>
            <div>{ contact.city }, { contact.country }</div>
        </div>
        <div class="flex flex-col">
            <div>
                { $_('footer.illustrated') }
                <a href="https://undraw.co/">{ $_('footer.undraw') }</a>
            </div>
            <div>
                { $_('footer.built') }
                <a href="https://svelte.dev/" target="_blank">{ $_('footer.svelte') }</a>
                { $_('footer.and') }
                <a href="https://tailwindcss.com/" target="_blank">{ $_('footer.tailwind') }</a>
            </div>
            <div>
                { $_('footer.hosted') }
                <a href="https://github.com/blumilksoftware/blumilk-website" target="_blank">{ $_('footer.github') }</a>
            </div>
            <hr class="my-3 opacity-0">
            <div>Blumilk 2021</div>
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

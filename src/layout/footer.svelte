<div class="bg-blue-400 text-white mt-24 p-4 text-sm z-30 shadow-lg">
    <div class="container mx-auto grid grid-cols-3 gap-4">
        <div class="flex flex-col">
            {#each contact.emails as email}
                <span><a href="mailto:{ email }">{ email }</a></span>
            {/each}
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
        </div>
        <div class="flex flex-col">
            <div>
                <strong class="font-bold">{ contact.name }</strong> { contact.form }
                <span class="ml-2">NIP { contact.nip }</span>
            </div>
            <div>{ contact.address }</div>
            <div>{ contact.city }, { contact.country }</div>
        </div>
    </div>
</div>

<div class="bg-blue-500 text-white px-12 py-2 text-sm z-30 shadow-lg">
    <div class="container mx-auto flex items-center">
        <div>
            <span class="mr-2">Blumilk 2021</span>
            <a href="https://github.com/blumilksoftware/blumilk-website/blob/master/licence.md" target="_blank">
                <i class="horizontally flipped copyright outline icon"></i>
            </a>
            <a href="{ $url('./privacy') }">{ $_('footer.privacy') }</a>
        </div>
        <div class="flex-grow text-right">
            <div class="text-3xl">
                {#each socials as social}
                    <a href="{ social.url }" target="_blank" title="{ social.name }">
                        <i class="{ social.icon }"></i>
                    </a>
                {/each}
            </div>
        </div>
    </div>
</div>

<script>
  import { url } from '@roxi/routify'
  import { _ } from 'svelte-i18n'

  export let socials
  export let contact
</script>

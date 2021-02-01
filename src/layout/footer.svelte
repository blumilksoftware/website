<footer class="mt-12 z-20">
    <div class="container mx-auto py-8 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2 text-lg">
            {#each socials as social}
                <a href="{ social.url }" target="_blank" class="text-gray-500 hover:text-gray-900">
                    <span class="sr-only">{ social.name }</span>
                    <i class="{ social.icon }"></i>
                </a>
            {/each}
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
            <p class="text-center text-base text-gray-700">
                <span>&copy; { year } Blumilk</span>
                <a href="{ $url('./privacy') }" class="hover:text-gray-900 mx-4">{ $_('footer.privacy') }</a>
                <a href="{ $url('./company') }" class="hover:text-gray-900">{ $_('footer.company') }</a>
            </p>
        </div>
    </div>
</footer>

<script>
  import { url } from '@roxi/routify'
  import { _ } from 'svelte-i18n'

  export let socials
  export let year = new Date().getFullYear()
</script>

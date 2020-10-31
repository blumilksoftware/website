<div class="bg-gray-800 text-white mt-24 p-12 text-sm leading-relaxed z-30">
    <div class="container mx-auto grid grid-cols-3 gap-4">
        <div class="flex flex-col">
            <a href="#/">Home</a>
            {#each items as item}
                {#if !item.external}
                    <a href="#/{ item.link }">{ item.label }</a>
                {:else}
                    <a href="{ item.link }" target="_blank">{ item.label }</a>
                {/if}
            {/each}
        </div>
        <div class="flex flex-col mb-4">
            <span><a href="mailto: { contact.email }">{ contact.email }</a></span>
            <span>{ contact.phone }</span>
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
            <span>{ contact.city }</span>
            <span>{ contact.country }</span>
        </div>
    </div>
</div>

<script>
  export let items
  export let socials
  export let contact = {
    name: 'Blumilk',
    form: 'sp. z o.o.',
    email: 'hello@blumilk.pl',
    phone: '+48 555 555 555',
    nip: '6912551135',
    address: 'ul. rtm. Witolda Pileckiego 14',
    city: '59-220 Legnica',
    country: 'Poland'
  }
</script>

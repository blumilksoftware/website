<Section classes="mb-24">
    <div slot="header">
        { $_('pages.contact.header') }
    </div>
    <div slot="description">
        <p class="pb-4">
            { $_('pages.contact.lead') }
        </p>
        <form class="text-base" target="_blank" id="contact" action="{ url }">
            <div class="px-12 py-4">
                <label for="{ questionName }" class="block text-gray-700"></label>
                <textarea rows="8" name="{ questionName }" id="{ questionName }"
                          placeholder="{ $_('pages.contact.message') }"
                          class="px-4 py-2 mt-1 block w-full shadow-sm border-gray-300 rounded-md"></textarea>
            </div>
            <div class="flex">
                <div class="flex-1 pl-12 pr-4 py-2">
                    <label for="{ emailName }" class="block text-gray-700"></label>
                    <input type="text" name="{ emailName }" id="{ emailName }"
                           placeholder="{ $_('pages.contact.email') }"
                           class="px-4 py-2 my-1 block w-full shadow-sm border-gray-300 rounded-md">
                </div>
                <div class="flex-1 pr-12 pl-4 py-2">
                    <div on:click={ handleFormSubmit }
                         class="text-center px-4 py-2 mt-1 block w-full rounded-md bg-brand text-white cursor-pointer">
                        { $_('pages.contact.send') } <i class="fitted google icon"></i> Forms
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div slot="content">
        <img class="px-12 lg:p-12" src="/images/illustrations/contact.png" alt="{ $_('pages.contact.header') }"
             title="{ $_('pages.contact.header') }">
    </div>
</Section>

<div class="w-full -mb-36">
    <div id="map">
        <div class="mt-24 container mx-auto">
            <div class="relative z-10 flex w-1/2 float-right">
                <div class="p-8 -m-8 bg-white bg-opacity-75 lg:bg-opacity-50 rounded-xl">
                    <div class="text-4xl font-bold">
                        { $_('pages.contact.visit-us') }
                    </div>
                    <div class="mt-8 text-xl text-gray-500">
                        <p class="py-2">{ $_('pages.contact.about.1') }</p>
                        <p class="py-2">{ $_('pages.contact.about.2') }</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  import { onMount } from 'svelte'
  import { _ } from 'svelte-i18n'
  import Section from '../components/lead-section.svelte'

  function handleFormSubmit () {
    document.getElementById('contact').submit()
  }

  const lat = 51.208719304013975
  const lng = 16.163746516015646

  onMount(async () => {
    mapboxgl.accessToken = global.env.MAPBOX_TOKEN

    const map = new mapboxgl.Map({
      container: 'map',
      style: global.env.MAPBOX_STYLE,
      center: [lng + window.innerWidth / 50000, lat],
      zoom: 13
    })

    map.scrollZoom.disable()

    const marker = document.createElement('img')
    marker.src = '/marker.png'

    new mapboxgl.Marker(marker)
      .setLngLat([lng, lat])
      .addTo(map)
  })

  export let url = global.env.CONTACT_FORM_URL + '/formResponse'
  export let emailName = global.env.CONTACT_FORM_EMAIL_NAME
  export let questionName = global.env.CONTACT_FORM_QUESTION_NAME
</script>

<style>
    #map {
        min-height: 75vh !important;
    }
</style>

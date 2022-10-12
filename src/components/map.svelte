<div class="w-full md:-mb-36">
    <div id="map" data-cy="map">
        <div class="mt-24 container mx-auto">
            <div class="relative z-10 flex w-1/2 float-right">
                <div class="p-8 -m-8 bg-white bg-opacity-75 lg:bg-opacity-50 rounded-xl">
                    <slot/>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  import { onMount } from 'svelte'
  import addNavigation from '@/components/map/navigation.js'
  import addMarker from '@/components/map/marker.js'

  const lat = 51.208719304013975
  const lng = 16.163746516015646
  const zoom = 13

  const center = {
    center: [lng + window.innerWidth / 50000, lat],
    zoom,
  }

  onMount(async () => {
    mapboxgl.accessToken = import.meta.env['VITE_MAPBOX_TOKEN']

    const map = new mapboxgl.Map({
      container: 'map',
      style: import.meta.env['VITE_MAPBOX_STYLE'],
      ...center,
    })

    map.scrollZoom.disable()

    addNavigation(map, center)
    addMarker(map, lat, lng)
  })
</script>

<style>
    #map {
        min-height: 75vh !important;
    }
</style>

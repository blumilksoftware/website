export default function (map, lat, lng) {
  const link = document.createElement('a')

  const marker = document.createElement('img')
  marker.src = '/marker.png'

  link.appendChild(marker)
  link.href = 'https://google.com/maps/search/?api=1&query=' + lat + ',' + lng
  link.target = '_blank'

  new mapboxgl.Marker(link)
    .setLngLat([lng, lat])
    .addTo(map)
}

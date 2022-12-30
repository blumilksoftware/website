export default function (map, lat, lng, url) {
  const link = document.createElement('a')

  const marker = document.createElement('img')
  marker.src = '/marker.png'

  link.appendChild(marker)
  link.href = url
  link.target = '_blank'

  new mapboxgl.Marker(link)
    .setLngLat([lng, lat])
    .addTo(map)
}

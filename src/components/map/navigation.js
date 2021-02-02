class MapboxGLButtonControls {
  constructor ({ id, controls = [] }) {
    this.id = id
    this.controls = controls
  }

  onAdd () {
    this.container = document.createElement('div')
    this.container.id = this.id
    this.container.className = 'mapboxgl-ctrl-group mapboxgl-ctrl'

    this.controls.forEach(control => {
      const icon = document.createElement('i')
      icon.className = control.icon

      const button = document.createElement('button')
      button.title = control.title
      button.onclick = control.eventHandler
      button.appendChild(icon)

      this.container.appendChild(button)
    })

    return this.container
  }

  onRemove () {
    this.container.parentNode.removeChild(this.container)
    this.map = undefined
  }
}

export default function (map, center) {
  const home = new MapboxGLButtonControls({
    id: 'map-controls',
    controls: [
      {
        title: 'Przywróć główny widok',
        icon: 'home icon',
        eventHandler: () => {
          map.flyTo(center)
        }
      }
    ]
  })

  map.addControl(home, 'top-left')
  map.addControl(new mapboxgl.NavigationControl(), 'top-left')
}

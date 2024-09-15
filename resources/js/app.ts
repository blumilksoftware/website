import '../css/app.css'
import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'
import persist from '@alpinejs/persist'

window.Alpine = Alpine
Alpine.plugin(focus)
Alpine.plugin(persist)
Alpine.start()

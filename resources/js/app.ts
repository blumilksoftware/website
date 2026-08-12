import '../css/app.css'
import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'
import persist from '@alpinejs/persist'
import verticalScroller from './components/verticalScroller'

window.Alpine = Alpine
Alpine.plugin(focus)
Alpine.plugin(persist)
Alpine.data('verticalScroller', verticalScroller)
Alpine.start()

declare global {
  interface Window {
    Alpine: typeof Alpine;
  }
}

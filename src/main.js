import { addMessages, getLocaleFromNavigator, init } from 'svelte-i18n'
import '@/index.css'

import en from '@/locale/en.json'
import pl from '@/locale/pl.json'

import App from '@/app.svelte'

window.dataLayer = window.dataLayer || []

function gtag () {
  window.dataLayer.push(arguments)
}

function getLocale () {
  if (localStorage.getItem('locale')) {
    return localStorage.getItem('locale')
  }

  return getLocaleFromNavigator()
}

gtag('js', new Date())
gtag('config', 'G-Y3WCJ1ZM46')

const app = new App({
  target: document.getElementById('application'),
})

addMessages('en', en)
addMessages('pl', pl)

init({
  fallbackLocale: 'en',
  initialLocale: getLocale(),
})

export default app

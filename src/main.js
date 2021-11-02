import App from './app.svelte'
import { page, goto } from "@roxi/routify";
import { addMessages, getLocaleFromNavigator, init, locale } from 'svelte-i18n'

import en from './locale/en.json'
import pl from './locale/pl.json'

window.dataLayer = window.dataLayer || []

function gtag () {
  window.dataLayer.push(arguments)
}

function getLocale () {
  const locales = ['en', 'pl']
  const fragment = location.pathname.split('/')[1]
  const prefix = locales.includes(fragment) ? fragment : ''

  if(prefix) {
    locale.set(prefix)
    return prefix
  } else {
    goto(page.path);
  }

  return getLocaleFromNavigator()
}

gtag('js', new Date())
gtag('config', 'G-Y3WCJ1ZM46')

const app = new App({
  target: document.body
})

addMessages('en', en)
addMessages('pl', pl)

init({
  fallbackLocale: 'en',
  initialLocale: getLocale()
})

export default app

import App from './app.svelte'
import { addMessages, getLocaleFromNavigator, init } from 'svelte-i18n'
import en from './locale/en.json'
import pl from './locale/pl.json'

window.dataLayer = window.dataLayer || []

function gtag () {dataLayer.push(arguments)}

gtag('js', new Date())
gtag('config', 'G-Y3WCJ1ZM46')

const app = new App({
  target: document.body
})

addMessages('en', en)
addMessages('pl', pl)

init({
  fallbackLocale: 'en',
  initialLocale: getLocaleFromNavigator()
})

export default app

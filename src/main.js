import App from './app.svelte'
import { addMessages, getLocaleFromNavigator, init } from 'svelte-i18n'
import en from './locale/en.json'
import pl from './locale/pl.json'

const app = new App({
  target: document.body
})

addMessages('en', en)
addMessages('pl', pl)

init({
  fallbackLocale: 'en',
  initialLocale: getLocaleFromNavigator(),
})

export default app

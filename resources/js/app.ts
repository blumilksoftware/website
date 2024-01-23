import '../css/app.css'
import { createApp, h, type DefineComponent } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { createI18n } from 'vue-i18n'
import messages from '@/Locale'
import { Locale } from '@/Locale/locale.type'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
// const locale = page.props.locale as string

console.log(page)

const appName = import.meta.env.VITE_APP_NAME || 'Laravel'

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: async (name) => await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob<DefineComponent>('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    const i18n = createI18n({
      legacy: false,
      locale: Locale.English,
      fallbackLocale: Locale.English,
      messages: messages,
    })

    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(i18n as any)
      .mount(el)
  },
  progress: {
    color: '#4B5563',
  },
})

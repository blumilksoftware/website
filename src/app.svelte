<Bubbles/>
<Router {routes} {config}/>

<script>
  import { Router } from '@roxi/routify'
  import { routes } from '../.routify/routes'
  import Bubbles from '@/layout/bubbles.svelte'

  const locales = ['en', 'pl']
  const fragment = location.pathname.split('/')[1]
  const locale = locales.includes(fragment) ? `/${fragment}` : ''

  const config = {
    urlTransform: {
      apply: (url) => locale + url,
      remove: (url) => url.replace(locale, ''),
    },
  }
</script>

<style global>
    @tailwind base;
    @tailwind components;
    @tailwind utilities;
</style>

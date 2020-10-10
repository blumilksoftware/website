<Bubbles/>
<Navigation items={items}/>

<div class="w-full flex-grow flex flex-col justify-center items-center">
    <Router {routes}/>
</div>

<Footer items={items} socials={socials}/>

<script>
  import routes from './routes'
  import items from './assets/navigation'
  import socials from './assets/socials'

  import Router from 'svelte-spa-router'
  import Bubbles from './views/layout/Bubbles.svelte'
  import Navigation from './views/layout/Navigation.svelte'
  import Footer from './views/layout/Footer.svelte'
</script>

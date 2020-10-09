<Bubbles/>
<Navigation items={items}/>

<div class="w-full flex-grow flex flex-col justify-center items-center" id="content">
    <Router {routes}/>
</div>

<Footer items={items}/>

<script>
    import routes from '../routes'
    import items from '../navigation'

    import Router from 'svelte-spa-router'
    import Bubbles from './layout/Bubbles.svelte'
    import Navigation from './layout/Navigation.svelte'
    import Footer from './layout/Footer.svelte'
</script>

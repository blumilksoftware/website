<Bubbles/>
<Router {routes}/>

<script>
  import { Router } from '@sveltech/routify'
  import { routes } from '@sveltech/routify/tmp/routes'
  import Bubbles from './layout/bubbles.svelte'
</script>

<style global>
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    body {
        background: #f4f8fd;
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }
</style>

<Navigation items={items}/>

<div class="w-full flex-grow flex flex-col justify-center items-center text-gray-800">
    <slot></slot>
</div>

<Footer items={items} socials={socials} contact={contact}/>

<script>
  import items from '../assets/navigation'
  import socials from '../assets/socials'
  import contact from '../assets/contact'

  import Navigation from '../layout/navigation.svelte'
  import Footer from '../layout/footer.svelte'
</script>

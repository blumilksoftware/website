<Navigation items={items}/>

<div class="w-full flex-grow flex flex-col justify-center items-center text-gray-700">
    <slot/>
</div>

<Footer items={items} socials={socials} contact={contact}/>

<script>
  import items from '@/assets/navigation.js'
  import socials from '@/assets/socials.js'
  import contact from '@/assets/contact.js'

  import Navigation from '@/layout/navigation.svelte'
  import Footer from '@/layout/footer.svelte'
</script>

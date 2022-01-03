<Bubbles {bubbles} />
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
    import Bubbles from '@/layout/bubbles.svelte'
    
    const bubbles = [
      { left: 20, size: 32, delay: 1, duration: 6, popping: false },
      { left: 25, size: 40, delay: 0, duration: 7, popping: false },
      { left: 36, size: 36, delay: 2, duration: 5, popping: false },
      { left: 5, size: 64, delay: 0, duration: 10, popping: false },
      { left: 56, size: 72, delay: 0, duration: 5, popping: false },
      { left: 70, size: 144, delay: 3, duration: 7, popping: false },
      { left: 72, size: 36, delay: 7, duration: 5, popping: false },
      { left: 75, size: 24, delay: 6, duration: 6, popping: false },
      { left: 92, size: 108, delay: 0, duration: 8, popping: false }
    ]
</script>

<div class="container mx-auto px-12 my-12">
    <div class="text-3xl opacity-75 font-bold mb-4" id="{ id }">
        <a class="opacity-25" href="#{ id }">#</a>
        { title }
    </div>
    <slot></slot>
</div>

<script>
  import slugify from 'slugify'

  export let title
  export let id = slugify(title, { lower: true })
</script>

<div class="container mx-auto px-12 mb-6">
    <div class="text-3xl text-blue-500 mb-4" id="{ id }">
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

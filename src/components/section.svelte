<div class="container mx-auto px-12 mb-6">
    <div class="text-3xl text-blue-500 mb-4" id="{ id }">
        <a class="opacity-25" href="#{ id }">#</a>
        { title }
    </div>
    <div class="text-lg text-justify mx-1 px-{ padding }">
        <slot></slot>
    </div>
</div>

<script>
  import slugify from 'slugify'

  export let title
  export let id = slugify(title, { lower: true })
  export let padding = 6
</script>

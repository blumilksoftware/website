<div class="container mx-auto px-12 mb-6">
    <div class="text-3xl font-bold mb-4" id="{ id }">
        <a class="text-gray-200 hover:text-blue-500" href="#{ id }">#</a>
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

<div class="p-4 relative z-10 pointer-events-none">
    <div class="bg-gray-400 bg-opacity-25 p-8 rounded-xl italic">
        <slot/>
    </div>
    <div class="flex">
        <div class="flex-1"></div>
        <div class="text-right">
            <div class="flex justify-end">
                <div class="arrow border-gray-400 border-opacity-25 mr-6"></div>
            </div>
            <div class="p-2 flex items-center">
                <span class="mx-2">
                    <strong>{ name }</strong>,<br>
                    { position }
               </span>
                <img src="{ icon }" class="rounded-full w-12 mx-3" alt="{ name }">
            </div>
        </div>
    </div>
</div>

<style>
    .arrow {
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top-width: 20px;
    }
</style>

<script>
  export let name
  export let position
  export let icon = 'https://eu.ui-avatars.com/api/?background=0D8ABC&color=fff&name=' + name + '&rounded=true&font-size=.33'
</script>

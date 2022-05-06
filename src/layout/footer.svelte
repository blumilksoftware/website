<footer class="mt-12 z-20">
    <div class="container mx-auto py-8 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2 text-lg">
            {#each socials as social}
                <a href="{ social.url }" target="_blank" class="text-gray-500 hover:text-gray-900" title="{ social.name }">
                    <span class="sr-only">{ social.name }</span>
                    <i class="{ social.icon }"></i>
                </a>
            {/each}
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
            <div class="text-center text-base text-gray-700">
                <span>&copy; { year } Blumilk</span>
                <div class="block md:inline">
                    <a href="{ $url('./privacy') }" class="hover:text-gray-900 ml-4">{ $_('footer.privacy') }</a>
                    <a href="{ $url('./company') }" class="hover:text-gray-900 ml-4">{ $_('footer.company') }</a>
                    <a href="https://github.com/blumilksoftware/website" target="_blank" class="hover:text-gray-900 ml-4">{ $_('footer.source') }</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
  import { url } from '@roxi/routify'
  import { _ } from 'svelte-i18n'

  export let socials
  export let year = new Date().getFullYear()
</script>

<style>
    .clutch.icon {
        margin-top: 5px;
        width: 18px;
        height: 18px;
        background-size: cover;
        background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiIGlkPSJsYXllciIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCI+CiAgICA8ZyBpZD0iZzg0MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNS41MjU0MjM3LDAuNjkwNjc3OTcpIj4KICAgICAgICA8cGF0aCBjbGFzcz0ic3QwIiBkPSJtIDg2LjYsODguMjAwMDAyIGMgLTYsNC44IC0xNC40LDguNCAtMjIuOCw4LjQgLTE5LjIsMCAtMzIuNCwtMTQuNCAtMzIuNCwtMzMuNiAwLC0xOS4yIDEzLjIsLTMyLjQgMzIuNCwtMzIuNCA4LjQsMCAxNi44LDIuNCAyMi44LDguNCBsIDMuNiwzLjYgMTkuMiwtMTggLTQuOCwtMy42IEMgOTMuOCwxMS40MDAwMDIgNzkuNCw1LjQwMDAwMTUgNjMuOCw1LjQwMDAwMTUgMzAuMiw1LjQwMDAwMTUgNSwzMC42MDAwMDIgNSw2NC4yMDAwMDIgNSw5Ny44MDAwMDIgMzAuMiwxMjMgNjMuOCwxMjMgYyAxNS42LDAgMzAsLTYgNDAuOCwtMTUuNiBsIDQuOCwtMy42IC0xOS4yLC0xOS4xOTk5OTggeiIgaWQ9InBhdGgxMCIgc3R5bGU9ImZpbGw6IGN1cnJlbnRDb2xvciIvPgogICAgICAgIDxjaXJjbGUgY2xhc3M9InN0MSIgY3g9IjYyLjU5OTk5OCIgY3k9IjY0LjE5OTk5NyIgcj0iMTkuMjAwMDAxIiBpZD0iY2lyY2xlMTQiIHN0eWxlPSJmaWxsOiNlZjQzMzUiLz4KICAgIDwvZz4KPC9zdmc+Cg==");
    }
</style>

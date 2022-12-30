<Ribbon>
    <div class="text-lg sm:text-xl text-center pointer-events-auto">
        <div class="mr-0 sm:mr-36">{ $_('pages.career.application.1') }</div>
        <div class="mt-4 mb-6 text-3xl sm:text-5xl">
            <a href="mailto:{ email }" class="font-bold">{ email }</a>
        </div>
        <div class="ml-0 sm:ml-64">{ $_('pages.career.application.2') }</div>
    </div>
</Ribbon>

<script>
  import { _ } from 'svelte-i18n'
  import Ribbon from '@/components/ribbon.svelte'

  export let email = 'career@blumilk.pl'
</script>

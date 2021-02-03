<Ribbon>
    <div class="pl-8 text-center grid grid-cols-1 md:grid-cols-2 gap-4 lg:flex">
        {#each counters as counter}
            <div class="lg:flex-1">
                <div class="font-bold text-6xl p-2">{ counter.number }</div>
                <div>{ $_(counter.label) }</div>
            </div>
        {/each}
    </div>
</Ribbon>

<script>
  import { _ } from 'svelte-i18n'
  import Ribbon from '../../components/ribbon.svelte'
  import counters from '../../assets/counters'
</script>

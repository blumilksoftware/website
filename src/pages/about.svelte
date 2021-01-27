<Section disableColumns="true">
    <div slot="header">{ $_('pages.about.blumilk.header') }</div>
    <div slot="description" class="lg:flex text-lg">
        <div class="flex-1">
            {#each $_('pages.about.blumilk.company') as item}
                <p class="lg:pr-12 pb-4">
                    { item }
                </p>
            {/each}
        </div>
        <div class="flex-1">
            <div class="lg:hidden text-center font-gray-100 py-4 mb-4">
                <i class="asterisk icon"></i>
            </div>
            {#each $_('pages.about.blumilk.team') as item}
                <p class="lg:pr-12 pb-4">
                    { item }
                </p>
            {/each}
        </div>
    </div>
</Section>

<div class="mt-12 container mx-auto flex justify-evenly">
    <div class="bg-white rounded-xl shadow-lg">
        <img src="/images/photos/placeholder.jpg" alt="Team #1" class="w-96 p-3">
    </div>
    <div class="bg-white rounded-xl shadow-lg">
        <img src="/images/photos/placeholder.jpg" alt="Team #2" class="w-96 p-3">
    </div>
    <div class="bg-white rounded-xl shadow-lg">
        <img src="/images/photos/placeholder.jpg" alt="Team #3" class="w-96 p-3">
    </div>
</div>

<Ribbon>
    <div class="pl-8 text-center grid grid-cols-2 gap-4 lg:flex">
        {#each counters as counter}
            <div class="lg:flex-1">
                <div class="font-bold text-6xl p-2">{ counter.number }</div>
                <div>{ $_(counter.label) }</div>
            </div>
        {/each}
    </div>
</Ribbon>

<Section classes="my-24 items-start">
    <div slot="header">{ $_('pages.about.references.header') }</div>
    <div slot="description">
        <p class="pr-4">
            { $_('pages.about.references.lead') }
        </p>
        <div class="mt-12 grid grid-cols-4 gap-4 mr-16">
            <img src="/images/clients/pwsz.png" alt="Państwowa Wyższa Szkoła Zawodowa im. Witelona w Legnicy"
                 class="mx-auto">
            <img src="/images/clients/insly.png" alt="Insly Ltd." class="mx-auto">
            <img src="/images/clients/iizi.png" alt="Iizi Polska" class="mx-auto">
            <img src="/images/clients/wmd.png" alt="WMD Software" class="mx-auto">
        </div>
    </div>
    <div slot="content">
        {#each references as reference}
            <ReferenceBalloon name="{ reference.name }" icon="{ reference.icon }"
                              position="{ $_('pages.about.references.references.' + reference.id + '.position') }">
                { $_('pages.about.references.references.' + reference.id + '.quote') }
            </ReferenceBalloon>
        {/each}
    </div>
</Section>

<Section classes="flex-row-reverse" contentClasses="hidden xl:block">
    <div slot="header">{ $_('pages.about.stack.header') }</div>
    <div slot="description">
        {#each $_('pages.about.stack.content') as item}
            <p class="lg:pr-12 pb-4">
                { item }
            </p>
        {/each}
    </div>
    <div slot="content" class="hexagons p-4">
        <div class="flex ml-16">
            <Hexagon background="bg-blue-100"/>
            <Hexagon title="PHP" image="/images/tech/php.png"/>
            <Hexagon title="Laravel" image="/images/tech/laravel.png"/>
            <Hexagon background="animate-pulse bg-blue-200"/>
            <Hexagon background="bg-blue-300"/>
        </div>
        <div class="flex -mt-8">
            <Hexagon title="PHPUnit" image="/images/tech/phpunit.png"/>
            <Hexagon title="Behat" image="/images/tech/behat.png"/>
            <Hexagon background="animate-pulse bg-blue-200"/>
            <Hexagon title="Lumen" image="/images/tech/lumen.png"/>
            <Hexagon title="Phalcon" image="/images/tech/phalcon.png"/>
        </div>
        <div class="flex ml-16 -mt-8">
            <Hexagon background="animate-pulse bg-blue-300"/>
            <Hexagon title="GitHub" image="/images/tech/github.png"/>
            <Hexagon title="GitHub Actions" image="/images/tech/githubactions.png"/>
            <Hexagon title="Docker" image="/images/tech/docker.png"/>
            <Hexagon title="nginx" image="/images/tech/nginx.png"/>
        </div>
        <div class="flex -mt-8">
            <Hexagon title="JavaScript" image="/images/tech/js.png"/>
            <Hexagon title="Node.js" image="/images/tech/node.png"/>
            <Hexagon title="Vue.js" image="/images/tech/vue.png"/>
            <Hexagon title="Svelte" image="/images/tech/svelte.png"/>
            <Hexagon title="React" image="/images/tech/react.png"/>
        </div>
        <div class="flex ml-16 -mt-8">
            <Hexagon title="MySQL" image="/images/tech/mysql.png"/>
            <Hexagon title="PostgreSQL" image="/images/tech/postgres.png"/>
            <Hexagon background="animate-pulse bg-blue-300"/>
            <Hexagon title="Redis" image="/images/tech/redis.png"/>
            <Hexagon title="Elasticsearch" image="/images/tech/es.png"/>
        </div>
        <div class="flex -mt-8">
            <Hexagon title="Tailwind CSS" image="/images/tech/tailwind.png"/>
            <Hexagon background="bg-blue-200"/>
            <Hexagon title="GraphQL" image="/images/tech/graphql.png"/>
            <Hexagon background="animate-pulse bg-blue-400"/>
            <Hexagon title="RabbitMQ" image="/images/tech/rabbitmq.png"/>
        </div>
    </div>
</Section>

<style>
    .hexagons {
        transform: scale(.66);
    }
</style>

<script>
  import { _ } from 'svelte-i18n'
  import Ribbon from '../components/ribbon.svelte'
  import Section from '../components/lead-section.svelte'
  import Hexagon from '../components/hexagon.svelte'
  import ReferenceBalloon from '../components/reference.svelte'

  import counters from '../assets/counters'
  import references from '../assets/references'
</script>

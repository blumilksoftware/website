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
  import Section from '../../components/lead-section.svelte'
  import Hexagon from '../../components/hexagon.svelte'
</script>

<ContentSection title="{ $_('pages.career.header') }">
    { $_('pages.career.lead') }

    <div class="w-full grid grid-cols-2 mt-12">
        <ContentSection title="{ $_('pages.career.requirements-header') }" padding="0">
            { $_('pages.career.requirements-label') }
            <ul class="list-disc leading-loose pl-4 pt-4">
                {#each careers.requirements as career}
                    <li>{ $_(career.requirement) }</li>
                {/each}
            </ul>
        </ContentSection>

        <ContentSection title="{ $_('pages.career.stack-header') }" padding="0">
            { $_('pages.career.stack-label') }
            <ul class="leading-loose pl-4 pt-2">
                {#each careers.stack as stack}
                    <li>
                        <i class="{ stack.icon }"></i>
                        { $_(stack.name) }
                        <span class="opacity-50">{ $_(stack.description) }</span>
                    </li>
                {/each}
            </ul>
        </ContentSection>
    </div>
</ContentSection>

<div class="w-full bg-blue-500 text-white my-12 p-12 shadow-lg">
    <div class="text-lg pl-8 text-center">
        { $_('pages.career.application.1') }
        <a href="mailto:{email}" class="font-bold">{email}</a>
        { $_('pages.career.application.2') }
    </div>
</div>

<div class="container mx-auto opacity-50 px-16 pt-12 text-sm">
    { $_('pages.career.gdpr') }
</div>

<script>
  import { _ } from 'svelte-i18n'
  import ContentSection from '../components/section.svelte'
  import careers from '../assets/careers'

  export let email = 'career@blumilk.pl'
</script>

<Meta title={ $_('title.career') }/>

<LeadSection classes="lg:flex-row-reverse">
    <div slot="header">
        Praktykant
    </div>
    <div slot="description">
        W ramach współpracy z Państwową Wyższą Szkołą Zawodową im. Witelona w Legnicy poszukujemy studentów chcących odbyć praktyki w zakresie obowiązków inżyniera oprogramowania. Jest to świetna okazja, by poznać etos pracy programisty, spotkać profesjonalistów oraz nauczyć się praktycznych umiejętności.
    </div>
    <div slot="content">
        <img class="px-12 lg:px-24" src="/images/illustrations/intern.png" alt="{ $_('pages.career.header') }" title="{ $_('pages.career.header') }">
    </div>
</LeadSection>

<Ribbon>
    <div class="text-lg text-center">
        { $_('pages.career.application.1') }
        <a href="mailto:{email}" class="font-bold">{email}</a>
        { $_('pages.career.application.2') }
    </div>
</Ribbon>

<Gdpr/>

<script>
  import { _ } from 'svelte-i18n'
  import LeadSection from '@/components/lead-section.svelte'
  import Meta from '@/components/meta-title.svelte'
  import Ribbon from '@/components/ribbon.svelte'
  import Gdpr from '@/sections/gdpr.svelte'

  export let email = 'career@blumilk.pl'
</script>

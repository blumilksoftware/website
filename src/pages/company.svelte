<LeadSection classes="lg:flex-row-reverse -mt-24">
    <div slot="header">
        { $_('pages.company.header') }
    </div>
    <div slot="description" class="text-base">
        { $_('pages.company.content') }

        <div class="md:flex">
            <div class="flex-1">
                <div class="mt-8 mb-4 text-3xl text-gray-700 font-bold">{ $_('pages.company.address') }</div>
                <div>{ contact.name } { contact.form }</div>
                <div>{ contact.addresses.official.address }</div>
                <div>{ contact.addresses.official.city }</div>
                <div>{ contact.addresses.official.country }</div>
            </div>
            <div class="flex-1">
                <div class="mt-8 mb-4 text-3xl text-gray-700 font-bold">{ $_('pages.company.office') }</div>
                <div>{ contact.name } { contact.form }</div>
                <div>{ contact.addresses.office.address }</div>
                <div>{ contact.addresses.office.city }</div>
                <div>{ contact.addresses.office.country }</div>
            </div>
        </div>
    </div>
    <div slot="content" class="lg:text-right lg:mr-24 font-bold">
        <div class="my-8">
            <div class="text-3xl opacity-75">NIP</div>
            <div class="text-5xl">{ contact.nip }</div>
        </div>
        <div class="my-8">
            <div class="text-3xl opacity-75">VAT</div>
            <div class="text-5xl">{ contact.vat }</div>
        </div>
        <div class="my-8">
            <div class="text-xl opacity-75">REGON</div>
            <div class="text-3xl">{ contact.regon }</div>
        </div>
        <div class="my-8">
            <div class="text-xl opacity-75">KRS</div>
            <div class="text-3xl">{ contact.krs }</div>
        </div>
    </div>
</LeadSection>

<script>
  import { _ } from 'svelte-i18n'
  import contact from '../assets/contact'

  import LeadSection from '../components/lead-section.svelte'
</script>

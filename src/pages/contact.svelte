<Meta title={ $_('title.contact') }/>
<Section classes="mb-24">
    <div slot="header">
        { $_('pages.contact.header') }
    </div>
    <div slot="description">
        <p class="pb-4">
            { $_('pages.contact.lead') }
        </p>
        <form class="text-base" target="_blank" id="contact" action="{ url }">
            <div class="md:px-12 py-4">
                <label for="{ questionName }" class="block text-gray-700"></label>
                <textarea rows="8" name="{ questionName }" id="{ questionName }"
                          placeholder="{ $_('pages.contact.message') }"
                          class="px-4 py-2 mt-1 block w-full shadow-sm border-gray-300 rounded-md"
                          data-cy="contact-form-question"></textarea>
            </div>
            <div class="md:flex">
                <div class="flex-1 md:pl-12 md:pr-4 py-2">
                    <label for="{ emailName }" class="block text-gray-700"></label>
                    <input type="text" name="{ emailName }" id="{ emailName }"
                           placeholder="{ $_('pages.contact.email') }"
                           class="px-4 py-2 my-1 block w-full shadow-sm border-gray-300 rounded-md"
                           data-cy="contact-form-email">
                </div>
                <div class="flex-1 md:pr-12 md:pl-4 py-2">
                    <div on:click={ handleFormSubmit }
                         class="text-center px-4 py-2 mt-1 block w-full rounded-md bg-brand text-white cursor-pointer">
                        { $_('pages.contact.send') } <i class="fitted google icon"></i> Forms
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div slot="content">
        <img class="px-12 lg:p-12" src="/images/illustrations/contact.png" alt="{ $_('pages.contact.header') }"
             title="{ $_('pages.contact.header') }">
    </div>
</Section>

<Map>
    <div class="text-4xl font-bold">
        { $_('pages.contact.visit-us') }
    </div>
    <div class="mt-8 text-xl text-gray-500">
        <p class="py-2">{ $_('pages.contact.about.1') }</p>
        <p class="py-2">{ $_('pages.contact.about.2') }</p>
    </div>
</Map>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '../components/lead-section.svelte'
  import Map from '../components/map.svelte'
  import Meta from '../components/meta-title.svelte'

  function handleFormSubmit () {
    document.getElementById('contact').submit()
  }

  export let url = global.env.CONTACT_FORM_URL + '/formResponse'
  export let emailName = global.env.CONTACT_FORM_EMAIL_NAME
  export let questionName = global.env.CONTACT_FORM_QUESTION_NAME
</script>

<Section>
    <div slot="header">
        { $_('pages.contact.header') }
    </div>
    <div slot="description">
        <p class="pb-4">
            { $_('pages.contact.lead') }
        </p>
        <form class="text-base" target="_blank" id="contact" action="{ url }">
            <div class="px-12 py-4">
                <label for="{ questionName }" class="block text-gray-700"></label>
                <textarea rows="8" name="{ questionName }" id="{ questionName }"
                          placeholder="{ $_('pages.contact.message') }"
                          class="px-4 py-2 mt-1 block w-full shadow-sm border-gray-300 rounded-md"></textarea>
            </div>
            <div class="flex">
                <div class="flex-1 pl-12 pr-4 py-2">
                    <label for="{ emailName }" class="block text-gray-700"></label>
                    <input type="text" name="{ emailName }" id="{ emailName }"
                           placeholder="{ $_('pages.contact.email') }"
                           class="px-4 py-2 my-1 block w-full shadow-sm border-gray-300 rounded-md">
                </div>
                <div class="flex-1 pr-12 pl-4 py-2">
                    <div on:click={ handleFormSubmit }
                         class="text-center px-4 py-2 mt-1 block w-full rounded-md bg-blue-500 text-white cursor-pointer">
                        { $_('pages.contact.send') } <i class="fitted google icon"></i> Forms
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div slot="content">
        <img class="px-24" src="/images/contact.png" alt="{ $_('pages.contact.header') }"
             title="{ $_('pages.contact.header') }">
    </div>
</Section>

<Section classes="mt-24 flex-row-reverse">
    <div slot="header">
        { $_('pages.contact.visit-us') }
    </div>
    <div slot="description">
        <p class="py-2">{ $_('pages.contact.about.1') }</p>
        <p class="py-2">{ $_('pages.contact.about.2') }</p>
    </div>
    <div slot="content">
        <img src="/map.png" alt="{ $_('pages.contact.visit-us') }" title="{ $_('pages.contact.visit-us') }"
             class="border">
    </div>
</Section>

<script>
  import { _ } from 'svelte-i18n'
  import Section from '../components/lead-section.svelte'

  function handleFormSubmit () {
    document.getElementById('contact').submit()
  }

  export let url = global.env.CONTACT_FORM_URL + '/formResponse'
  export let emailName = global.env.CONTACT_FORM_EMAIL_NAME
  export let questionName = global.env.CONTANT_FORM_QUESTION_NAME
</script>

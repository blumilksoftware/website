<div class="container mx-auto flex">
    <div class="flex-1">
        <ContentSection title="{ $_('pages.contact.header') }">
            <p class="pb-4">
                { $_('pages.contact.lead') }
            </p>
            <form target="_blank" id="contact" action="{ url }">
                <div class="px-12 py-4">
                    <label for="{ emailName }" class="block text-gray-700">{ $_('pages.contact.email') }</label>
                    <input type="text" name="{ emailName }" id="{ emailName }"
                           placeholder="{ $_('pages.contact.email') }"
                           class="px-4 py-2 mt-1 block w-full shadow-sm border-gray-300 rounded-md">
                </div>
                <div class="px-12 py-4">
                    <label for="{ questionName }" class="block text-gray-700">{ $_('pages.contact.message') }</label>
                    <textarea rows="8" name="{ questionName }" id="{ questionName }"
                              placeholder="{ $_('pages.contact.message') }"
                              class="px-4 py-2 mt-1 block w-full shadow-sm border-gray-300 rounded-md"></textarea>
                </div>
                <div class="px-12 py-4">
                    <div on:click={handleFormSubmit}
                         class="text-center px-4 py-2 mt-1 block w-full rounded-md bg-blue-500 text-white cursor-pointer">
                        { $_('pages.contact.send') } <i class="fitted google icon"></i> Forms
                    </div>
                </div>
            </form>
        </ContentSection>

        <ContentSection title="{ $_('pages.contact.visit-us') }">
            <p class="py-2">
                { $_('pages.contact.about.1') }
            </p>
            <p class="py-2">
                { $_('pages.contact.about.2') }
            </p>
        </ContentSection>
    </div>
    <div class="flex-1">
        <a href="https://goo.gl/maps/hweeVn4WfxL3ACXx8" target="_blank">
            <img src="/map.png" alt="Map" class="border">
        </a>
    </div>
</div>

<script>
  import ContentSection from '../components/section.svelte'
  import { _ } from 'svelte-i18n'

  function handleFormSubmit () {
    document.getElementById('contact').submit()
  }

  export let url = global.env.CONTACT_FORM_URL + '/formResponse'
  export let emailName = global.env.CONTACT_FORM_EMAIL_NAME
  export let questionName = global.env.CONTANT_FORM_QUESTION_NAME
</script>

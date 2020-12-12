<div class="container mx-auto flex">
    <div class="flex-1">
        <ContentSection title="{ $_('pages.contact.header') }">
            <form target="_blank" id="contact" action="{ url }">
                <div class="px-12 py-4">
                    <label for="{ emailName }" class="block text-gray-700">E-mail address</label>
                    <input type="text" name="{ emailName }" id="{ emailName }" placeholder="E-mail address"
                           class="px-4 py-2 mt-1 block w-full shadow-sm border-gray-300 rounded-md">
                </div>
                <div class="px-12 py-4">
                    <label for="{ questionName }" class="block text-gray-700">Message</label>
                    <textarea rows="8" name="{ questionName }" id="{ questionName }" placeholder="Message"
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

        <ContentSection title="Visit us">
            <p class="text-lg text-justify px-8 py-2">
                We are working from the office located in the heart of Legnica, Poland.
                In the closest neighbourhood you can dine in nice restaurants, grab a beer in local pubs or shop in
                shopping malls.
                The railway station is less than 10 minutes by foot. City park is even closer.
            </p>
            <p class="text-lg text-justify px-8 py-2">
                Our address is Najświętszej Marii Panny 5F/5.
            </p>
        </ContentSection>
    </div>
    <div class="flex-1">
        <img src="/map.png" alt="Map" class="border">
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

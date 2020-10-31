<ContentSection title="Contact us">
    <iframe src="{ url }" width="640" height="750" class="m-auto" title="Contact form">
        <i class="notched circle loading icon"></i>
        Loading...
    </iframe>
</ContentSection>

<script>
  import ContentSection from '../components/section.svelte'

  export let url = global.env.CONTACT_FORM_URL
</script>

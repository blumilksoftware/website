<ContentSection title="Work at Blumilk">
    <div class="opacity-75 text-lg">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, blanditiis commodi culpa debitis deleniti
        eum ex facilis ipsum maxime minima non quaerat quas quo reiciendis repellendus saepe sint suscipit
        voluptatum.
    </div>

    <div class="w-full grid grid-cols-2">
        <ContentSection title="Requirements">
            We would like you to:
            <ul class="list-disc leading-loose pl-4 pt-2">
                {#each careers.requirements as career}
                <li>{ career.requirement }</li>
                {/each}
            </ul>
        </ContentSection>

        <ContentSection title="Our stack">
            We are using:
            <ul class="leading-loose pl-4 pt-2">
                {#each careers.stack as stack}
                    <li>
                        <i class="{ stack.icon }"></i>
                        { stack.name }
                        <span class="text-gray-700">{ stack.description }</span>
                    </li>
                {/each}
            </ul>
        </ContentSection>
    </div>
</ContentSection>

<ContentSection title="Application">
    <div class="opacity-75 text-lg">
        If you would like to send us application, write an e-mail to
        <a href="mailto:{email}" class="font-bold">{email}</a> with your CV,
        Github profile link and a few words about yourself attached.
    </div>
</ContentSection>

<script>
  import ContentSection from '../components/section.svelte'
  import careers from '../assets/careers'

  export let email = 'career@blumilk.pl'
</script>

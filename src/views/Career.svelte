<ContentSection title="work at Blumilk">
    <div class="opacity-75 text-lg">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, blanditiis commodi culpa debitis deleniti
        eum ex facilis ipsum maxime minima non quaerat quas quo reiciendis repellendus saepe sint suscipit
        voluptatum.
    </div>

    <div class="w-full grid grid-cols-2">
        <ContentSection title="requirements">
            We would like you to:
            <ul class="list-disc leading-loose pl-4 pt-2">
                <li>know how to use PHP in dockerized environment</li>
                <li>use dependency injection in your Laravel applications by default</li>
                <li>test your code (even before you write any LOC)</li>
                <li>know the difference between composer install and update</li>
                <li>have a good knowledge about object-oriented PHP</li>
                <li>know how to avoid n+1 selects problem in Eloquent</li>
                <li>use automated tools to improve our code quality</li>
                <li>debug your applications with Xdebug</li>
                <li>join Github Flow, code reviews and CI/CD processes</li>
            </ul>
        </ContentSection>

        <ContentSection title="our stack">
            We are using:
            <ul class="leading-loose pl-4 pt-2">
                <li><i class="php icon"></i> PHP <span class="text-gray-700">with the newest version if that's possible</span></li>
                <li><i class="laravel icon"></i> Laravel framework <span class="text-gray-700">when it's the best option for development</span></li>
                <li><i class="database icon"></i> databases <span class="text-gray-700">tailored for specific needs</span></li>
                <li><i class="check square outline icon"></i> Behat <span class="text-gray-700">for Behaviour-driven development</span></li>
                <li><i class="check square outline icon"></i> ECS & Psalm <span class="text-gray-700">to maintain code quality</span></li>
                <li><i class="docker icon"></i> Docker <span class="text-gray-700">to keep everything in manageable containers</span></li>
                <li><i class="github icon"></i> Github <span class="text-gray-700">for version control, code reviews and CI/CD</span></li>
                <li><i class="google icon"></i> Google <span class="text-gray-700">for docs, emails, calendar and other stuff</span></li>
                <li><i class="slack icon"></i> Slack <span class="text-gray-700">to internal communication</span></li>
            </ul>
        </ContentSection>
    </div>
</ContentSection>

<ContentSection title="application">
    <div class="opacity-75 text-lg">
        If you would like to send us application, write an e-mail to
        <a href="mailto:{email}" class="font-bold">{email}</a> with your CV,
        Github profile link and a few words about yourself attached.
    </div>
</ContentSection>

<script>
  import ContentSection from './components/Section.svelte'

  export let email = 'career@blumilk.pl'
</script>

<script>
    document.addEventListener("alpine:init", function () {
        Alpine.data('cookieConsent', () => ({
            state: Alpine.$persist('unknown').as('cookieConsent'),
            init() {
                this.dispatchEvent()
            },
            dialogue: {
                ['x-show']() {
                    return this.state === 'unknown'
                }
            },
            accept: {
                ['@click']() {
                    this.state = 'accepted'

                    this.dispatchEvent()
                }
            },
            dispatchEvent() {
                document.dispatchEvent(new CustomEvent('cookieConsent', {
                    detail: this.state
                }))
            }
        }))
    })
</script>

<section class="z-10 fixed max-w-3xl p-4 bg-white border border-gray-200 sm:gap-x-4 mx-12 bottom-16 dark:bg-gray-900 sm:flex sm:items-center dark:border-gray-700 rounded-2xl" x-data="cookieConsent" x-bind="dialogue" x-cloak>
    <div class="flex items-center gap-x-4">
        <span class="inline-flex p-2 text-website-normal rounded-lg shrink-0 dark:bg-gray-800 bg-website-light/30 show">
            <i class="ti ti-cookie text-4xl"></i>
        </span>
        <p class="text-xs text-gray-600 dark:text-gray-300">{{ __("content.cookies.text_1") }}<a href="{{ route("privacy-policy") }}" class="text-blue-500 hover:underline"> {{ __("content.cookies.text_2") }}</a>
        </p>
    </div>
    <div class="flex items-center shrink-0 mt-6 sm:mt-0">
        <button x-bind="accept" type="button"
                class=" text-xs w-full sm:w-auto max-w-80 ml-auto sm:mx-auto font-medium bg-website-normal rounded-lg hover:bg-gray-700 text-white px-4 py-2.5 duration-300 transition-colors focus:outline-none">
            {{ __("buttons.accept_all") }}
        </button>
    </div>
</section>

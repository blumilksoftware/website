@php
    $cookieConsent = \Blumilk\Website\Http\Controllers\CookieConsentController::current(request());
@endphp

<script>
    document.addEventListener("alpine:init", function () {
        Alpine.data('cookieConsent', () => ({
            state: @js($cookieConsent),
            open: false,
            init() {
                this.migrateLocalStorageConsent()

                this.open = this.state === 'unknown'

                this.applyConsent()
                this.dispatchEvent()
            },
            dialogue: {
                ['x-show']() {
                    return this.open
                },
                ['@cookie-consent-open.window']() {
                    this.open = true
                }
            },
            accept: {
                ['@click']() {
                    this.choose('accepted')
                }
            },
            decline: {
                ['@click']() {
                    this.choose('declined')
                }
            },
            choose(state) {
                this.state = state
                this.open = false

                this.saveConsent()
                this.applyConsent()
                this.dispatchEvent()
            },
            saveConsent() {
                fetch(@js(route("cookie-consent")), {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': @js(csrf_token()),
                    },
                    body: JSON.stringify({ consent: this.state }),
                })
            },
            migrateLocalStorageConsent() {
                const key = 'cookieConsent'
                let previous = null

                try {
                    previous = JSON.parse(localStorage.getItem(key))
                    localStorage.removeItem(key)
                } catch {}

                if (this.state === 'unknown' && ['accepted', 'declined'].includes(previous)) {
                    this.state = previous
                    this.saveConsent()
                }
            },
            applyConsent() {
                try {
                    if (this.state === 'declined') {
                        localStorage.setItem('umami.disabled', '1')
                    } else {
                        localStorage.removeItem('umami.disabled')
                    }
                } catch {}
            },
            dispatchEvent() {
                document.dispatchEvent(new CustomEvent('cookieConsent', {
                    detail: this.state
                }))
            }
        }))
    })
</script>

<section class="z-10 fixed max-w-3xl p-4 bg-white border border-gray-200 sm:gap-x-4 mx-12 bottom-16 dark:bg-gray-900 sm:flex sm:items-center dark:border-gray-700 rounded-2xl" x-data="cookieConsent" x-bind="dialogue" x-cloak @if ($cookieConsent !== "unknown") style="display: none" @endif>
    <div class="flex items-center gap-x-4">
        <span class="inline-flex p-2 text-website-normal rounded-lg shrink-0 dark:bg-gray-800 bg-website-light/30 show">
            <i class="ti ti-cookie text-4xl"></i>
        </span>
        <p class="text-xs text-gray-600 dark:text-gray-300">{{ __("content.cookies.text_1") }}<a href="{{ route("privacy-policy") }}" class="text-blue-500 hover:underline"> {{ __("content.cookies.text_2") }}</a>
        </p>
    </div>
    <div class="flex flex-col sm:flex-row items-stretch gap-2 shrink-0 mt-6 sm:mt-0">
        <button x-bind="decline" type="button"
                class="text-xs w-full sm:w-auto font-medium border border-gray-300 rounded-lg hover:bg-gray-100 text-gray-700 px-4 py-2.5 duration-300 transition-colors focus:outline-hidden">
            {{ __("buttons.decline_all") }}
        </button>
        <button x-bind="accept" type="button"
                class="text-xs w-full sm:w-auto font-medium bg-blue-normal rounded-lg hover:bg-gray-700 text-white px-4 py-2.5 duration-300 transition-colors focus:outline-hidden">
            {{ __("buttons.accept_all") }}
        </button>
    </div>
</section>

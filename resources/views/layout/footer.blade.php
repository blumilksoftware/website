<footer class="bg-white">
    <div class="mx-16 w-auto py-6 md:py-12 flex flex-col md:flex-row gap-4 items-center place-items-center justify-between md:border-t-2 md:border-gray-100">
        <div class="">
            <img class="w-24 md:w-32 shrink-0 mx-auto" src="{{ asset('identification/logo.svg') }}" alt="Blumilk logo"/>
        </div>
        <div class="flex justify-center items-center space-x-4 md:space-x-6">
            <a href="https://clutch.co/profile/blumilk-0" class="text-gray-500 hover:text-gray-600 leading-none" target="_blank" data-umami-event="clutch-profile-link-click" data-umami-event-url="https://clutch.co/profile/blumilk-0">
                <span class="sr-only">{{ __('alt.clutch') }}</span>
                <x-icons.clutch></x-icons.clutch>
            </a>
            <a href="https://github.com/blumilksoftware" class="text-gray-500 hover:text-gray-600 leading-none" target="_blank" data-umami-event="github-profile-link-click" data-umami-event-url="https://github.com/blumilksoftware">
                <span class="sr-only">{{ __('alt.github') }}</span>
                <i class="fa-brands fa-square-github text-xl lg:text-2xl"></i>
            </a>
            <a href="https://linkedin.com/company/blumilksoftware" class="text-gray-500 hover:text-gray-600 leading-none" target="_blank" data-umami-event="linkedin-profile-link-click" data-umami-event-url="https://linkedin.com/company/blumilksoftware">
                <span class="sr-only">{{ __('alt.linkedin') }}</span>
                <i class="fa-brands fa-linkedin text-xl lg:text-2xl"></i>
            </a>
            <a href="https://www.facebook.com/blumilksoftware/" class="text-gray-500 hover:text-gray-600 leading-none" target="_blank" data-umami-event="facebook-profile-link-click" data-umami-event-url="https://www.facebook.com/blumilksoftware/">
                <span class="sr-only">{{ __('alt.facebook') }}</span>
                <i class="fa-brands fa-square-facebook text-xl lg:text-2xl"></i>
            </a>
            <a href="https://www.youtube.com/@blumilksoftware" class="text-gray-500 hover:text-gray-600 leading-none" target="_blank" data-umami-event="youtube-profile-link-click" data-umami-event-url="https://www.youtube.com/@blumilksoftware">
                <span class="sr-only">{{ __('alt.youtube') }}</span>
                <i class="fa-brands fa-square-youtube text-xl lg:text-2xl"></i>
            </a>
        </div>
    </div>
    <div class="px-16 w-full py-6 md:py-6 md:flex md:items-center md:justify-between bg-gray-extra-light text-gray-700">
        <div>
            <p class="text-center text-sm leading-5">
                <span class="pr-1">Copyright &copy; {{ date('Y') }}</span>
                <span class="hidden md:inline">|</span>
                <span class="md:pl-1">Blumilk <span class="hidden md:inline">sp. z o.o.</span></span>
            </p>
        </div>
        <div class="mt-2 md:mt-0">
            <p class="text-center text-sm leading-5 space-y-2 md:space-y-0">
                <a href="https://github.com/blumilksoftware/website" target="_blank" data-umami-event="github-source-code-link-click" data-umami-event-url="https://github.com/blumilksoftware/website" class="block md:inline font-normal whitespace-normal pr-1">{{ __('footer.code') }}</a>
                <span class="hidden md:inline">|</span>
                <a href="{{ route('privacy-policy') }}" class="block md:inline font-normal whitespace-normal px-1">{{ __('footer.policy') }}</a>
                <span class="hidden md:inline">|</span>
                <a href="{{ route('data') }}" class="block md:inline pl-1">{{ __('footer.data') }}</a></p>
        </div>
    </div>
</footer>


<footer class="bg-white">
    <div class="mx-16 w-auto py-6 md:py-12 flex items-center place-items-center justify-between md:border-t-2 md:border-gray-100">
        <div class="">
            <img class="w-24 md:w-32 shrink-0 mx-auto" src="{{ asset('identification/logo.svg') }}" alt="Blumilk logo"/>
        </div>
        <div class="flex justify-center space-x-4 md:space-x-6">
            <a href="https://clutch.co/profile/blumilk-0" class="md:m-auto text-gray-400 hover:text-gray-500 -bottom-1 relative md:bottom-0" target="_blank">
                <span class="sr-only">{{ __('alt.clutch') }}</span>
                <x-icons.clutch></x-icons.clutch>
            </a>
            <a href="https://github.com/blumilksoftware" class="text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">{{ __('alt.github') }}</span>
                <i class="fa-brands fa-square-github text-xl lg:text-2xl"></i>
            </a>
            <a href="https://linkedin.com/company/blumilksoftware" class="text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">{{ __('alt.linkedin') }}</span>
                <i class="fa-brands fa-linkedin text-xl lg:text-2xl"></i>
            </a>
            <a href="https://www.facebook.com/blumilksoftware/" class="text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">{{ __('alt.facebook') }}</span>
                <i class="fa-brands fa-square-facebook text-xl lg:text-2xl"></i>
            </a>
            <a href="https://www.youtube.com/@blumilksoftware" class="text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">{{ __('alt.youtube') }}</span>
                <i class="fa-brands fa-square-youtube text-xl lg:text-2xl"></i>
            </a>
        </div>
    </div>
    <div class="px-16 w-full py-6 md:py-6 md:flex md:items-center md:justify-between bg-gray-extraLight text-[#6B6E70]">
        <div>
            <p class="text-center text-sm leading-5">Copyright &copy; 2024 | Blumilk</p>
        </div>
        <div class="mt-2 md:mt-0">
            <p class="text-center text-sm leading-5">
                <a href="{{ route('privacy-policy') }}" target="_blank" class="font-normal whitespace-normal pr-1">{{ __('footer.policy') }}</a>
                |
                <a href="{{ route('data') }}" class="pl-1">{{ __('footer.data') }}</a></p>
        </div>
    </div>
</footer>


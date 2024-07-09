<footer class="bg-white border-t-2 border-gray-100">
    <div class="mx-auto w-full px-6 py-12 md:flex md:items-center md:justify-between lg:px-10">
        <div class="flex justify-center space-x-6 md:order-2">
            <a href="https://clutch.co/profile/blumilk-0" class="md:m-auto text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">Clutch</span>
                <x-icons.clutch></x-icons.clutch>
            </a>
            <a href="https://github.com/blumilksoftware" class="text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">Github</span>
                <i class="fa-brands fa-square-github text-xl lg:text-2xl"></i>
            </a>
            <a href="https://linkedin.com/company/blumilksoftware" class="text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">LinkedIn</span>
                <i class="fa-brands fa-linkedin text-xl lg:text-2xl"></i>
            </a>
            <a href="https://www.facebook.com/blumilksoftware/" class="text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">Facebook</span>
                <i class="fa-brands fa-square-facebook text-xl lg:text-2xl"></i>
            </a>
            <a href="https://www.youtube.com/@blumilksoftware" class="text-gray-400 hover:text-gray-500" target="_blank">
                <span class="sr-only">Youtube</span>
                <i class="fa-brands fa-square-youtube text-xl lg:text-2xl"></i>
            </a>
        </div>
        <div class="mt-8 md:order-1 md:mt-0">
            <img class="w-32 shrink-0" src="{{ asset('identification/logo.svg') }}" alt="Blumilk"/>
        </div>
    </div>
    <div class="mx-auto w-full px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
        <div class="mt-8 md:mt-0 md:order-2">
            <p class="text-center text-xs leading-5 text-gray-500">
                <a href="{{ route('privacy-policy') }}" target="_blank" class="font-bold">{{ __('footer.policy') }}</a>
                |
                <a href="{{ route('contact') }}">{{ __('footer.data') }}</a></p>
        </div>
        <div class="mt-8 md:order-1 md:mt-0">
            <p class="text-center text-xs leading-5 text-gray-500">Copyright &copy; 2024 | Blumilk. <span class="font-semibold">{{ __('footer.rights') }}</span></p>
        </div>
    </div>
</footer>


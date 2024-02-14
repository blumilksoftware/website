<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <div class="flex grow flex-col gap-y-5 overflow-hidden border-r border-gray-200 bg-white px-6 relative">
        <nav class="my-6 flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                <li class="flex-1">
                    <ul role="list" class="-mx-2 space-y-1">
                        <x-dashboard.navigation></x-dashboard.navigation>
                    </ul>
                </li>
                <li>
                    <ul role="list" class="-mx-2 space-y-1">
                    <x-dashboard.menu-item label="Strona główna"></x-dashboard.menu-item>
                    <form action="{{ route("logout") }}" method="post">
                        @csrf
                        <input type="submit" value="Wyloguj" class="cursor-pointer w-full text-left text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md px-4 py-2 text-sm leading-6 font-semibold">
                    </form>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="bottom-0 right-0 -mr-24 -mb-24 opacity-25 absolute">
            <img class="size-64" src="{{ asset("logo.png") }}" alt="Blumilk">
        </div>
    </div>
</div>

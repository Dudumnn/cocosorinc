
<nav class="fixed top-0 z-50 w-full bg-gray-100 border-b border-gray-300">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex justify-start pl-2">
                <button @click.prevent="isOpen = !isOpen">
                    <svg class="bi bi-list flex-shrink-0 w-7 h-8 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                <a href="/" class="flex ml-2 md:mr-24">
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Cocosor Inc.</span>
                </a>
            </div>

            <div class="hidden w-full md:block md:w-auto font-sans px-2" id="navbar-main">
                <div class="dropdown dropdown-end">
                    <button tabindex="0" class="m-1 text-xl front-semibold">
                        <svg class="bi bi-person-circle flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </button>
                    <ul tabindex="0" class="mt-3 dropdown-content z-[1] w-40 text-base list-none bg-white divide-y divide-gray-100 rounded shadow">
                        <li class="block text-sm pl-3 py-3 text-gray-700 hover:rounded-t hover:bg-gray-100 font-semibold">
                            <a>Settings</a>
                        </li>
                        <li class="block text-sm pl-3 py-3 text-gray-700 hover:rounded-b hover:bg-gray-100 font-semibold">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="w-full text-left">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
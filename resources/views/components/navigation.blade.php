
<nav class="fixed top-0 z-50 w-full bg-gray-100 border-b border-gray-300">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
            <a href="/" class="flex ml-2 md:mr-24">
                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Cocosor Inc.</span>
            </a>
            </div>
            <div class="hidden w-full md:block md:w-auto font-sans px-2" id="navbar-main">
                <div class="dropdown dropdown-end">
                    <button tabindex="0" class="m-1 text-xl front-semibold">
                        <img class="w-6 h-6 fill-slate-50" src="{{ asset('icons/user.svg') }}" alt="menu">
                    </button>
                    <ul tabindex="0" class="mt-3 dropdown-content z-[1] menu w-40 text-base list-none bg-white divide-y divide-gray-100 rounded shadow">
                        <li class="block text-sm text-gray-700 hover:bg-gray-100 font-semibold">
                            <a>Settings</a>
                        </li>
                        <li class="block text-sm text-gray-700 hover:bg-gray-100 font-semibold">
                            <form action="/logout" method="POST">
                                @csrf
                                <button>Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
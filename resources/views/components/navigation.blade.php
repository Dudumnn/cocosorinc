
<nav class="fixed top-0 z-10 w-full bg-white border-b border-gray-300">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex justify-start pl-2 text-gray-900">
                <button @click.prevent="isOpen = !isOpen">
                    <svg class="bi bi-list flex-shrink-0 w-7 h-8 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                
                <a href="/dashboard" class="flex ml-2 md:mr-24">
                    <img src="{{ asset('/icons/logo.jpg') }}" alt="" class="w-50 h-12 mx-auto">
                </a>
            </div>

            <div x-data="{ open: false }" class="relative inline-block text-left">
                <div>
                  <button @click="open = ! open" type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2">
                    <svg class="bi bi-person-circle flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

                <div x-show="open" class="absolute right-0 mt-2 py-2 w-40 bg-white rounded-lg shadow xl">
                    <div class="px-4 py-2 border-b border-gray-200 pointer-events-none">
                        <span class="block text-sm  text-gray-500 truncate">
                            Signed in as
                        </span>
                        <span class="block text-sm text-black">
                            {{ auth()->user()->username }}
                        </span>
                    </div>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="text-gray-700 block w-full px-4 py-2 text-left text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-3">Sign Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
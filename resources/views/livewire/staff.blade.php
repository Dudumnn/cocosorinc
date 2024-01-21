<div class="overflow-hidden w-11/12 px-5 py-4 mx-6 my-6 mb-3 pb-20">
    <div class="font-semibold text-slate-800 text-lg text-left pb-4">HR Users</div>
    <div class="grid grid-cols-1 gap-x-3 gap-y-3 w-full sm:grid-cols-12">
        @foreach ($hrUsers as $hrUser)
            <div class="sm:col-span-3 flex flex-col px-3 py-3 shadow-lg border border-gray-200 rounded-md">
                {{-- Top Menu--}}
                <div class="flex flex-row-reverse">
                    <div x-data="{ open: false }" class="relative inline-block text-left">
                        <div>
                            <button x-on:click="open = ! open" type="button" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <svg class="bi bi-three-dots-vertical -mr-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                </svg>
                            </button>
                        </div>
                        <div :class="open ? '' : 'hidden'" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Edit</a>
                                <form method="POST" action="/deleteHR/{{ $hrUser->id }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="w-full text-left text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-1">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Profile --}}
                <div class="w-full flex justify-center pt-4 pb-2 gap-y-2">
                    <svg class="bi bi-person-square text-gray-400 w-16 h-16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg>
                </div>
                <div class="w-full flex justify-center font-semibold text-slate-800 text-base">
                    {{ $hrUser->username }}
                </div>
                <div class="w-full flex justify-center font-normal text-black text-xs mb-4">
                    HR
                </div>
            </div>
        @endforeach
    </div>

    <div class="font-semibold text-slate-800 text-lg text-left pb-4 pt-4">Checker Users</div>
    <div class="grid grid-cols-1 gap-x-3 gap-y-3 w-full sm:grid-cols-12">
        @foreach ($checkers as $checker)
            <div class="sm:col-span-3 flex flex-col px-3 py-3 shadow-lg border border-gray-200 rounded-md">
                {{-- Top Menu--}}
                <div class="flex flex-row-reverse">
                    <div x-data="{ open: false }" class="relative inline-block text-left">
                        <div>
                            <button x-on:click="open = ! open" type="button" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <svg class="bi bi-three-dots-vertical -mr-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                </svg>
                            </button>
                        </div>
                        <div :class="open ? '' : 'hidden'" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Edit</a>
                                <form method="POST" action="/deleteChecker/{{ $checker->id }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="w-full text-left text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-1">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Profile --}}
                <div class="w-full flex justify-center pt-4 pb-2 gap-y-2">
                    <svg class="bi bi-person-square text-gray-400 w-16 h-16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg>
                </div>
                <div class="w-full flex justify-center font-semibold text-slate-800 text-base">
                    {{ $checker->username }}
                </div>
                <div class="w-full flex justify-center font-normal text-black text-xs mb-4">
                    Checker
                </div>
            </div>
        @endforeach
    </div>
</div>
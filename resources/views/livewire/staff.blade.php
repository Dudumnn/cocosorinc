<div class="overflow-hidden w-11/12 px-5 mx-6 mb-6 mb-3 pb-20">
    <div class="font-semibold text-lg text-teal-700 text-left pb-4">HR Users</div>
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
                                <div x-data="{ show: false }">
                                    <button x-on:click="show = ! show" class="w-full text-left text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">
                                        Edit
                                    </button>
                                    <div x-show="show" class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                        <div class="flex w-full justify-center pt-16">
                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-6/12">
                                                <form method="POST" action="/editHR/{{ $hrUser->id }}" class="w-full h-fit shadow-lg border border-gray-300 rounded-md">
                                                    @method('PUT')
                                                    @csrf
                                                    <h2 class="bg-gray-50 rounded-t-md text-base font-semibold leading-7 text-gray-900 px-6 py-3 border-b">Add Schedule</h2>
                                                    <div class="w-full grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-12 px-6 py-4 pb-6">
                                                        <div class="sm:col-span-6">
                                                            <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                                                            <div>
                                                                <input name="description" value="{{ $hrUser->name }}" type="text" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-6">
                                                            <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                                            <div>
                                                                <input name="description" value="{{ $hrUser->username }}" type="text" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-12">
                                                            <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                                            <div>
                                                                <input name="description" value="{{ $hrUser->email }}" type="text" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-12">
                                                            <label for="address" class="block text-sm font-medium leading-6 text-gray-900">New Password</label>
                                                            <div>
                                                                <input name="description" placeholder="**********" type="password" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-x-6 w-full px-10 pb-6 flex justify-end">
                                                        <a x-on:click="show = ! show"  class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                                                            <span>Cancel</span>
                                                        </a>
                                                        <button type="submit" class="w-1/5 rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    {{ $hrUser->name }}
                </div>
                <div class="w-full flex justify-center font-normal text-black text-xs mb-4">
                    HR
                </div>
            </div>
        @endforeach
    </div>

    <div class="font-semibold text-orange-400 text-lg text-left pb-4 pt-4">Checker Users</div>
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
                    {{ $checker->name }}
                </div>
                <div class="w-full flex justify-center font-normal text-black text-xs mb-4">
                    Checker
                </div>
            </div>
        @endforeach
    </div>
</div>
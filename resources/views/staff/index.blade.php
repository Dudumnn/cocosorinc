{{-- 
    @dd(auth()->user())
    @dd(auth()->user()->name)
--}}
@include('partials.header', [$title])
    @php @endphp
    <div class="flex" id="wrapper" x-data="{isOpen:true}">
        <x-navigation />
        <x-sidebar />
        <div id="body" class="w-full overflow-y-auto transition-all duration-200 ">
            <section class="p-6 pt-10 w-full">
                <h4 class="w-full page-title font-semibold text-slate-800 text-lg text-left">Manage User</h4>
                <nav class="flex w-full justify-between" aria-label="Breadcrumb">
                    <div>
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-500">
                                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                </svg>
                                Dashboard
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2">Staff</a>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <div x-data="{ show: false }">
                            <button x-on:click="show = ! show" title="Create" class="w-28 flex justify-center bg-gray-500 hover:bg-gray-600 rounded text-sm p-1.5 px-3 text-white gap-2">
                                <span class="font-semibold">Add User</span>
                            </button>
                            <div x-show="show" class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                <div class="flex w-full justify-center pt-16">
                                    <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-6/12">
                                        <form method="POST" action="/addUser" class="w-full h-fit shadow-lg border border-gray-300 rounded-md">
                                            @method('PUT')
                                            @csrf
                                            <h2 class="bg-gray-50 rounded-t-md text-base font-semibold leading-7 text-gray-900 px-6 py-3 border-b">Add Schedule</h2>
                                            <div class="w-full grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-12 px-6 py-4 pb-6">
                                                <div class="sm:col-span-6">
                                                    <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                                                    <div>
                                                        <input name="description"  type="text" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                                    <div>
                                                        <input name="description"  type="text" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-12">
                                                    <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                                    <div>
                                                        <input name="description"  type="text" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                    </div>
                </nav>
            </section>
    
            <section class="flex flex-col w-full">
                <livewire:staff/>
            </section>
        </div>
    </div>
    
@include('partials.footer')
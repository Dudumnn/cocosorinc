@include('partials.header', [$title])
    @php @endphp
    <x-navigation />
    <x-sidebar />

    <section class="p-6 pt-10 sm:ml-64">
        <h4 class="w-full page-title font-semibold text-slate-800 text-lg text-left">Employees</h4>
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white">
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
                    <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Employee List</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Employee Name</a>
                    </div>
                </li>
            </ol>
        </nav>
    </section>

    <section class="p-11 sm:ml-64">
        <div class="p-6 mx-auto w-full border border-gray-200">
            <div class="px-4 pt-3 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Employee Information</h3>
            </div>
            <div class="mt-3 pt-6 border-t border-gray-100">
                <form>
                    <div class="grid gap-6 mb-6 md:grid-cols-2 text-xs">
                        <div>
                            <label for="name" class="block mb-2 font-medium text-gray-900 dark:text-white">Full name</label>
                            <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="extension_name" class="block mb-2 font-medium text-gray-900 dark:text-white">Extension name</label>
                            <input type="text" name="extension_name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>  
                        <div>
                            <label for="gender" class="block mb-2 font-medium text-gray-900 dark:text-white">Gender</label>
                            <input type="text" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>
                        <div>
                            <label for="birthdate" class="block mb-2 font-medium text-gray-900 dark:text-white">Birthdate</label>
                            <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="visitors" class="block mb-2 font-medium text-gray-900 dark:text-white">Age</label>
                            <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>

                    <div class="mb-6 text-xs pb-6 border-b">
                        <label for="address" class="block mb-2 font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="grid gap-6 mb-6 md:grid-cols-2 text-xs">
                        <div>
                            <label for="first_name" class="block mb-2 font-medium text-gray-900 dark:text-white">Position</label>
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 font-medium text-gray-900 dark:text-white">Status</label>
                            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>

                        </div>
                        <div>
                            <label for="company" class="block mb-2 font-medium text-gray-900 dark:text-white">Employment status</label>
                            <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div> 
                    </div>

                    <div class="flex flex-row-reverse">
                        <button type="submit" class="text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Information</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
@include('partials.footer')
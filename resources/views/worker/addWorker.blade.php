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
                <h4 class="w-full page-title font-semibold text-slate-800 text-lg text-left">Add Employee</h4>
                <nav class="flex" aria-label="Breadcrumb">
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
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2">Add Employee</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </section>
    
            <section class="flex flex-col w-full overflow-y-auto p-6">
                <form action="/addEmployee" method="POST" class="w-full h-fit flex flex-col gap-y-3">
                    @csrf
                    <div class="w-full grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-12">
                        <div class="sm:col-span-6 rounded-sm border border-gray-300 shadow-lg">
                            <h2 class="bg-gray-50 rounded-t-md text-base font-semibold leading-7 text-gray-900 px-6 py-3 border-b">Personal Detail</h2>
                            <div class="grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-12 px-6 pt-6 pb-10">
                                <div class="sm:col-span-12">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                                    <div class="mt-2">
                                        <input type="text" name="name"  value="{{old('name')}}" 
                                            class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('name')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-6">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Suffix</label>
                                    <div class="mt-2">
                                        <select name="extension_name" value="{{old('extension_name')}}" class="block w-full border-0 py-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value="N/A">N/A</option>
                                            <option value="Sr">Sr</option>
                                            <option value="Jr">Jr</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                        </select>
                                        @error('extension_name')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-6">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Date of Birth</label>
                                    <div class="mt-2">
                                        <input type="date" name="birthdate" value="{{old('birthdate')}}" 
                                            class="block w-full border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('birthdate')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-6">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                                    <div class="mt-2">
                                        <input type="number" name="age" value="{{old('age')}}" min="18" 
                                            class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('age')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-6">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                                    <div class="mt-2">
                                        <select name="gender" value="{{old('gender')}}" class="block w-full border-0 py-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-12">
                                    <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                    <div class="mt-2">
                                        <textarea type="text" name="address" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('address') }}</textarea>
                                        @error('address')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-6 rounded-sm border border-gray-300 shadow-lg">
                            <h2 class="bg-gray-50 rounded-t-md text-base font-semibold leading-7 text-gray-900 px-6 py-3 border-b">Job Detail</h2>
                            <div class="grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-12 px-6 pt-6 pb-10">
                                <div class="sm:col-span-12">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Select Shift</label>
                                    <div class="mt-2">
                                        <select name="shift" value="{{old('shift')}}" class="block w-full border-0 py-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value="Green">Green</option>
                                            <option value="Red">Red</option>
                                            <option value="Yellow">Yellow</option>
                                        </select>
                                        @error('shift')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-12">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Select Employee Status</label>
                                    <div class="mt-2">
                                        <select name="status" value="{{old('status')}}" class="block w-full border-0 py-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value="Regular">Regular</option>
                                            <option value="Probationary">Probationary</option>
                                        </select>
                                        @error('status')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-12">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Select Position</label>
                                    <div class="mt-2">
                                        <select name="position" value="{{old('position')}}" class="block w-full border-0 py-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value="Parer">Parer</option>
                                            <option value="Sheller">Sheller</option>
                                        </select>
                                        @error('position')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-12">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Date of Joining</label>
                                    <div class="mt-2">
                                        <input type="date" name="date_of_employment" value="{{old('date_of_employment')}}" 
                                            class="block w-full border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('date_of_employment')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <input type="text" name="employment_status" value="active" class="hidden block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-end py-5">
                        <button name="submit" type="submit" class="w-1/5 rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Create Employee
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
    
@include('partials.footer')
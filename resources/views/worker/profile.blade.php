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
                <h4 class="w-full page-title font-semibold text-slate-800 text-lg text-left">Workers</h4>
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
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2">Employee List</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2">{{$employee->name}}</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </section>
    
            <section class="flex w-full gap-5 p-4">
                <div class="flex flex-col w-4/5 text-black border p-6 shadow-2xl rounded-md">
                    <div class="flex justify-between border-b-2 border-gray-500 pb-3">
                        <p class="font-bold text-xl">{{$employee->name}}</p>
                        <a x-data x-on:click="$dispatch('open-modal')" class="text-sm mt-1 cursor-pointer">Edit</a>
                        
                    </div>
                    <div class="flex flex-row gap-2 pt-3 pb-4">
                        <div class="w-2/5">
                            {{ QrCode::format('png')->size(250)->generate("$employee->name") }}
                        </div>
                        <div class="w-3/5 grid grid-cols-1 gap-x-3 gap-y-2 sm:grid-cols-12">
                            <div class="sm:col-span-12 p-3 h-fit bg-gray-200 rounded-md">
                                <p class="text-base font-medium">Personal Information</p>
                            </div>
                            <div class="sm:col-span-12 flex flex-row gap-x-1 mx-3 border-b h-fit pb-2 pt-2">
                                <div class="w-1/2 text-sm font-semibold">ID</div>
                                <div class="w-1/2 text-sm">{{$employee->id}}</div>
                            </div>
                            <div class="sm:col-span-12 flex flex-row gap-x-1 mx-3 border-b h-fit pb-2">
                                <div class="w-1/2 text-sm font-semibold">Fullname</div>
                                <div class="w-1/2 text-sm">{{$employee->name}}</div>
                            </div>
                            <div class="sm:col-span-12 flex flex-row gap-x-1 mx-3 border-b h-fit pb-2">
                                <div class="w-1/2 text-sm font-semibold">Address</div>
                                <div class="w-1/2 text-sm">{{$employee->address}}</div>
                            </div>
                            <div class="sm:col-span-12 flex flex-row gap-x-1 mx-3 border-b h-fit pb-2">
                                <div class="w-1/2 text-sm font-semibold">Birthday</div>
                                <div class="w-1/2 text-sm">{{$employee->birthdate}}</div>
                            </div>
                            <div class="sm:col-span-12 flex flex-row gap-x-1 mx-3 border-b h-fit pb-2">
                                <div class="w-1/2 text-sm font-semibold">Shift</div>
                                <div class="w-1/2 text-sm">{{$employee->shift}}</div>
                            </div>
                            <div class="sm:col-span-12 flex flex-row gap-x-1 mx-3 border-b h-fit pb-2">
                                <div class="w-1/2 text-sm font-semibold">Position</div>
                                <div class="w-1/2 text-sm">{{$employee->position}}</div>
                            </div>
                            <div class="sm:col-span-12 flex flex-row gap-x-1 mx-3 border-b h-fit pb-2">
                                <div class="w-1/2 text-sm font-semibold">Date Hired</div>
                                <div class="w-1/2 text-sm">{{$employee->date_of_employment}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="flex flex-col w-1/4 text-black p-6 shadow-2xl border border-gray-500 rounded-md">
                    <div class="flex justify-between border-b-2 border-gray-500 pb-3">
                        <p class="font-bold text-xl">{{$employee->name}}</p>
                        <a x-data x-on:click="$dispatch('open-modal')" class="text-sm mt-1 cursor-pointer">Edit</a>
                    </div>
                    <div class="pt-3">
                        <p class="text-xs font-medium">SHIFT</p>
                        <p class="text-xs pb-2">{{$employee->shift}}</p>
                        <p class="text-xs font-medium">ADDRESS</p>
                        <p class="text-xs pb-2">{{$employee->address}}</p>
                        <p class="text-xs font-medium">POSITION</p>
                        <p class="text-xs pb-2">{{$employee->position}}</p>
                    </div>
                </div>
                <div class="flex flex-col w-3/4 text-black p-6 shadow-2xl border border-gray-500 rounded">
                    <div class="flex justify-between pb-10">
                        <p class="font-bold text-xl">{{$employee->name}}</p>
                    </div>
                    <div class="">
                        {{ QrCode::size(250)->generate("$employee->name") }}
                    </div>
                </div>
            -->
            <div
                x-data = "{ show: false }"
                x-show = "show"
                x-on:open-modal.window = "show = true"
                x-on:close-modal.window = "show = false"
                x-on:keydown.escape.window = "show = false"
                
                class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div @click="show = ! show" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <div class="flex w-full justify-center pt-16">
                        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-6/12">
                            <h3 class="text-lg font-bold leading-6 text-gray-900 p-5" id="modal-title">Edit {{$employee->name}}</h3>
                
                            <form method="POST" action="/editWorker/profile/{{ $employee->id }}" class="mt-2 w-full p-5 border-t border-b pb-6">
                                <h3 class="text-lg font-semibold leading-6 text-gray-900 pb-6" id="modal-title">Employee Information</h3>
                                @method('PUT')
                                @csrf
                                <div class="pb-8">
                                    <div class="flex flex-row w-full grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-12">
                                        <div class="sm:col-span-6">
                                            <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Full Name</label>
                                            <input 
                                                type="text" 
                                                name="name"  
                                                value="{{ $employee->name }}" 
                                                autocomplete="off" 
                                                class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
                                                sm:leading-6">
                                                @error('name')
                                                    <p class="text-red-500 text-xs p-1">
                                                        {{$message}}
                                                    </p>
                                                @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Middle Name</label>
                                            <input 
                                                type="text" 
                                                name="middle_name"  
                                                value="{{ $employee->middle_name }}" 
                                                autocomplete="off" 
                                                class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
                                                sm:leading-6">
                                                @error('middle_name')
                                                    <p class="text-red-500 text-xs p-1">
                                                        {{$message}}
                                                    </p>
                                                @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Suffix</label>
                                            <select name="extension_name" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> 
                                                @if ($employee->extension_name == null)
                                                    <option value="N/A">N/A</option>
                                                    <option value="Sr">Sr</option>
                                                    <option value="Jr">Jr</option>
                                                    <option value="III">III</option>
                                                    <option value="IV">IV</option>
                                                    <option value="V">V</option>
                                                    <option value="VI">VI</option>
                                                    <option value="VII">VII</option>
                                                @else
                                                    <option value="{{ $employee->extension_name }}">{{ $employee->extension_name }}</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Sr">Sr</option>
                                                    <option value="Jr">Jr</option>
                                                    <option value="III">III</option>
                                                    <option value="IV">IV</option>
                                                    <option value="V">V</option>
                                                    <option value="VI">VI</option>
                                                    <option value="VII">VII</option>
                                                @endif
                                            </select>
                                            @error('extension_name')
                                                <p class="text-red-500 text-xs p-1">
                                                    {{$message}}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Birthdate</label>
                                            <input 
                                                type="date" 
                                                name="birthdate"
                                                value="{{ $employee->birthdate }}" 
                                                autocomplete="off" 
                                                class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
                                                sm:leading-6">
                
                                            @error('birthdate')
                                                <p class="text-red-500 text-xs p-1">
                                                    {{$message}}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Age</label>
                                            <input 
                                                type="number" 
                                                name="age"
                                                min="18"
                                                value="{{ $employee->age }}" 
                                                autocomplete="off" 
                                                class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
                                                sm:leading-6">
                                            @error('age')
                                                <p class="text-red-500 text-xs p-1">
                                                    {{$message}}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Gender</label>
                                            <select name="gender" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            @error('gender')
                                                <p class="text-red-500 text-xs p-1">
                                                    {{$message}}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="sm:col-span-12">
                                            <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Address</label>
                                            <textarea 
                                                type="text" 
                                                name="address"  
                                                value="{{ $employee->address }}" 
                                                autocomplete="off" 
                                                class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
                                                sm:leading-6">{{ $employee->address }}</textarea>
                                            @error('address')
                                                <p class="text-red-500 text-xs p-1">
                                                    {{$message}}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h3 class="text-lg font-semibold leading-6 text-gray-900 pb-6" id="modal-title">Organizational Information</h3>
                                <div class="flex flex-row w-full grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-12 pb-4">
                                    <!-- Start again here -->
                                    <div class="sm:col-span-6">
                                        <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Position</label>
                                        <select name="position" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @if ($employee->position == null)
                                                <option value="Parer">Parer</option>
                                                <option value="Sheller">Sheller</option>
                                            @else
                                                <option value="{{ $employee->position }}">{{ $employee->position }}</option>
                                                <option value="Parer">Parer</option>
                                                <option value="Sheller">Sheller</option>
                                            @endif
                                        </select>
                                        @error('position')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Status</label>
                                        <select name="status" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @if ($employee->status == null)
                                                <option value="Regular">Regular</option>
                                                <option value="Probationary">Probationary</option>
                                            @else
                                                <option value="{{ $employee->status }}">{{ $employee->status }}</option>
                                                <option value="Regular">Regular</option>
                                                <option value="Probationary">Probationary</option>
                                            @endif
                                        </select>
                                        @error('status')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Shift</label>
                                        <select name="shift" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @if ($employee->shift == null)
                                                <option value="Green">Green</option>
                                                <option value="Red">Red</option>
                                                <option value="Yellow">Yellow</option>
                                            @else
                                                <option value="{{ $employee->shift }}">{{ $employee->shift }}</option>
                                                <option value="Green">Green</option>
                                                <option value="Red">Red</option>
                                                <option value="Yellow">Yellow</option>
                                            @endif
                                        </select>
                                        @error('shift')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Employment Status</label>
                                        <select name="employment_status" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            @if ($employee->employment_status == null)
                                                <option value="Active">Active</option>
                                                <option value="Resigned">Resigned</option>
                                                <option value="Terminated">Terminated</option>
                                                <option value="AWOL">AWOL</option>
                                            @else
                                                <option value="{{ $employee->employment_status }}">{{ $employee->employment_status }}</option>
                                                <option value="Active">Active</option>
                                                <option value="Resigned">Resigned</option>
                                                <option value="Terminated">Terminated</option>
                                                <option value="AWOL">AWOL</option>
                                            @endif
                                        </select>
                                        @error('employment_status')
                                            <p class="text-red-500 text-xs p-1">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="pt-8 px-4 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="submit" class="inline-flex w-full justify-center rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-600 sm:ml-3 sm:w-auto">
                                        Save Changes
                                    </button>
                                    <button type="button" @click="show = ! show" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                
                            
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>
    </div>
    {{--@livewire('editProfile', ['employee' => $employee])--}}
    <!--
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
              <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Deactivate account</h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    -->
@include('partials.footer')
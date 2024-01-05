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
                            {{ QrCode::size(250)->generate("$employee->name") }}
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
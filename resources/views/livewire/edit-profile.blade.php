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
                                class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
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
                                class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
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
                        <div class="sm:col-span-6">
                            <label class="block text-xs font-medium pl-1 text-gray-600 uppercase pb-1">Birthdate</label>
                            <input 
                                type="date" 
                                name="birthdate"
                                value="{{ $employee->birthdate }}" 
                                autocomplete="off" 
                                class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
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
                                class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
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
                                class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
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
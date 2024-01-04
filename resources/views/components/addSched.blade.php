<div 
x-data = "{ visible : false }"
x-show = "visible"
x-on:open-addSched.window = "visible = true"
x-on:close-addSched.window = "visible = false"

class="fixed inset-0 z-10 w-screen overflow-y-auto">
    <div x-on:click="visible = false" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="flex w-full justify-center pt-16">
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-6/12">
            <form action="/addSched" method="POST" class="w-full h-fit shadow-lg border border-gray-300 rounded-md">
                @csrf
                <h2 class="bg-gray-50 rounded-t-md text-base font-semibold leading-7 text-gray-900 px-6 py-3 border-b">Add Schedule</h2>
                <div class="w-full grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-12 px-6 py-4 pb-6">
                    <div class="sm:col-span-12">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Shift</label>
                        <div>
                            <select name="shift" value="{{old('shift')}}" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="Green">Green Shift</option>
                                <option value="Red">Red Shift</option>
                                <option value="Yellow">Yellow Shift</option>
                            </select>
                            @error('shift')
                                <p class="text-red-500 text-xs p-1">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div date-rangepicker class="sm:col-span-12 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-12">
                        <div class="relative sm:col-span-6">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Start Date</label>
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input name="start_date" type="text" class="pl-9 block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                            placeholder="Select date start">
                            @error('start_date')
                                <p class="text-red-500 text-xs p-1">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="relative sm:col-span-6">
                            <label class="block text-sm font-medium leading-6 text-gray-900">End Date</label>
                            <div class="absolute mt-6 inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input name="end_date" type="text" class="pl-9 block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                            placeholder="Select date end">
                            @error('end_date')
                                <p class="text-red-500 text-xs p-1">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Start Time</label>
                        <div>
                            <select name="time_in" value="{{old('time')}}" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="6:00 AM">6:00 AM</option>
                                <option value="2:00 PM">2:00 PM</option>
                                <option value="10:00 PM">10:00 PM</option>
                            </select>
                            @error('time_in')
                                <p class="text-red-500 text-xs p-1">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label class="block text-sm font-medium leading-6 text-gray-900">End Time</label>
                        <div>
                            <select name="time_out" value="{{old('time')}}" class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="6:00 AM">6:00 AM</option>
                                <option value="2:00 PM">2:00 PM</option>
                                <option value="10:00 PM">10:00 PM</option>
                            </select>
                            @error('time_out')
                                <p class="text-red-500 text-xs p-1">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-x-6 w-full px-10 py-6 flex justify-end">
                    <button @click="visible = ! visible" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                        Cancel
                    </button>
                    <button name="submit" type="submit" class="w-1/5 rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
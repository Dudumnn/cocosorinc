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
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2">Edit Schedule</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </section>
    
            <section class="flex w-full gap-5 p-4">
                <form method="POST" action="/editSched/{{ $sched->id }}" class="w-3/5 shadow-lg border border-gray-300 rounded-sm">
                    @method('PUT')
                    @csrf
                    <h2 class="bg-gray-50 rounded-t-md text-base font-semibold leading-7 text-gray-900 px-6 py-3 border-b">Edit Schedule</h2>
                    <div class="w-full grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-12 px-6 py-4 pb-6">
                        
                        <div class="sm:col-span-12">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Shift</label>
                            <div>
                                <input 
                                    type="text" 
                                    name="shift"  
                                    value="{{ $sched->shift }}"
                                    class="bg-gray-300 pointer-events-none block w-full border-0 pl-2 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm 
                                    sm:leading-6">
                            </div>
                        </div>
                        <div date-rangepicker class="sm:col-span-12 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-12">
                            <div class="relative sm:col-span-6">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Start Date</label>
                                <div class="absolute mt-6 inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input 
                                    name="start_date" 
                                    value="{{  $sched->start_date  }}"
                                    type="text" 
                                    class="pl-9 block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                                    placeholder="Select date start">
                            </div>
                            <div class="relative sm:col-span-6">
                                <label class="block text-sm font-medium leading-6 text-gray-900">End Date</label>
                                <div class="absolute mt-6 inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input 
                                    name="end_date" 
                                    value="{{  $sched->end_date  }}"
                                    type="text" 
                                    class="pl-9 block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                                    placeholder="Select date end">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Start Time</label>
                            <div>
                                <select 
                                    name="time_in" 
                                    value="{{  $sched->time_in  }}" 
                                    class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    
                                    @if ($sched->time_in == null)
                                        <option value="6:00 AM">6:00 AM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                    @else
                                        <option value="{{  $sched->time_in  }}">{{  $sched->time_in  }}</option>
                                        <option value="6:00 AM">6:00 AM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium leading-6 text-gray-900">End Time</label>
                            <div>
                                <select 
                                    name="time_out" 
                                    value="{{  $sched->time_out  }}" 
                                    class="block w-full border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    
                                    @if ($sched->time_out == null)
                                        <option value="6:00 AM">6:00 AM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                    @else
                                        <option value="{{  $sched->time_out  }}">{{  $sched->time_out  }}</option>
                                        <option value="6:00 AM">6:00 AM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-6 w-full px-10 py-6 flex justify-end">
                        <button name="submit" type="submit" class="w-2/5 rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Save Changes
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
@include('partials.footer')
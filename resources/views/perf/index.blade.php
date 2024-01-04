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
                <div class="w-full flex">
                    <h4 class="w-full page-title font-semibold text-slate-800 text-lg text-left">Performance</h4>
                </div>
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
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2">Weekly Performance</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </section>
    
            <section class="flex gap-5 w-full p-6">
                <div class="max-w-96 w-3/4 bg-white border rounded-lg shadow-2xl p-4 md:p-6">
                    <div class="flex w-full justify-between mb-5">
                        <div class="grid gap-3 grid-cols-2">
                            <div>
                                <input type="text" placeholder="Search Employee" class="input input-bordered input-md w-full max-w-xs" />
                            </div>
                            
                        </div>
                        <div>
                            <button id="dropdownDefaultButton"
                                data-dropdown-toggle="lastDaysdropdown"
                                data-dropdown-placement="bottom" type="button" class="px-3 py-2 inline-flex items-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Last week <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                                    </li>
                                    <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                                    </li>
                                    <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="line-chart"></div>
                        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-2.5">
                            <div class="pt-5">      
                            
                            </div>
                        </div>
                    </div>
            
                    <div class="max-w-sm h-fit border bg-white rounded-lg shadow-2xl dark:bg-gray-800 p-4 md:p-6">
                        <div class="stats stats-vertical shadow">
  
                            <div class="stat">
                              <div class="stat-title text-gray-700">Average Output <br>for the Week</div>
                              <div class="stat-desc">Jan 1st - Feb 1st</div>
                            </div>
                            
                            <div class="stat">
                              <div class="stat-title">Total Output / Total No. <br>of Days</div>
                              <div class="stat-value">4,200</div>
                              <div class="stat-desc">↗︎ 400 (22%)</div>
                            </div>
                            
                            <div class="stat">
                              <div class="stat-title">Total Output / No. of Days <br>Worked</div>
                              <div class="stat-value">1,200</div>
                              <div class="stat-desc">↘︎ 90 (14%)</div>
                            </div>
                            
                        </div>
                    </div>
            </section>
        </div>
    </div>
    
@include('partials.footer')

    {{-- <ul>
        @foreach ($users as $user)
            <li class="text-md font-bold">{{ $user->name }}
                <ul class="font-normal">
                    <li>{{ $user->age }}</li>
                    <li>{{ $user->gender }}</li>
                    <li>{{ $user->email }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ul> --}}

    {{--
        
    --}}
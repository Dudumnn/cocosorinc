
<div id="default-sidebar" :class="isOpen?'w-64':'w-0'"  class="px-2 overflow-y-auto bg-gray-200 pt-6 top-0 left-0 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <ul class="px-2 space-y-2 font-medium">
      <h5 id="drawer-navigation-label" class="pt-4 pb-1 text-base font-semibold text-gray-500 uppercase">
         Main
      </h5>
      <li>
         <a href="/dashboard" class="{{ request()->segment(1) === 'dashboard' ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
            <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
               <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
               <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            <span class="ml-3">Dashboard</span>
         </a>
      </li>
      <li>
         <a href="/staff" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
               <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Staff</span>
         </a>
      </li>
      <li>
         <a type="button" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            {{--<svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
               <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
            </svg>--}}
            <svg class="bi bi-person-fill flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
               <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
             </svg>
            <span class="flex-1 pointer-events-none ml-3 whitespace-nowrap">Employee</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
         </a>
         <ul id="dropdown-example" class="{{ request()->segment(1) === 'employees' || request()->segment(1) === 'add' ? '' : 'hidden' }}
            py-2 space-y-2">
            <li>
               <a href="/add" class="{{ request()->segment(1) === 'add' ? 'active' : '' }} flex items-center w-full py-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                  Add Employee
               </a>
            </li>
            <li class="">
               <a href="/employees" class="{{ request()->segment(1) === 'employees' ? 'active' : '' }} flex items-center w-full py-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                  Employee List
               </a>
            </li>
         </ul>
      </li>
      <h5 id="drawer-navigation-label" class="pt-4 pb-1 text-base font-semibold text-gray-500 uppercase">
         Management
      </h5>
      <li>
         <a href="/leave" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
            <svg class="bi bi-calendar2-week-fill flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
               <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
             </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Leave</span>
         </a>
      </li>
      <li>
         <a href="/schedule" class="{{ request()->segment(1) === 'schedule' ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
            <svg class="bi bi-clock-fill flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
               <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Schedule</span>
         </a>
      </li>
      <li>
         <a type="button" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group" aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
            <svg class="bi bi-bar-chart-fill flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
               <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
            </svg>
            <span class="flex-1 pointer-events-none ml-3 whitespace-nowrap">Performance</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
         </a>
         <ul id="dropdown-example1" class="{{ request()->segment(1) === 'report' || request()->segment(1) === 'fullReport' ? '' : 'hidden' }} py-2 space-y-2">
            {{--<li>
               <a href="/weekly_performance" class="{{ request()->segment(1) === 'weekly_performance' ? 'active' : '' }} flex items-center w-full py-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                  Weekly Performance
               </a>
            </li>--}}
            <li>
               <a href="/report" class="{{ request()->segment(1) === 'report' ? 'active' : '' }} flex items-center w-full py-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                  Performance Track
               </a>
            </li>
            <li>
               <a href="/fullReport" class="{{ request()->segment(1) === 'fullReport' ? 'active' : '' }} flex items-center w-full py-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">
                  Full Report
               </a>
            </li>
         </ul>
      </li>
   </ul>
</div>
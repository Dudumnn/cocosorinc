{{-- 
    @dd(auth()->user())
    @dd(auth()->user()->name)
--}}
@include('partials.header', [$title])
    @php @endphp
    <x-navigation />
    <x-messages />
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
            </ol>
        </nav>
    </section>

    <section class="p-4 sm:ml-64">
        <div class="overflow-x-auto relative">
            <div class="w-full bg-slate-100 flex flex-space-between">
                <div class="btn round-none bg-gray">
                    <a href="/generate-pdf">Download PDF</a>
                </div>
                <div class="btn round-none bg-gray">
                    <button>Add New Employee</button>
                </div>
            </div>
            <table class="w-3/4 table table-xs text-xs md:text-xs lg:text-xs mx-auto">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th></th>
                        <th>Full Name</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Position</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach ($users as $emp)
                    <tr class="border-b-2 border-gray-200">
                        <th>
                            {{ $emp->id }}
                        </th>
                        <td>
                            {{ $emp->name }}
                        </td>
                        <td>
                            {{ $emp->birthdate }}
                        </td>
                        <td>
                            {{ $emp->age }}
                        </td>
                        <td>
                            {{ $emp->gender }}
                        </td>
                        <td>
                            {{ $emp->status }}
                        </td>
                        <td>
                            {{ $emp->position }}
                        </td>
                    </tr>
                    @endforeach
                </tbody> 
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Full Name</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Position</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
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
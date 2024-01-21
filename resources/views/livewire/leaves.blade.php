<div class="relative overflow-hidden w-full px-6 py-6">
    <div class="bg-white relative shadow-xl border border-gray-200 sm:rounded-sm overflow-hidden w-full px-5 py-4 mb-3">
        <form id="filterForm" class="flex items-center justify-between py-4 px-2 ">
            <div class="flex">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input 
                        wire:model.live.debounce.300ms="search" 
                        type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 "
                        placeholder="Search" required="">
                </div>
            </div>
        </form>
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 text-sm text-left text-gray-500">
                <thead class="text-xs uppercase text-white bg-gray-700">
                    <tr>
                        <th scope="col" class="px-4 py-3" wire:click="setSortBy('name')">
                            <button class="flex items-center gap-1">
                                No.
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3" wire:click="setSortBy('name')">
                            <button class="flex items-center gap-1">
                                Name
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3" wire:click="setSortBy('position')">
                            <button class="flex items-center gap-1">
                                Leave Date
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3" wire:click="setSortBy('status')">
                            <button class="flex items-center gap-1">
                                Description
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 0;
                    @endphp
                    @forelse ($leaves as $leave)
                        <tr class="border-b">
                            @php
                                $count++;
                            @endphp
                            <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $count }}
                            </td>
                            <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $leave->full_name }}
                            </td>
                            <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                @php
                                $start = \Carbon\Carbon::parse($leave->leave_date);
                                $formattedDate = $start->format('M d, Y');
                                echo $formattedDate;
                            @endphp
                            </td>
                            <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{ $leave->description }}
                            </td>
                            <td class="px-4 py-3 flex gap-2 items-center justify-end">
                                <div x-data="{ show: false }">
                                    <button x-on:click="show = ! show" class="p-2 bg-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </button>
                                    <div x-show="show" class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                        <div class="flex w-full justify-center pt-16">
                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-6/12">
                                                <form method="POST" action="/editLeave/{{ $leave->id }}" class="w-full h-fit shadow-lg border border-gray-300 rounded-md">
                                                    @method('PUT')
                                                    @csrf
                                                    <h2 class="bg-gray-50 rounded-t-md text-base font-semibold leading-7 text-gray-900 px-6 py-3 border-b">Add Schedule</h2>
                                                    <div class="w-full grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-12 px-6 py-4 pb-6">
                                                        <div class="sm:col-span-12">
                                                            <label class="block text-sm font-medium leading-6 text-gray-900">Shift</label>
                                                            <div>
                                                                <select name="emp_id" id="empSelect" value={{ $leave->id }} class="block w-full border-0 py-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                    <option value={{ $leave->emp_id }}>{{ $leave->full_name }}</option>
                                                                    @foreach ($emps as $emp)
                                                                        <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                {{--<div id="placeholderDisplay"></div>
                                                                <input name="full_name" type="text" id="empNameInput" value="{{ $leave->full_name }}" class="hidden">--}}
                                                                {{--<script>
                                                                    document.getElementById('empSelect').addEventListener('change', function () {
                                                                        var selectedIndex = this.selectedIndex;
                                                                        var selectedOption = this.options[selectedIndex];
                                                                        var placeholderText = selectedOption.text;
                                                                
                                                                        // Display the placeholder text below the select element
                                                                        document.getElementById('placeholderDisplay').innerText = placeholderText;
                                                                        document.getElementById('empNameInput').value = placeholderText;
                                                                    });
                                                                </script>--}}
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-12">
                                                            <label class="block text-sm font-medium leading-6 text-gray-900">Leave Date</label>
                                                            <div class="relative w-full">
                                                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                                    </svg>
                                                                </div>
                                                                <input name="leave_date" value="{{ $leave->leave_date }}" datepicker datepicker-format="yyyy-mm-dd" datepicker-autohide type="text" class="pl-9 block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Select date">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-12">
                                                            <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                                            <div>
                                                                <textarea name="description" value="{{ $leave->description }}" type="text" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $leave->description }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-x-6 w-full px-10 pb-6 flex justify-end">
                                                        <a x-on:click="show = ! show"  class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                                                            <span>Cancel</span>
                                                        </a>
                                                        <button type="submit" class="w-1/5 rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div x-data="{ open: false }" class="flex space-x-3">
                                    <button id="myButton" onclick="disableButton()" x-on:click="open = ! open" class="p-2 bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </button>
                                    <form method="POST" action="/deleteLeave/{{ $leave->id }}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" x-show="open" class="flex p-1.5 items-center text-red-500 underline" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
                                            Proceed to Delete?
                                        </button>
                                    </form>
                                    <a x-show="open" class="flex items-center" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
                                        or
                                    </a>
                                    <button onclick="enableButton()" x-on:click="open = ! open" x-show="open" class="flex items-center underline" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
                                        Cancel?
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-3 text-center text-gray-500">
                                No items found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

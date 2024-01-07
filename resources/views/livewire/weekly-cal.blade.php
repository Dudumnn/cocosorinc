<div class="bg-white relative shadow-xl border border-gray-200 sm:rounded-sm overflow-hidden w-full px-5 py-4 mx-6 my-6 mb-3">
    <div class="flex items-center justify-between d p-4">
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
                    wire:model.live.debounce.300ms = "search"
                    type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                    placeholder="Search" required="">
            </div>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full border border-gray-200 text-sm text-left text-gray-500">
            <thead class="text-xs uppercase text-white bg-gray-700">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        <button class="flex items-center gap-1">
                            ID
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </th>
                    <th scope="col" class="px-4 py-3">
                        <button class="flex items-center gap-1">
                            Employee
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </th>
                    @php
                        $currentDate = \Carbon\Carbon::parse($date->start_date);
                        $endDate = \Carbon\Carbon::parse($date->end_date);
                    @endphp

                    @while ($currentDate->lte($endDate))
                        <th scope="col" class="px-4 py-3">
                            <button class="flex items-center gap-1">
                                {{ $currentDate->format('M d, Y') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                        </th>

                        @php
                            $currentDate->addDay();
                        @endphp
                    @endwhile
                    <th scope="col" class="px-4 py-3">
                        <button class="flex items-center gap-1">
                            Count
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </th>
                    <th scope="col" class="px-4 py-3">
                        <button class="flex items-center gap-1">
                            Average
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </th>
                    <th scope="col" class="px-4 py-3">
                        <button class="flex items-center gap-1">
                            Potential
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($emps as $emp)
                    <tr class="border-b">
                        <th class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                            {{ $emp->id }}
                        </th>
                        <td class="px-4 py-3">
                            {{ $emp->name }}
                        </td>

                        @php
                            $currentDate = \Carbon\Carbon::parse($date->start_date);
                            $endDate = \Carbon\Carbon::parse($date->end_date);
                            $dayCount = 0;
                            $sum = 0;
                            $max = 0;
                        @endphp

                        @while ($currentDate->lte($endDate))
                            <td class="px-4 py-3">
                                @php
                                    $outputValue = 0;
                                @endphp
                                @foreach ($outputs as $output)
                                    @if ($output->name == $emp->name)
                                        @if ($output->date == $currentDate->format('Y-m-d'))
                                            {{ $output->output }}
                                            @php $max++; $outputValue = $output->output; $found = true; break; @endphp
                                        @else
                                        @endif
                                    @endif
                                @endforeach

                                @php
                                    if (!isset($found)) {
                                        echo '0';
                                    }
                                    unset($found);
                                    $currentDate->addDay();
                                    $dayCount++;
                                    $sum += $outputValue;
                                @endphp
                            </td>
                        @endwhile

                        <td class="px-4 py-3">
                            {{ $dayCount }}
                        </td>
                        
                        @php
                            $average = ($dayCount > 0) ? number_format($sum / $dayCount, 3) : 0;
                        @endphp
                        <td class="px-4 py-3">
                            {{ $average }}
                        </td>
                        
                        @php
                            $potential = ($max > 0) ? number_format($sum / $max, 3) : 0;
                        @endphp
                        <td class="px-4 py-3">
                            {{ $potential }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-3 text-center text-gray-500">
                            No items found.
                        </td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>

    <div class="py-4 px-3">
        <div class="flex items-center justify-space-between">
            <div class="flex pt-3 space-x-4 items-center mb-3">
                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                <select wire:model.live='perPage' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2 ">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            {{ $emps->links()}}
        </div>
    </div>
</div>
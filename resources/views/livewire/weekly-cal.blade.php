<div class="bg-white relative shadow-xl border border-gray-200 sm:rounded-sm overflow-hidden w-full px-5 py-4 mx-6 my-6 mb-3">

    <div class="grid grid-cols-1 gap-x-3 w-full sm:grid-cols-12">
        <div class="sm:col-span-4 shadow-lg border border-gray-200 rounded-sm">
            <div class="w-full border-b px-3 py-2 ">
                <span class="text-sm font-medium text-gray-500">Employees</span>
            </div>
            <div class="w-full p-3">
                <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                    <div class="sm:col-span-7">Range</div>
                    <div class="sm:col-span-5">No. of Employees</div>
                </div>
                <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                    <div class="sm:col-span-7">100 - 400</div>
                    <div class="sm:col-span-5"></div>
                </div>
                <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                    <div class="sm:col-span-7">401 - 600</div>
                    <div class="sm:col-span-5"></div>
                </div>
                <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                    <div class="sm:col-span-7">800 - 874</div>
                    <div class="sm:col-span-5"></div>
                </div>
                <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                    <div class="sm:col-span-7">875 - 1000</div>
                    <div class="sm:col-span-5"></div>
                </div>
                <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                    <div class="sm:col-span-7">1001 - 1200</div>
                    <div class="sm:col-span-5"></div>
                </div>
                <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                    <div class="sm:col-span-7">1201 - 1400</div>
                    <div class="sm:col-span-5"></div>
                </div>
                <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                    <div class="sm:col-span-7">1401 - 1600</div>
                    <div class="sm:col-span-5"></div>
                </div>
            </div>
        </div>
    </div>
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
                        ID
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Employee
                    </th>
                    @php
                        $currentDate = \Carbon\Carbon::parse($date->start_date);
                        $endDate = \Carbon\Carbon::parse($date->end_date);
                    @endphp

                    @while ($currentDate->lte($endDate))
                        <th scope="col" class="px-4 py-3">
                            {{ $currentDate->format('M d, Y') }}
                        </th>

                        @php
                            $currentDate->addDay();
                        @endphp
                    @endwhile
                    <th scope="col" class="px-4 py-3">
                        Average
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Total
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Count
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @forelse ($emps as $emp)
                    <tr class="border-b">
                        <th class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $emp->id }}
                        </th>
                        <td class="px-4 py-4">
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
                            <td class="px-4 py-4">
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
                        
                        @php
                            $average = ($dayCount > 0) ? number_format($sum / $dayCount, 3) : 0;
                        @endphp
                        <td class="px-4 py-4 bg-red-200">
                            {{ $average }}
                        </td>
                        @php
                            $total += $sum;
                        @endphp
                        <td class="px-4 py-4 bg-orange-200">
                            {{ number_format($sum, 3) }}
                        </td>

                        <td class="px-4 py-4">
                            {{ $max }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-4 text-center text-gray-500">
                            No items found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot class="text-xs uppercase text-white bg-gray-200">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Employee
                    </th>
                    @php
                        $currentDate = \Carbon\Carbon::parse($date->start_date);
                        $endDate = \Carbon\Carbon::parse($date->end_date);
                    @endphp

                    @while ($currentDate->lte($endDate))
                        <th scope="col" class="px-4 py-3">
                            {{ $currentDate->format('M d, Y') }}
                        </th>

                        @php
                            $currentDate->addDay();
                        @endphp
                    @endwhile
                    <th scope="col" class="px-4 py-3">
                        Average
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Total
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Count
                    </th>
                </tr>
            </tfoot>
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
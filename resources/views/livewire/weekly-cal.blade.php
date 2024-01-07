<div>
    <div class="hidden">
        @php
            $no1 = 0;
            $no2 = 0;
            $no3 = 0;
            $no4 = 0;
            $no5 = 0;
            $no6 = 0;
            $no7 = 0;
            $no8 = 0;

            $na1 = 0;
            $na2 = 0;
            $na3 = 0;
            $na4 = 0;
            $na5 = 0;
        @endphp
        @foreach ($emps as $emp)
            @php
                $currentDate = \Carbon\Carbon::parse($date->start_date);
                $endDate = \Carbon\Carbon::parse($date->end_date);
                $dayCount = 0;
                $sum = 0;
                $max = 0;
                $outputValue = 0;
            @endphp

            @while ($currentDate->lte($endDate))
                @foreach ($outputs as $output)
                    @if ($output->name == $emp->name)
                        @if ($output->date == $currentDate->format('Y-m-d'))
                            @php  $datee[] = $currentDate->format('Y-m-d'); $max++; $outputValue = $output->output; break; @endphp
                        @else
                        @endif
                    @endif
                @endforeach

                @php
                    $currentDate->addDay();
                    $dayCount++;
                    $sum += $outputValue;
                @endphp
            @endwhile
            
            @php
                $average = ($dayCount > 0) ? number_format($sum / $dayCount, 2) : 0;
            @endphp
            @if ($emp->position == 'Sheller')
                @if ($average >= 100 && $average <= 400)
                    {{$no1++}}
                @endif
                @if ($average >= 401 && $average <= 600)
                    {{$no2++}}
                @endif
                @if ($average >= 601 && $average <= 800)
                    {{$no3++}}
                @endif
                @if ($average >= 800 && $average <= 874)
                    {{$no4++}}
                @endif
                {{--Below Quota--}}
                @if ($average >= 875 && $average <= 1000)
                    {{$no5++}}
                @endif
                @if ($average >= 1001 && $average <= 1200)
                    {{$no6++}}
                @endif
                @if ($average >= 1201 && $average <= 1400)
                    {{$no7++}}
                @endif
                @if ($average >= 1401 && $average <= 1600)
                    {{$no8++}}
                @endif
            @else
                @if ($average >= 500 && $average <= 1000)
                    {{$na1++}}
                @endif
                @if ($average >= 1001 && $average <= 1499)
                    {{$na2++}}
                @endif
                {{--Below Quota--}}
                @if ($average >= 1500 && $average <= 2000)
                    {{$na3++}}
                @endif
                @if ($average >= 2001 && $average <= 2500)
                    {{$na4++}}
                @endif
                @if ($average >= 2501 && $average <= 3000)
                    {{$na5++}}
                @endif
            @endif
        @endforeach
        @php
            $chart = [
                '100 - 400', '401 - 600', '601 - 800', '801 - 874', '875 - 1000', '1001 - 1200', '1201 - 1400', '1401 - 1600'
            ]
            $chartVar = [
                $no1, $no2, $no3, $no4, $no5, $no6, $no7, $no8
            ];
            $bar = [
                '500 - 1000', '1001 - 1499', '1500 - 2000', '2001 - 2500', '2501 - 3000'
            ];
            $barVar = [
                $na1, $na2, $na3, $na4, $na5
            ]
        @endphp
    </div>
    <div class="bg-white relative shadow-xl border border-gray-200 sm:rounded-sm overflow-hidden w-full px-5 py-4 mx-6 my-6 mb-5">
        <div class="grid grid-cols-1 gap-x-3 w-full sm:grid-cols-12 p-2">
            <div class="sm:col-span-12 sm:flex sm:flex-col sm:items-center text-center text-lg font-bold mb-6">
                <span>{{$emp->shift}} Shift Sheller Below Quota</span>
                <span class="text-base">{{ \Carbon\Carbon::parse($date->start_date)->format('M d, Y')}}, {{\Carbon\Carbon::parse($date->end_date)->format('M d, Y')}}</span>
                <span class="text-base">{{$date->time_in}}, {{$date->time_out}}</span>
            </div>
            <div class="sm:col-span-5 border border-gray-200 rounded-sm text-xs">
                <div class="w-full">
                    <livewire:chart :first="$first" :second="$second"/>
                </div>
            </div>
            
            <div class="sm:col-span-7 border border-gray-200 rounded-sm text-xs">
                <div class="w-full border-b px-3 py-2 ">
                    <span class="text-sm font-medium text-gray-500">Sheller Employees</span>
                </div>
                <div class="w-full p-2">
                    <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">Range</div>
                        <div class="sm:col-span-5">No. of Employees</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">100 - 400</div>
                        <div class="sm:col-span-5">{{ $no1 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">401 - 600</div>
                        <div class="sm:col-span-5">{{ $no2 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">601 - 800</div>
                        <div class="sm:col-span-5">{{ $no3 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">801 - 874</div>
                        <div class="sm:col-span-5">{{ $no4 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">875 - 1000</div>
                        <div class="sm:col-span-5">{{ $no5 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">1001 - 1200</div>
                        <div class="sm:col-span-5">{{ $no6 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">1201 - 1400</div>
                        <div class="sm:col-span-5">{{ $no7 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">1401 - 1600</div>
                        <div class="sm:col-span-5">{{ $no8 }}</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="bg-white relative shadow-xl border border-gray-200 sm:rounded-sm overflow-hidden w-full px-5 py-4 mx-6 my-6 mb-5">
        <div class="grid grid-cols-1 gap-x-3 w-full sm:grid-cols-12 p-2">
            <div class="sm:col-span-12 sm:flex sm:flex-col sm:items-center text-center text-lg font-bold mb-6">
                <span>{{$emp->shift}} Shift Parer Below Quota</span>
                <span class="text-base">{{ \Carbon\Carbon::parse($date->start_date)->format('M d, Y')}}, {{\Carbon\Carbon::parse($date->end_date)->format('M d, Y')}}</span>
                <span class="text-base">{{$date->time_in}}, {{$date->time_out}}</span>
            </div>
            <div class="sm:col-span-5 border border-gray-200 rounded-sm text-xs">
                <div class="w-full">
                    <livewire:bar-chart :bar="$bar" :barVar="$barVar"/>
                </div>
            </div>
            <div class="sm:col-span-7 border border-gray-200 rounded-sm text-xs">
                <div class="w-full border-b px-3 py-2 ">
                    <span class="text-sm font-medium text-gray-500">Parer Employees</span>
                </div>
                <div class="w-full p-2">
                    <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">Range</div>
                        <div class="sm:col-span-5">No. of Employees</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">500 - 1000</div>
                        <div class="sm:col-span-5">{{ $na1 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">1001 - 1499</div>
                        <div class="sm:col-span-5">{{ $na2 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">1500 - 2000</div>
                        <div class="sm:col-span-5">{{ $na3 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">2001 - 2500</div>
                        <div class="sm:col-span-5">{{ $na4 }}</div>
                    </div>
                    <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">2501 - 3000</div>
                        <div class="sm:col-span-5">{{ $na5 }}</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
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
                        <th scope="col" class="px-4 py-3 min-w-24">
                            Employee
                        </th>
                        <th scope="col" class="px-4 py-3 min-w-24">
                            Position
                        </th>
                        @php
                            $currentDate = \Carbon\Carbon::parse($date->start_date);
                            $endDate = \Carbon\Carbon::parse($date->end_date);
                        @endphp
    
                        @while ($currentDate->lte($endDate))
                            <th scope="col" class="px-4 py-3 min-w-24">
                                {{ $currentDate->format('M d, Y') }}
                            </th>
    
                            @php
                                $currentDate->addDay();
                            @endphp
                        @endwhile
                        <th scope="col" class="px-4 py-3 min-w-24">
                            Average
                        </th>
                        <th scope="col" class="px-4 py-3 min-w-24">
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
                            <td class="px-4 py-4">
                                {{ $emp->name }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $emp->position }}
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
                                $average = ($dayCount > 0) ? number_format($sum / $dayCount, 2) : 0;
                            @endphp
                            <p class="hidden">
                                @if ($average >= 100 && $average <= 400 || $average < 100)
                                    {{$no1++}}
                                @endif
                            </p>
                            <td class="px-4 py-4 bg-red-200">
                                {{ $average }}
                            </td>
                            @php
                                $total += $sum;
                            @endphp
                            <td class="px-4 py-4 bg-orange-200">
                                {{ number_format($sum, 2) }}
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
                <tfoot class="text-xs uppercase text-white bg-gray-700">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            Employee
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Position
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
</div>
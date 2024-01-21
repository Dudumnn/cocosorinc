<div class="relative">
    {{--<div class="hidden">
        @php
            $row = [];
            $nn = [];
            $no1 = 0;
            $no2 = 0;
            $no3 = 0;
            $no4 = 0;
            $no5 = 0;
            $no6 = 0;
            $no7 = 0;
            $no8 = 0;

            $q = [];
            $a = [];
            $ford = [];
            $gord = [];

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
                    @php
                        $no1++;
                        $q[] = [
                            'name' => $emp->name,
                            'ave' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 401 && $average <= 600)
                    @php
                        $no2++;
                        $q[] = [
                            'name' => $emp->name,
                            'ave' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 601 && $average <= 800)
                    @php
                        $no3++;
                        $q[] = [
                            'name' => $emp->name,
                            'ave' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 800 && $average <= 874)
                    @php
                        $no4++;
                        $q[] = [
                            'name' => $emp->name,
                            'ave' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 875 && $average <= 1000)
                    @php
                        $no5++;
                        $a[] = [
                            'nam' => $emp->name,
                            'av' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 1001 && $average <= 1200)
                    @php
                        $no6++;
                        $a[] = [
                            'nam' => $emp->name,
                            'av' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 1201 && $average <= 1400)
                    @php
                        $no7++;
                        $a[] = [
                            'nam' => $emp->name,
                            'av' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 1401 && $average <= 1600)
                    @php
                        $no8++;
                        $a[] = [
                            'nam' => $emp->name,
                            'av' => $average
                        ];
                    @endphp
                @endif
            @else
                @if ($average >= 500 && $average <= 1000)
                    {{$na1++}}
                    @php
                        $ford[] = [
                            'fname' => $emp->name,
                            'aver' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 1001 && $average <= 1499)
                    {{$na2++}}
                    @php
                        $ford[] = [
                            'fname' => $emp->name,
                            'aver' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 1500 && $average <= 2000)
                    {{$na3++}}
                    @php
                        $gord[] = [
                            'fame' => $emp->name,
                            'rave' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 2001 && $average <= 2500)
                    {{$na4++}}
                    @php
                        $gord[] = [
                            'fame' => $emp->name,
                            'rave' => $average
                        ];
                    @endphp
                @endif
                @if ($average >= 2501 && $average <= 3000)
                    {{$na5++}}
                    @php
                        $gord[] = [
                            'fame' => $emp->name,
                            'rave' => $average
                        ];
                    @endphp
                @endif
            @endif
        @endforeach
        @php
            $chart = [
                '100 - 400', '401 - 600', '601 - 800', '801 - 874', '875 - 1000', '1001 - 1200', '1201 - 1400', '1401 - 1600'
            ];
            $chartVar = [
                $no1, $no2, $no3, $no4, $no5, $no6, $no7, $no8
            ];
            $bar = [
                '500 - 1000', '1001 - 1499', '1500 - 2000', '2001 - 2500', '2501 - 3000'
            ];
            $barVar = [
                $na1, $na2, $na3, $na4, $na5
            ];
        @endphp
    </div>
    <div class="bg-white relative shadow-xl border border-gray-200 sm:rounded-sm overflow-hidden w-full px-5 py-4 mx-6 my-6 mb-5">
        <div class="grid grid-cols-1 gap-x-3 w-full sm:grid-cols-12 p-2">
            <div class="sm:col-span-12 sm:flex sm:flex-col sm:items-center text-center text-lg font-bold mb-6">
                <span>{{$emp->shift}} Shift Sheller Quota</span>
                <span class="text-base">{{ \Carbon\Carbon::parse($date->start_date)->format('M d, Y')}}, {{\Carbon\Carbon::parse($date->end_date)->format('M d, Y')}}</span>
                <span class="text-base">{{$date->time_in}}, {{$date->time_out}}</span>
            </div>
            <div class="sm:col-span-4 border border-gray-200 rounded-sm text-xs">
                <div class="w-full">
                    <livewire:chart :chart="$chart" :chartVar="$chartVar"/>
                </div>
            </div>
            
            <div class="sm:col-span-4 border border-gray-200 rounded-sm text-xs">
                <div class="w-full border-b px-3 py-2 ">
                    <span class="text-sm font-medium text-gray-500">Employees Below Quota</span>
                </div>
                <div class="w-full p-2">
                    <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">Employee Name</div>
                        <div class="sm:col-span-5">Average Output</div>
                    </div>
                    @forelse ($q as $itemm)
                        <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                            <div class="sm:col-span-7">{{$itemm['name']}}</div>
                            <div class="sm:col-span-5">{{$itemm['ave']}}</div>
                        </div>
                    @empty
                        <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                            <div class="sm:col-span-12 flex justify-center">Nothing to show</div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="sm:col-span-4 border border-gray-200 rounded-sm text-xs">
                <div class="w-full border-b px-3 py-2 ">
                    <span class="text-sm font-medium text-gray-500">Employees Above Quota</span>
                </div>
                <div class="w-full p-2">
                    <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">Employee Name</div>
                        <div class="sm:col-span-5">Average Output</div>
                    </div>
                    @forelse ($a as $emm)
                        <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                            <div class="sm:col-span-7">{{$emm['nam']}}</div>
                            <div class="sm:col-span-5">{{$emm['av']}}</div>
                        </div>
                    @empty
                        <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                            <div class="sm:col-span-12 flex justify-center">Nothing to show</div>
                        </div>
                    @endforelse
                </div>
            </div>
            
        </div>
    </div>
    <div class="bg-white relative shadow-xl border border-gray-200 sm:rounded-sm overflow-hidden w-full px-5 py-4 mx-6 my-6 mb-5">
        <div class="grid grid-cols-1 gap-x-3 w-full sm:grid-cols-12 p-2">
            <div class="sm:col-span-12 sm:flex sm:flex-col sm:items-center text-center text-lg font-bold mb-6">
                <span>{{$emp->shift}} Shift Parer Quota</span>
                <span class="text-base">{{ \Carbon\Carbon::parse($date->start_date)->format('M d, Y')}}, {{\Carbon\Carbon::parse($date->end_date)->format('M d, Y')}}</span>
                <span class="text-base">{{$date->time_in}}, {{$date->time_out}}</span>
            </div>
            <div class="sm:col-span-4 border border-gray-200 rounded-sm text-xs">
                <div class="w-full">
                    <livewire:bar-chart :bar="$bar" :barVar="$barVar"/>
                </div>
            </div>
            <div class="sm:col-span-4 border border-gray-200 rounded-sm text-xs">
                <div class="w-full border-b px-3 py-2 ">
                    <span class="text-sm font-medium text-gray-500">Employees Below Quota</span>
                </div>
                <div class="w-full p-2">
                    <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">Employee Name</div>
                        <div class="sm:col-span-5">Average Output</div>
                    </div>
                    @forelse ($ford as $for)
                        <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                            <div class="sm:col-span-7">{{$for['fname']}}</div>
                            <div class="sm:col-span-5">{{$for['aver']}}</div>
                        </div>
                    @empty
                        <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                            <div class="sm:col-span-12 flex justify-center">Nothing to show</div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="sm:col-span-4 border border-gray-200 rounded-sm text-xs">
                <div class="w-full border-b px-3 py-2 ">
                    <span class="text-sm font-medium text-gray-500">Employees Above Quota</span>
                </div>
                <div class="w-full p-2">
                    <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                        <div class="sm:col-span-7">Employee Name</div>
                        <div class="sm:col-span-5">Average Output</div>
                    </div>
                    @forelse ($gord as $fame)
                        <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                            <div class="sm:col-span-7">{{$fame['fame']}}</div>
                            <div class="sm:col-span-5">{{$fame['rave']}}</div>
                        </div>
                    @empty
                        <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                            <div class="sm:col-span-12 flex justify-center">Nothing to show</div>
                        </div>
                    @endforelse
                </div>
            </div>
            
        </div>
    </div>--}}
    
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
        <div>
            <table class="w-full border border-gray-200 text-xs text-left text-gray-500">
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
                                        $value = '0';
                                    @endphp
                                    @foreach ($leaves as $leave)
                                        @if ($leave->full_name == $emp->name)
                                            @if ($leave->leave_date == $currentDate->format('Y-m-d'))
                                                @php
                                                    $value = 'On Leave';
                                                    break;
                                                @endphp
                                            @endif
                                        @endif
                                    @endforeach
    
                                    @php
                                        if (!isset($found)) {
                                            if ($value == '0') {
                                                echo $value;
                                            }else {
                                                echo "<span class='bg-red-500 p-2 text-white rounded-md'>$value</span>";
                                            }
                                            
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
                            {{--<p class="hidden">
                                @if ($average >= 100 && $average <= 400 || $average < 100)
                                    {{$no1++}}
                                @endif
                            </p>--}}
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
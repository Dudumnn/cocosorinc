<div class="relative w-11/12">
    <div class="hidden">
        @php
            $total = 0;
            $rate1 = 0;
            $rate2 = 0;
            $rate3 = 0;
            $rate4 = 0;
            $rate5 = 0;
            $rate6 = 0;
            $rate7 = 0;
            $rate8 = 0;
            $rate9 = 0;

            $sike1 = 0;
            $sike2 = 0;
            $sike3 = 0;
            $sike4 = 0;
            $sike5 = 0;
            $sike6 = 0;
            $sike7 = 0;
        @endphp
        @foreach ($emps as $employee)
            @php
                $currentDate = \Carbon\Carbon::parse($date->start_date);
                $endDate = \Carbon\Carbon::parse($date->end_date);
                $dayCount = 0;
                $sum = 0;
            @endphp
            @while ($currentDate->lte($endDate))
                @php
                    $outputValue = 0;
                @endphp
                @foreach ($outputs as $output)
                    @if ($output->name == $employee->name)
                        @if ($output->date == $currentDate->format('Y-m-d'))
                            @php $outputValue = $output->output; $found = true; break; @endphp
                        @else
                        @endif
                    @endif
                @endforeach
                @php
                    unset($found);
                    $currentDate->addDay();
                    $dayCount++;
                    $sum += $outputValue;
                @endphp
            @endwhile
            @php
                $average = ($dayCount > 0) ? number_format($sum / $dayCount, 2) : 0;
            @endphp
            @if ($employee->position == 'Parer')
                @if ($average <= 100){
                    @php
                        $rate1++;
                    @endphp
                }
                @endif
                @if ($average > 100 && $average < 401)
                    @php
                        $rate2++;
                    @endphp
                @endif
                @if ($average > 400 && $average < 601)
                    @php
                        $rate3++;
                    @endphp
                @endif
                @if ($average > 600 && $average < 801)
                    @php
                        $rate4++;
                    @endphp
                @endif
                @if ($average > 800 && $average < 875)
                    @php
                        $rate5++;
                    @endphp
                @endif
                @if ($average > 874 && $average < 1001)
                    @php
                        $rate6++;
                    @endphp
                @endif
                @if ($average > 1000 && $average < 1201)
                    @php
                        $rate7++;
                    @endphp
                @endif
                @if ($average > 1200 && $average < 1401)
                    @php
                        $rate8++;
                    @endphp
                @endif
                @if ($average > 1400 && $average < 1601)
                    @php
                        $rate9++;
                    @endphp
                @endif
            @endif
            @if ($employee->position == 'Sheller')
                @if ($average <= 500)
                    @php
                        $sike1++;
                    @endphp
                @endif
                @if ($average > 500 && $average < 1001)
                    @php
                        $sike2++;
                    @endphp
                @endif
                @if ($average > 1000 && $average < 1500)
                    @php
                        $sike3++;
                    @endphp
                @endif
                @if ($average > 1499 && $average < 2001)
                    @php
                        $sike4++;
                    @endphp
                @endif
                @if ($average > 2000 && $average < 2501)
                    @php
                        $sike5++;
                    @endphp
                @endif
                @if ($average > 2500 && $average < 3001)
                    @php
                        $sike6++;
                    @endphp
                @endif
                @if ($average > 3000 && $average < 3501)
                    @php
                        $sike7++;
                    @endphp
                @endif
            @endif
        @endforeach
    </div>
    <div class="bg-white relative overflow-hidden w-full px-5 py-4 mx-6 mb-3 flex flex-col">
        <div class="w-full flex justify-center pb-8">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Parer Performance Analysis</h5>
        </div>
        <div class="grid grid-cols-1 gap-x-3 gap-y-3 w-full sm:grid-cols-12 pb-3">
            <div class="sm:col-span-6 flex justify-center">
                <div class="w-full bg-white rounded-lg shadow-xl border border-gray-200 p-4 md:p-6">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Parers Below Quota</h5>
                    <div id="column-chart1"></div>
                </div>
            </div>
            <div class="sm:col-span-6 flex justify-center">
                <div class="w-full bg-white rounded-lg shadow-xl border border-gray-200 p-4 md:p-6">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Parers Above Quota</h5>
                    <div id="column-chart2"></div>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener("load", function() {
            const options = {
                    colors: ["#1A56DB","#FDBA8C"],
                    series: [
                    {
                        name: "Employees",
                        color: "#FDBA8C",
                        data: [
                        { x: "1-100", y: {{ $rate1 }} },
                        { x: "101-400", y: {{ $rate2 }} },
                        { x: "401-600", y: {{ $rate3 }} },
                        { x: "601-800", y: {{ $rate4 }} },
                        { x: "801-874", y: {{ $rate5 }} },
                        ],
                    },
                    ],
                    chart: {
                    type: "bar",
                    height: "320px",
                    width: "100%",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                    },
                    plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 8,
                    },
                    },
                    tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                    },
                    states: {
                    hover: {
                        filter: {
                        type: "darken",
                        value: 1,
                        },
                    },
                    },
                    stroke: {
                    show: true,
                    width: 0,
                    colors: ["transparent"],
                    },
                    grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14
                    },
                    },
                    dataLabels: {
                    enabled: false,
                    },
                    legend: {
                    show: false,
                    },
                    xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                    },
                    yaxis: {
                    show: false,
                    },
                    fill: {
                    opacity: 1,
                    },
                }
        
                if(document.getElementById("column-chart1") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("column-chart1"), options);
                    chart.render();
                }
            });
        </script>
        <script>
            window.addEventListener("load", function() {
            const options = {
                    colors: ["#1A56DB","#FDBA8C"],
                    series: [
                    {
                        name: "Employees",
                        color: "#1A56DB",
                        data: [
                        { x: "875-1000", y: {{ $rate6 }} },
                        { x: "1001-1200", y: {{ $rate7 }} },
                        { x: "1201-1400", y: {{ $rate8 }} },
                        { x: "1401-1600", y: {{ $rate9 }} },
                        ],
                    },
                    ],
                    chart: {
                    type: "bar",
                    height: "320px",
                    width: "100%",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                    },
                    plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 8,
                    },
                    },
                    tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                    },
                    states: {
                    hover: {
                        filter: {
                        type: "darken",
                        value: 1,
                        },
                    },
                    },
                    stroke: {
                    show: true,
                    width: 0,
                    colors: ["transparent"],
                    },
                    grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14
                    },
                    },
                    dataLabels: {
                    enabled: false,
                    },
                    legend: {
                    show: false,
                    },
                    xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                    },
                    yaxis: {
                    show: false,
                    },
                    fill: {
                    opacity: 1,
                    },
                }
        
                if(document.getElementById("column-chart2") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("column-chart2"), options);
                    chart.render();
                }
            });
        </script>
    </div>
    <div class="bg-white relative overflow-hidden w-full px-5 py-4 mx-6 mb-3 flex flex-col">
        <div class="w-full flex justify-center pb-8">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Sheller Performance Analysis</h5>
        </div>
        <div class="grid grid-cols-1 gap-x-3 gap-y-3 w-full sm:grid-cols-12 pb-3">
            <div class="sm:col-span-6 flex justify-center">
                <div class="w-full bg-white rounded-lg shadow-xl border border-gray-200 p-4 md:p-6">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Sheller Below Quota</h5>
                    <div id="column-chart3"></div>
                </div>
            </div>
            <div class="sm:col-span-6 flex justify-center">
                <div class="w-full bg-white rounded-lg shadow-xl border border-gray-200 p-4 md:p-6">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Sheller Above Quota</h5>
                    <div id="column-chart4"></div>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener("load", function() {
            const options = {
                    colors: ["#1A56DB","#FDBA8C"],
                    series: [
                    {
                        name: "Employees",
                        color: "#FDBA8C",
                        data: [
                        { x: "1-500", y: {{ $sike1 }} },
                        { x: "501-1000", y: {{ $sike2 }} },
                        { x: "1001-1499", y: {{ $sike3 }} },
                        ],
                    },
                    ],
                    chart: {
                    type: "bar",
                    height: "320px",
                    width: "100%",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                    },
                    plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 8,
                    },
                    },
                    tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                    },
                    states: {
                    hover: {
                        filter: {
                        type: "darken",
                        value: 1,
                        },
                    },
                    },
                    stroke: {
                    show: true,
                    width: 0,
                    colors: ["transparent"],
                    },
                    grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14
                    },
                    },
                    dataLabels: {
                    enabled: false,
                    },
                    legend: {
                    show: false,
                    },
                    xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                    },
                    yaxis: {
                    show: false,
                    },
                    fill: {
                    opacity: 1,
                    },
                }
        
                if(document.getElementById("column-chart3") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("column-chart3"), options);
                    chart.render();
                }
            });
        </script>
        <script>
            window.addEventListener("load", function() {
            const options = {
                    colors: ["#1A56DB","#FDBA8C"],
                    series: [
                    {
                        name: "Employees",
                        color: "#1A56DB",
                        data: [
                        { x: "1500-2000", y: {{ $sike4 }} },
                        { x: "2001-2500", y: {{ $sike5 }} },
                        { x: "2501-3000", y: {{ $sike6 }} },
                        { x: "3001-3500", y: {{ $sike7 }} },
                        ],
                    },
                    ],
                    chart: {
                    type: "bar",
                    height: "320px",
                    width: "100%",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                    },
                    plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 8,
                    },
                    },
                    tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                    },
                    states: {
                    hover: {
                        filter: {
                        type: "darken",
                        value: 1,
                        },
                    },
                    },
                    stroke: {
                    show: true,
                    width: 0,
                    colors: ["transparent"],
                    },
                    grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14
                    },
                    },
                    dataLabels: {
                    enabled: false,
                    },
                    legend: {
                    show: false,
                    },
                    xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                    },
                    yaxis: {
                    show: false,
                    },
                    fill: {
                    opacity: 1,
                    },
                }
        
                if(document.getElementById("column-chart4") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("column-chart4"), options);
                    chart.render();
                }
            });
        </script>
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
        <div class=" overflow-x-auto ">
            <table class="w-full border border-gray-200 text-xs text-left text-gray-500">
                <thead class="text-xs uppercase text-white bg-gray-700">
                    <tr>
                        <th scope="col" class="px-4 py-3 min-w-24">
                            No.
                        </th>
                        <th scope="col" class="pr-4 py-3 min-w-24">
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
                        $rate1 = 0;
                        $rate2 = 0;
                        $count = 0;
                    @endphp
                    @forelse ($emps as $emp)
                        @php
                            $count++;
                        @endphp
                        <tr class="border-b">
                            <td class="pl-4 py-4">
                                {{ $count }}
                            </td>
                            <td class="pr-4 py-4">
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
                            No.
                        </th>
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
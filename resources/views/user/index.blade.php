<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $title !== "" ? $title : 'Cocosor Inc.'}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
      .active{
        background-color: rgb(243 244 246);
        border-radius: 8px;
        color: white;
      }
    </style>
</head>
<body class="min-h-fit pt-10 px-15 bg-white">
    @php @endphp
    <div class="flex" id="wrapper" x-data="{isOpen:true}">
        <x-navigation />
        <x-sidebar />
        <div id="body" class="w-full h-3/4 transition-all duration-200 bg-white z-1">
            <section class="p-6 pt-10 w-full">
                <h4 class="w-full page-title font-semibold text-slate-800 text-lg text-left">Dashboard</h4>
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
                    </ol>
                </nav>
            </section>
            {{--
                This is the body for Dashboard Page
            --}}
            <section class="flex flex-col gap-5 p-4">
                @php
                    $shift = 0;
                    $total = 0;
                    $user = 0;
                    $greenShift = 0;
                    $redShift = 0;
                    $yellowShift = 0;
                    $proba = 0;
                    $reg = 0;
                @endphp
                @foreach ($workers as $stat)
                    @if ($stat->status == 'Probationary')
                        @php
                            $proba++;
                        @endphp
                    @else
                        @php
                            $reg++;
                        @endphp
                    @endif
                @endforeach
                @foreach ($workers as $data)
                    @php
                        $total++;
                    @endphp
                    @if ($data->shift == 'Green')
                        @php
                            $greenShift++;
                        @endphp
                    @endif
                    @if ($data->shift == 'Red')
                        @php
                            $redShift++;
                        @endphp
                    @endif
                    @if ($data->shift == 'Yellow')
                        @php
                            $yellowShift++;
                        @endphp
                    @endif
                @endforeach

                <div class="grid grid-cols-1 gap-x-3 w-full sm:grid-cols-12">
                    <div class="sm:col-span-3 flex justify-between px-3 py-5 shadow-lg border border-l-4 border-gray-200 rounded-md">
                        <div class="w-3/5">
                            <span class="text-sm font-medium text-gray-500">Working Shifts</span>
                            <h5 class="font-bold text-gray-700 text-lg">3 Shifts</h5>
                        </div>
                        <div class="w-1/5 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#D1D5DB" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
                            </svg>
                        </div>
                    </div>
                    <div class="sm:col-span-3 flex justify-between px-3 py-5 shadow-lg border border-l-4 border-gray-200 rounded-md">
                        <div class="w-3/5">
                            <span class="text-sm font-medium text-gray-500">Employees</span>
                            <h5 class="font-bold text-gray-700 text-lg">{{ $total }} Employees</h5>
                        </div>
                        <div class="w-1/5 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#D1D5DB" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="sm:col-span-3 flex justify-between px-3 py-5 shadow-lg border border-l-4 border-gray-200 rounded-md">
                        <div class="w-3/5">
                            <span class="text-sm font-medium text-gray-500">Users</span>
                            @if($users>1)
                                <h5 class="font-bold text-gray-700 text-lg">{{ $users }} Users</h5>
                            @elseif($users==1)
                                <h5 class="font-bold text-gray-700 text-lg">{{ $users }} User</h5>
                            @endif
                        </div>
                        <div class="w-1/5 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#D1D5DB" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-x-3 w-full sm:grid-cols-12">
                    <div class="sm:col-span-4 shadow-lg border border-gray-200 rounded-sm">
                        <div class="w-full border-b px-3 py-2 ">
                            <span class="text-sm font-medium text-gray-500">Employees per Shift</span>
                        </div>
                        <div class="w-full p-3">
                            <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                                <div class="sm:col-span-2 font-bold">#</div>
                                <div class="sm:col-span-4">Shift</div>
                                <div class="sm:col-span-4">Employees</div>
                            </div>
                            <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                                <div class="sm:col-span-2 font-bold">1</div>
                                <div class="sm:col-span-4">Green</div>
                                <div class="sm:col-span-4">{{ $greenShift }}</div>
                            </div>
                            <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                                <div class="sm:col-span-2 font-bold">2</div>
                                <div class="sm:col-span-4">Red</div>
                                <div class="sm:col-span-4">{{ $redShift }}</div>
                            </div>
                            <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                                <div class="sm:col-span-2 font-bold">3</div>
                                <div class="sm:col-span-4">Yellow</div>
                                <div class="sm:col-span-4">{{ $yellowShift }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 shadow-lg border border-gray-200 rounded-sm">
                        <div class="w-full border-b px-3 py-2 ">
                            <span class="text-sm font-medium text-gray-500">Employee's Status</span>
                        </div>
                        <div class="w-full p-3">
                            <div class="w-full bg-gray-700 grid grid-cols-1 p-2 text-white font-semibold gap-x-3 sm:grid-cols-12">
                                <div class="sm:col-span-2 font-bold">#</div>
                                <div class="sm:col-span-4">Status</div>
                                <div class="sm:col-span-4">Employees</div>
                            </div>
                            <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                                <div class="sm:col-span-2 font-bold">1</div>
                                <div class="sm:col-span-4">Probationary</div>
                                <div class="sm:col-span-4">{{ $proba }}</div>
                            </div>
                            <div class="w-full grid grid-cols-1 border-b-2 p-2 gap-x-3 sm:grid-cols-12">
                                <div class="sm:col-span-2 font-bold">2</div>
                                <div class="sm:col-span-4">Regular</div>
                                <div class="sm:col-span-4">{{ $reg }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 shadow-lg border border-gray-200 rounded-sm">
                        <div class="w-full border-b px-3 py-2 ">
                            <span class="text-sm font-medium text-gray-500">Local Calendar</span>
                        </div>
                        <div class="w-full py-12 flex flex-col items-center justify-center">
                            <div id="date" class="font-bold text-gray-700 text-xl"></div>
                            <div id="clock" class="font-bold text-blue-500 text-3xl"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <x-messages />
    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');

            const formattedTime = `${hours}:${minutes}:${seconds}`;

            document.getElementById('clock').innerText = formattedTime;
        }

        function updateDate() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = now.toLocaleDateString('en-US', options);

            document.getElementById('date').innerText = formattedDate;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Update the date every minute
        setInterval(updateDate, 60000);

        // Initial updates
        updateClock();
        updateDate();
    </script>
</body>
</html>
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
                <h4 class="w-full page-title font-semibold text-slate-800 text-lg text-left">Schedules</h4>
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
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2">Schedules</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </section>
    
            <section class="flex w-full">
                <livewire:schedule/>
                {{--
                <div class="bg-white relative shadow-xl border border-gray-200 sm:rounded-sm overflow-hidden w-full px-5 py-4 mx-8 mb-3">
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
                                    type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                    placeholder="Search" required="">
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <div class="flex space-x-3 items-center">
                                <select 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="">October 30, 2023 - November 5, 2023</option>
                                </select>
                            </div>

                            <div class="flex space-x-3 items-center">
                                <select 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="">All Shifts</option>
                                    <option value="Green">Green</option>
                                    <option value="Red">Red</option>
                                    <option value="Yellow">Yellow</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex">
                            <button x-data x-on:click="$dispatch('open-modal')" class="flex items-center bg-gray-500 rounded text-sm p-2.5 text-white gap-1">
                                New Schedule
        
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                </svg>
                            </button>
                            @livewire('add-schedule')
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
                                            Shift
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                            </svg>
                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        <button class="flex items-center gap-1">
                                            Created by
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                            </svg>
                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        <button class="flex items-center gap-1">
                                            Start Date
                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        <button class="flex items-center gap-1">
                                            End Date
                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        <button class="flex items-center gap-1">
                                            Time In
                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        <button class="flex items-center gap-1">
                                            Time Out
                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        <button class="flex items-center gap-1">
                                            Status
                                        </button>
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        <button class="flex items-center gap-1">
                                            More
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                        2001
                                    </th>
                                    <td class="px-4 py-3 text-green-500">
                                        Green
                                    </td>
                                    <td class="px-4 py-3">
                                        goomba
                                    </td>
                                    <td class="px-4 py-3">
                                        October 30, 2023
                                    </td>
                                    <td class="px-4 py-3">
                                        November 5, 2023
                                    </td>
                                    <td class="px-4 py-3">
                                        10:00 PM
                                    </td>
                                    <td class="px-4 py-3">
                                        6:00 AM
                                    </td>
                                    <td class="px-4 py-3">
                                        Ongoing
                                    </td>
                                    <td class="px-4 py-3 flex gap-2 items-center justify-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                        </svg>
                
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                            <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                        </svg>
                
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                                        </svg>
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                        2002
                                    </th>
                                    <td class="px-4 py-3 text-red-500">
                                        Red
                                    </td>
                                    <td class="px-4 py-3">
                                        goomba
                                    </td>
                                    <td class="px-4 py-3">
                                        October 30, 2023
                                    </td>
                                    <td class="px-4 py-3">
                                        November 5, 2023
                                    </td>
                                    <td class="px-4 py-3">
                                        6:00 AM
                                    </td>
                                    <td class="px-4 py-3">
                                        2:00 PM
                                    </td>
                                    <td class="px-4 py-3">
                                        Ongoing
                                    </td>
                                    <td class="px-4 py-3 flex gap-2 items-center justify-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                        </svg>
                
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                            <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                        </svg>
                
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                                        </svg>
                                    </td>
                                </tr>

                                <tr class="border-b">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                        2003
                                    </th>
                                    <td class="px-4 py-3 text-yellow-500">
                                        Yellow
                                    </td>
                                    <td class="px-4 py-3">
                                        goomba
                                    </td>
                                    <td class="px-4 py-3">
                                        October 30, 2023
                                    </td>
                                    <td class="px-4 py-3">
                                        November 5, 2023
                                    </td>
                                    <td class="px-4 py-3">
                                        2:00 PM
                                    </td>
                                    <td class="px-4 py-3">
                                        10:00 PM
                                    </td>
                                    <td class="px-4 py-3">
                                        Ongoing
                                    </td>
                                    <td class="px-4 py-3 flex gap-2 items-center justify-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                        </svg>
                
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                            <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                                        </svg>
                
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                    <div class="py-4 px-3">
                        <div class="flex items-center justify-space-between">
                            <div class="flex pt-3 space-x-4 items-center mb-3">
                                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2 ">
                                    @for ($i = 1; $i < 8; $i++)
                                        <option value="5"> Day {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                --}}
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
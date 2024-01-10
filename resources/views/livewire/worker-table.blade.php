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
            <div class="flex flex-row space-x-1 items-center">
                <label class="w-24 text-sm font-medium text-gray-900">Position :</label>
                <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                    <select 
                        wire:model.live="position"
                        class="w-full h-full p-2.5 bg-transparent border-r-8 border-r-transparent rounded-lg"
                    >
                        <option value="">All</option>
                        <option value="Parer">Parer</option>
                        <option value="Sheller">Sheller</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-row space-x-1 items-center">
                <label class="w-24 text-sm font-medium text-gray-900">Status :</label>
                <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                    <select 
                        wire:model.live="status"
                        class="w-full h-full p-2.5 bg-transparent border-r-8 border-r-transparent rounded-lg"
                    >
                        <option value="">All</option>
                        <option value="Regular">Regular</option>
                        <option value="Probationary">Probationary</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-row space-x-1 items-center">
                <label class="w-24 text-sm font-medium text-gray-900">Shift :</label>
                <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                    <select 
                        wire:model.live="shift"
                        class="w-full h-full p-2.5 bg-transparent border-r-8 border-r-transparent rounded-lg"
                    >
                        <option value="">All</option>
                        <option value="Green">Green</option>
                        <option value="Red">Red</option>
                        <option value="Yellow">Yellow</option>
                    </select>
                </div>
            </div>
            <button type="button" onclick="resetFilters()" title="Export" class="flex items-center bg-red-500 rounded text-sm pl-2 p-2.5 text-white gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <!-- Slash path -->
                    <path d="M1 1l14 14" stroke="currentColor" stroke-width="2" />
                  
                    <!-- Trash icon paths -->
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4z"/>
                </svg>
                  
            </button>
        </form>
        <script>
            function resetFilters() {
                document.getElementById('filterForm').reset();
            }
        </script>
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 text-sm text-left text-gray-500">
                <thead class="text-xs uppercase text-white bg-gray-700">
                    <tr>
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
                                Position
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3" wire:click="setSortBy('status')">
                            <button class="flex items-center gap-1">
                                Status
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3" wire:click="setSortBy('shift')">
                            <button class="flex items-center gap-1">
                                Shift
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
                    @forelse ($users as $emp)
                    <tr class="border-b">
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                            {{ $emp->name }}
                        </th>
                        <td class="px-4 py-3 text-green-500">
                            {{ $emp->position }}
                        </td>
                        <td class="px-4 py-3">
                            {{ $emp->status }}
                        </td>
                        <td class="px-4 py-3">
                            {{ $emp->shift }}
                        </td>
                        <td class="px-4 py-3 flex gap-2 items-center justify-end">
                            <a href="/worker/profile/{{ $emp->id }}" class="p-2 bg-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg> 
                            </a>
    
                            <div x-data="{ open: false }" class="flex space-x-3">
                                <button id="myButton" onclick="disableButton()" x-on:click="open = ! open" class="p-2 bg-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </button>
                                <form method="POST" action="/delete/profile/{{ $emp->id }}">
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
    
        <div class="py-4 pt-3 px-3 w-full flex justify-between">
            <div class="flex space-x-4 items-center mb-3">
                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                <select wire:model.live='perPage' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2 ">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            {{ $users->links()}}
        </div>
    </div>
</div>
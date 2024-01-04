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
                <h4 class="w-full page-title font-semibold text-slate-800 text-lg text-left">Employee List</h4>
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
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-500 md:ml-2">Employee List</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </section>
    
            <section class="flex w-full">
                <livewire:worker-table/>
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
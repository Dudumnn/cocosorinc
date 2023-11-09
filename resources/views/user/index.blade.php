@include('partials.header')
    @php @endphp
    <x-navigation />

    <header class="max-w-lg mx-auto mt-7">
        <a href="#">
            <h1 class="text-4xl font-bold text-center font-sans text-slate-100">User List</h1>
        </a>
    </header>
    <section class="p-6 mt-4">
        <div class="overflow-x-auto relative">
            <table class="w-3/4 mx-auto text-xs md:text-sm lg:text-base text-left text-slate-700 font-sans">
                <thead class="uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Fullname</th>
                        <th scope="col" class="py-3 px-6 text-center">Password</th>
                        <th scope="col" class="py-3 px-6 text-right">Date Created</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($emps as $emp)
                    <tr class="bg-slate-900 border-gray-400 border-b-2 text-slate-300">
                        <td class="py-4 px-6">
                            {{ $emp->username }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            {{ $emp->password }}
                        </td>
                        <td class="py-4 px-6 text-right">
                            {{ $emp->created_at }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
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
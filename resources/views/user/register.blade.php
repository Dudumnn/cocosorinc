@include('partials.header')
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-center font-sans text-slate-100">Create Account</h1>
        </a>
    </header>
    <main class="bg-slate-50 max-w-xl mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <p class="mb-6 text-slate-700 font-sans">Sign in to your account.</p>
        </section>
        <section>
            <form action="/store" method="POST" class="flex flex-col mb-3">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-300 font-sans">
                    <label for="username" class="text-slate-700 block text-sm font-bold mb-2 ml-3">Username</label>
                    <input name="username" type="text" class="text-lg rounded bg-gray-300 pl-3 pr-3 pb-2 w-full text-slate-700 focus:outline-none border-b-4 border-slate-500" value="{{old('username')}}">
                    @error('username')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-300 font-sans">
                    <label for="email" class="text-slate-700 block text-sm font-bold mb-2 ml-3">Email</label>
                    <input name="email" type="email" class="text-lg rounded bg-gray-300 pl-3 pr-3 pb-2 w-full text-slate-700 focus:outline-none border-b-4 border-slate-500" value="{{old('email')}}">
                    @error('email')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-300 font-sans">
                    <label for="password" class="text-slate-700 block text-sm font-bold mb-2 ml-3">Password</label>
                    <input name="password" type="password" class="text-lg rounded bg-gray-300 pl-3 pr-4 pb-2 w-full text-slate-700 focus:outline-none border-b-4 border-slate-500">
                    @error('password')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-300 font-sans">
                    <label for="password_confirmation" class="text-slate-700 block text-sm font-bold mb-2 ml-3">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="text-lg rounded bg-gray-300 pl-3 pr-4 pb-2 w-full text-slate-700 focus:outline-none border-b-4 border-slate-500">
                </div>
                <button class="bg-slate-800 text-slate-100 hover:bg-slate-600 pt-3 pb-3 font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Login</button>
            </form>
        </section>
    </main>
@include('partials.footer')
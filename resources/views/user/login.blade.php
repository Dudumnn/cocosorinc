@include('partials.header')
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-center font-sans text-slate-100">User Login</h1>
        </a>
    </header>
    <main class="bg-slate-50 max-w-xl mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <p class="mb-6 text-slate-700 font-sans">Sign in to your account.</p>
        </section>
        <section>
            <form action="" class="flex flex-col mb-3">
                <div class="mb-6 pt-3 rounded bg-gray-300 font-sans">
                    <label for="Username" class="text-slate-700 block text-sm font-bold mb-2 ml-3">Username</label>
                    <input type="text" class="text-lg rounded bg-gray-300 pl-3 pr-3 pb-2 w-full text-slate-700 focus:outline-none border-b-4 border-slate-500">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-300 font-sans">
                    <label for="Password" class="text-slate-700 block text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" class="text-lg rounded bg-gray-300 pl-3 pr-4 pb-2 w-full text-slate-700 focus:outline-none border-b-4 border-slate-500">
                </div>
                <button class="bg-slate-800 text-slate-100 hover:bg-slate-600 pt-3 pb-3 font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Login</button>
            </form>
        </section>
    </main>
@include('partials.footer')
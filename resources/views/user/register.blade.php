<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $title !== "" ? $title : 'Cocosor Inc.'}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .active{
        background-color: rgb(243 244 246);
        border-radius: 8px;
        color: white;
      }
    </style>
</head>
<body class="min-h-screen pt-14 px-15 bg-gray-50">

    <section class="bg-gray-50 flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-md w-2/5 p-10 flex flex-col justify-center">
            {{-- Head Part --}}
            <div class="w-full flex justify-center">
                <img src="{{ asset('/icons/logo.jpg') }}" alt="" class="w-56 h-20">
            </div>
            <form action="/store" method="POST"  class="px-8 pt-8">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" 
                    placeholder="Username"
                    value="{{old('username')}}">
                    @error('username')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="email" 
                    placeholder="Email Address"
                    value="{{old('email')}}">
                    @error('email')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" 
                    placeholder="******************">
                    @error('password')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                        Confirm Password
                    </label>
                    <input name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" type="password" 
                    placeholder="******************">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                          <input id="show-password" aria-describedby="show-password" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50">
                        </div>
                        <div class="ml-3 text-sm">
                          <label for="show-password" class="text-gray-500 dark:text-gray-300">Show Password</label>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <button class="w-full bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Create an account
                    </button>
                </div>
                <div class="pt-6 flex items-center justify-center">
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Log in</a>
                    </p>
                </div>
            </form>
        </div>
    </section>
    <x-messages />
    <!-- Your Livewire component view content -->
    <script>
        // JavaScript to toggle password visibility
        const passwordInput = document.getElementById('password');
        const passwordInput2 = document.getElementById('password_confirmation');
        const showPasswordCheckbox = document.getElementById('show-password');
    
        showPasswordCheckbox.addEventListener('change', () => {
            passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
            passwordInput2.type = showPasswordCheckbox.checked ? 'text' : 'password';
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $title !== "" ? $title : 'Cocosor Inc.'}}</title>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
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
                <img src="{{ asset('/icons/logo.png') }}" alt="" class="w-56 h-20">
            </div>
            <form action="/login/process" method="POST"  class="px-8 pt-8">
                @csrf
                @error('username')
                    <p class="text-red-500 text-xs p-1">
                        {{$message}}
                    </p>
                @enderror
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
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
                        Sign In
                    </button>
                </div>
                <div class="pt-6 flex items-center justify-center">
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account yet? <a href="/register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </section>
@include('partials.footer')
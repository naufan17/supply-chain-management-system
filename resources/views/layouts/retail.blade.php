<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body class="font-sans antialiased">

        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            <!-- component -->
            <div class="flex flex-wrap bg-gray-100 w-full h-screen">
                <div class="w-1/5 bg-white rounded p-3 shadow-lg">
                    <div class="flex items-center space-x-4 p-2 mb-2">
                        <!-- <img class="h-12 rounded-full" src="http://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="James Bhatta"> -->
                        <div>
                            <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">Supply Chain Management System</h4>
                            <!-- <span class="text-sm tracking-wide flex items-center space-x-1">
                                <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg><span class="text-gray-600">Verified</span>
                            </span> -->
                        </div>
                    </div>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="{{ route('retail/dashboard') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                                <span width="20" height="20" data-feather="home"></span>
                                <span class="font-bold">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.show') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                                <span width="20" height="20" data-feather="user"></span>
                                <span class="font-bold">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('retail/pasokan') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span width="20" height="20" data-feather="package"></span>
                                <span class="font-bold">Pasokan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('retail/pesan') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span width="20" height="20" data-feather="shopping-bag"></span>
                                <span class="font-bold">Pesan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('retail/stok') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span width="20" height="20" data-feather="box"></span>
                                <span class="font-bold">Stok</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('retail/penjualan') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                                <span width="20" height="20" data-feather="shopping-cart"></span>
                                <span class="font-bold">Penjualan</span>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();" 
                                                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                                    <span width="20" height="20" data-feather="log-out"></span>
                                    <span class="font-bold">Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>

                <div class="w-9/12">
                    <div class="p-4 text-gray-500">   
                        <!-- Page Content -->
                        <main>
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <script>
            feather.replace()
        </script>

    </body>
</html>

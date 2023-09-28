<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <button class="fixed bottom-4 right-4 p-2 px-3 rounded-full bg-gray-800 dark:bg-white text-white dark:text-black"
        id="modoDarkBtn" style="z-index: 9999;"><i class="bi bi-moon-stars-fill text-xl"></i>
    </button>

    <nav x-data="{ isOpen: false }" class="fixed top-0 w-full bg-white shadow dark:bg-gray-800">
        <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}">
                    <img id="logo" class="w-auto h-6 sm:h-7" alt="logo">
                </a>
                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button"
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu">
                        <i x-show="!isOpen" class="bi bi-list text-2xl"></i>
                        <i x-show="isOpen" class="bi bi-x-circle text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0"
                        href="{{ route('home') }}">Home</a>
                </div>
                <div x-data="{ isOpen: true }" x-init="() => { isOpen = false }" class="relative inline-block mr-3">
                    <!-- Dropdown toggle button -->
                    <button @click="isOpen = !isOpen"
                        class="relative z-10 block p-2 text-gray-700 bg-white border border-transparent rounded-md dark:text-white focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:bg-gray-800 focus:outline-none">
                        <i class="bi bi-globe"></i>
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="isOpen" @click.away="isOpen = false"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                        class="absolute right-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-700">

                        <a href="#"
                            class="flex items-center px-3 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            <i class="bi bi-person-circle w-5 h-5 mx-1"></i>
                            <span class="mx-1">
                                view profile
                            </span>
                        </a>

                        <hr class="border-gray-200 dark:border-gray-700 ">

                        <a href="#"
                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            <i class="bi bi-building w-5 h-5 mx-1"></i>
                            <span class="mx-1">
                                Company profile
                            </span>
                        </a>

                        <hr class="border-gray-200 dark:border-gray-700 ">

                        <a href="#"
                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            <i class="bi bi-question-circle w-5 h-5 mx-1"></i>
                            <span class="mx-1">
                                Help
                            </span>
                        </a>
                    </div>
                </div>

                @if (Route::has('login'))
                    <div class="flex justify-center md:block">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="px-3 py-1 text-sm font-semibold transition-colors duration-300 transform border-2 border-black rounded-md dark:text-white dark:border-white dark:hover:bg-white dark:hover:text-black hover:bg-black hover:text-white">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="px-3 py-1 text-sm font-semibold transition-colors duration-300 transform border-2 border-black rounded-md dark:text-white dark:border-white dark:hover:bg-white dark:hover:text-black hover:bg-black hover:text-white ">Log
                                In</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="px-3 py-1 mx-2 text-sm font-semibold text-white transition-colors duration-300 transform bg-black rounded-md border-2 border-black hover:bg-white hover:text-black dark:border-white">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <div class="font-sans w-full bg-gray-100 text-gray-900 dark:text-gray-100 dark:bg-gray-900 antialiased">
        {{ $slot }}
    </div>

    <footer class="bg-gray-100 dark:bg-gray-900">
        <div class="container px-6 py-8 mx-auto">
            <div class="flex flex-col items-center text-center">
                <a href="https://javiercombita.com" target="_black">
                    <img id="marca" class="w-auto h-24" alt="marca">
                </a>
            </div>

            <hr class="my-6 border-black md:my-10 dark:border-gray-700" />

            <div class="flex flex-col items-center sm:flex-row sm:justify-between">
                <p class="text-sm dark:text-gray-300">© Copyright 2023 Javier Cómbita Téllez. All Rights
                    Reserved.</p>

                <div class="flex -mx-2">
                    <a href="https://twitter.com/jcomte23" target="_blank"
                        class="mx-2 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                        aria-label="Reddit">
                        <i class="bi bi-twitter-x text-2xl"></i>
                    </a>

                    <a href="https://co.linkedin.com/in/javier-c%C3%B3mbita-t%C3%A9llez-4b4aa3258" target="_blank"
                        class="mx-2 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                        aria-label="Linkedin">
                        <i class="bi bi-linkedin text-2xl"></i>
                    </a>

                    <a href="https://github.com/jcomte23" target="_blank"
                        class="mx-2 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                        aria-label="Github">
                        <i class="bi bi-github text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts
</body>

</html>

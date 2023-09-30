<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <button class="fixed bottom-4 right-4 p-2 px-3 rounded-full bg-gray-800 dark:bg-white text-white dark:text-black"
        id="modoDarkBtn" style="z-index: 9999;"><i class="bi bi-moon-stars-fill text-xl"></i>
    </button>

    <x-navbar-guest/>


    <div class="font-sans w-full mt-16  bg-gray-200 text-gray-900 dark:text-gray-100 dark:bg-gray-900 antialiased">
        {{ $slot }}
    </div>

    <footer class="bg-gray-200 dark:bg-gray-900">
        <div class="container px-6 py-8 mx-auto">
            <div class="flex flex-col items-center text-center">
                <a href="https://javiercombita.com" target="_black">
                    <img id="marca" class="w-auto h-24" alt="marca">
                </a>
            </div>

            <hr class="my-6 border-black md:my-10 dark:border-gray-700" />

            <div class="flex flex-col items-center sm:flex-row sm:justify-between">
                <p class="text-sm dark:text-gray-300">© Copyright 2023 Javier Cómbita Téllez.
                    {{ __('All Rights Reserved') }}</p>

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

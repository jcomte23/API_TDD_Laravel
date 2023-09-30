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

    <x-footer/>

    @livewireScripts
</body>

</html>

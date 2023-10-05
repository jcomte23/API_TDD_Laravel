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
    <x-theme-button/>

    <x-navbar-guest/>

    <div class="font-sans w-full mt-16  bg-gray-100 text-gray-900 dark:text-gray-100 dark:bg-gray-900 antialiased">
        {{ $slot }}
    </div>

    <x-footer/>

    @livewireScripts
</body>

</html>

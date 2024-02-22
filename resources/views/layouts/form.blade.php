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
</head>

<body class="h-dvh font-sans text-gray-900 antialiased">
    <main class="min-h-screen w-full bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Content -->
        <div class="w-full h-full flex justify-normal align-middle">
            <div class="sm:max-w-md mt-6 px-6 py-4 mx-auto bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
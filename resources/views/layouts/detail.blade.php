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

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 relative">
        @include('layouts.navigation')

        <main class="h-full">
            <!-- Main LEFT -->
            @if (isset($main) && isset($main->attributes['left']))
            <div class=" w-4/5">
                <div class="w-full">
                    {{ $main }}
                </div>
            </div>
            @else
            <div class="flex justify-center">
                <div class="w-4/5">
                    {{ $secondary }}
                </div>
            </div>
            @endif

            <!-- Main RIGHT -->
            @if (isset($main) && isset($main->attributes['right']))
            <div class="flex justify-center">
                <div class="w-4/5">
                    {{ $main }}
                </div>
            </div>
            @else
            <div class="flex justify-center">
                <div class="w-4/5">
                    {{ $secondary }}
                </div>
            </div>
            @endif
        </main>
    </div>
</body>

</html>
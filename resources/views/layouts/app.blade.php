<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Base Application') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="bg-secondary dark:bg-dark-secondary">
            <div class="relative flex">
                <!-- Navbar -->
                @include('layouts.navigation')

                <div class="flex-1 min-h-screen">
                    <!-- Page Heading -->
                    <header class="bg-white dark:bg-dark-black shadow h-fit">
                        <div class="flex justify-between max-w-full py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>

                    <!-- Page Content -->
                    <main>
                        <!-- Modal -->
                        <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 grid place-items-center h-screen" id="modal-backdrop">
                            {{ $modal }}
                        </div>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>

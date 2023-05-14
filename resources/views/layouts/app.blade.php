<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AUPD') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <!-- ===== Preloader Start ===== -->
        <x-preloader />
        <!-- ===== Preloader End ===== -->



        <!-- ===== Page Wrapper Start ===== -->
        <div class="flex h-screen overflow-y-hidden">


            <!-- ===== Content Area Start ===== -->
            <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto bg-white">

                @include('partials.header')

                <div class="flex overflow-hidden">

                    <!-- ===== Sidebar Start ===== -->
                    <x-sidebar />
                    <!-- ===== Sidebar End ===== -->

                    <!-- ===== Main Content Start ===== -->
                    <main
                        class="w-80 left-0 overflow-y-auto rounded-sm border border-stroke shadow-default dark:border-strokedark
                    dark:bg-boxdark">
                        {{ $slot }}
                    </main>
                    <!-- ===== Main Content End ===== -->

                </div>
            </div>
            <!-- ===== Content Area End ===== -->
        </div>
        <!-- ===== Page Wrapper End ===== -->
    </div>
</body>

</html>

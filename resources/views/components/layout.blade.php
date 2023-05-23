<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUPD</title>

    {{-- including css and js file --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- alpine.js CDN --}}
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

    {{-- roboto font --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    {{-- foldit --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Foldit:wght@100;200;300;400;500;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="font-serif">

    <!-- ===== Preloader Start ===== -->
    <x-preloader />
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-y-hidden">
        <!-- ===== Content Area Start ===== -->
        <div class="flex overflow-hidden bg-white ">

            <!-- ===== Header Start ===== -->
            <x-header />
            <!-- ===== Header End ===== -->

            <div class="flex w-screen mt-20">
                <!-- ===== Sidebar Start ===== -->
                <x-navbar />
                <!-- ===== Sidebar End ===== -->

                <!-- ===== Main Content Start ===== -->
                <main class="relative w-full overflow-y-auto ">
                        {{ $slot }}
                </main>
                <!-- ===== Main Content End ===== -->
            </div>
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>
        @media (max-width: 640px) {
            .swiper-button-prev {
                display: none;
            }
            .swiper-button-next {
                display: none;
            }
        }
    </style>
</head>
    <body class="font-sans antialiased" style="width: 100vw; height: 100vh">
        <div class="min-h-screen bg-gray-100 w-full h-full">
            @if(auth('admin')->user())
                @include('layouts.admin-navigation')
            @elseif(auth('users')->user())
                @include('layouts.user-navigation')
            @endif

            <!-- Page Content -->
            <main style="height: 90%">
                {{ $slot }}
            </main>
        </div>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laratasks') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Scripts -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen z-50">
    {{-- Navigation Menu --}}
    @include('layouts.navigation')
    {{-- --}}

    <!-- Page Content -->
    <main class="bg-clr-bg-primary-100 flex-1 py-10 px-6 flex" x-data>
        <section class="flex-auto p-2 mr-10 flex">
            {{ $slot }}
        </section>

        @include('layouts.partials.profile-card')
    </main>
    {{-- --}}

</body>

</html>
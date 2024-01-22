<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaraTasks') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="grid grid-cols-2 gap-6 min-h-screen py-4 px-36 max-w-screen-xl">
    {{-- Page content --}}
    <section
        class="bg-[url('../images/image-one.png')] rounded-xl px-14 py-6 flex flex-col justify-center relative bg-no-repeat bg-center bg-cover">
        <h1 class="text-white font-bold text-4xl w-[80%]">Take your productivity to the next level.</h1>

        <h2 class="text-white capitalize absolute bottom-12">&copy; 2023 | all rights reserved</h2>
    </section>
    {{-- <section class="guest-bg-img rounded-xl px-14 py-6 flex flex-col justify-center relative">
        <h1 class="text-white font-bold text-4xl w-[80%]">Take your productivity to the next level.</h1>

        <h2 class="text-white capitalize absolute bottom-12">&copy; 2023 | all rights reserved</h2>
    </section> --}}

    <section class="p-6">
        {{ $slot }}
    </section>
</body>

</html>
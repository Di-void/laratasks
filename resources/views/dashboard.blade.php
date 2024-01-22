<x-app-layout>

    <div class="w-full">
        <header class="mt-4">
            <h1 class="font-bold text-4xl font-gelion-bold">
                HI <span class="capitalize">{{ $user->name }}</span>,
            </h1>
            <p class="text-xl">Welcome to Laratasks Task Management</p>
        </header>

        @include('partials.get-started')
    </div>

</x-app-layout>
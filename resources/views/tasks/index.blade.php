@php
$tasks = Auth::user()->tasks;
@endphp

<x-app-layout>
    <main class="flex flex-col w-full" x-data>

        <header class="mt-4">
            <h1 class="text-clr-text-navy font-semibold font-gelion-semibold capitalize text-3xl">tasks</h1>
            <p class="text-xl text-clr-text-100 font-normal">Your tasks in your space.</p>
        </header>

        @if($tasks->count() === 0)

        <section class="flex-1">
            @include('tasks.partials.no-tasks')
        </section>

        @else

        The Tasks

        @endif

    </main>

</x-app-layout>
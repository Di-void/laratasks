@php
$taskCount = 0;
@endphp

<x-app-layout>
    <section x-data="modal" class="flex flex-col w-full">

        {{-- Create Task Dialog --}}
        @include('tasks.forms.create-task')
        {{-- End Dialog --}}

        <header class="mt-4 flex justify-between">
            <div>
                <h1 class="text-clr-text-navy font-semibold font-gelion-semibold capitalize text-3xl">tasks</h1>
                <p class="text-xl text-clr-text-100 font-normal">Your tasks in your space.</p>
            </div>

            <div>
                @unless ($count === 0)
                <x-primary-button x-on:click="openModal">create a task</x-primary-button>
                @endunless
            </div>
        </header>

        @if($count === 0)

        <div class="flex-1">
            <div class="h-full flex flex-col justify-center items-center">

                <div>
                    <div class="mx-auto w-fit">
                        <img src="{{ Vite::asset('resources/images/no-tasks.png') }}" alt="no-tasks-images">
                    </div>

                    <h1 class="text-center mt-12 capitalize font-semibold font-gelion-semibold text-2xl">no tasks yet
                    </h1>
                    <p class="text-center text-clr-text-100">You have no task created in your workspace yet.</p>
                    <p class="text-center text-clr-text-100 ">Get productive. Create a Task Now.</p>
                </div>

                <div class="mt-6">
                    <x-primary-button x-on:click="openModal">
                        Create a Task
                    </x-primary-button>
                </div>

            </div>
        </div>

        @else

        <div class="mt-6">
            <ul class="flex gap-7 border-b border-b-clr-primary-400">
                <li
                    class="capitalize pb-3 {{ $filter === 'all' ? 'text-clr-primary-200 font-bold font-gelion-bold border-b-clr-primary-200' : 'border-b-transparent' }} border-b-2 hover:border-b-clr-primary-200">
                    <a href="{{ route('tasks') }}" class="flex items-center gap-3">all tasks <span
                            class="rounded-full h-6 w-6 bg-clr-bg-primary-200 flex justify-center items-center">3</span></a>
                </li>
                <li
                    class="capitalize pb-3 border-b-2 {{ $filter === 'pending' ? 'text-clr-primary-200 font-bold font-gelion-bold border-b-clr-primary-200' : 'border-b-transparent' }} hover:border-b-clr-primary-200">
                    <a href="{{ route('tasks') . '?filter=pending' }}" class="flex items-center gap-3">pending <span
                            class="rounded-full h-6 w-6 bg-clr-bg-primary-200 flex justify-center items-center">3</span></a>
                </li>
                <li
                    class="capitalize pb-3 border-b-2 {{ $filter === 'progress' ? 'text-clr-primary-200 font-bold font-gelion-bold border-b-clr-primary-200' : 'border-b-transparent' }} hover:border-b-clr-primary-200">
                    <a href="{{ route('tasks') . '?filter=progress' }}" class="flex items-center gap-3">in progress
                        <span
                            class="rounded-full h-6 w-6 bg-clr-bg-primary-200 flex justify-center items-center">3</span></a>
                </li>
                <li
                    class="capitalize pb-3 border-b-2 {{ $filter === 'completed' ? 'text-clr-primary-200 font-bodl font-gelion-bold border-b-clr-primary-200' : 'border-b-transparent' }} hover:border-b-clr-primary-200">
                    <a href="{{ route('tasks') . '?filter=completed' }}" class="flex items-center gap-3">completed <span
                            class="rounded-full h-6 w-6 bg-clr-bg-primary-200 flex justify-center items-center">3</span></a>
                </li>
            </ul>
        </div>

        {{-- h-full was here just in case --}}
        <div class="mt-4 grid grid-cols-[253px_253px_253px] gap-3">
            @foreach ($tasks as $task)
            {{-- id count --}}
            @php
            $taskCount++
            @endphp
            {{-- end --}}

            <x-task-card :status="$task->status" :name="$task->name" :id="$taskCount" />
            @endforeach
        </div>

        @endif

    </section>

</x-app-layout>
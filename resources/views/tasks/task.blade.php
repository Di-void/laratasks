@php

$start_date = Carbon\Carbon::parse($task->created_at)->format('d/m/Y');
$due_date = $task->due_date ? Carbon\Carbon::parse($task->due_date)->format('d/m/Y') : "NIL";

$backLink = request()->query('back');

@endphp

<x-app-layout>
    <section class="w-full" x-data="modal">

        @include('tasks.partials.edit-task-form')

        <header class="mt-4">
            <div>
                <h1 class="text-clr-text-navy font-semibold font-gelion-semibold capitalize text-3xl">tasks > <span
                        class="font-gelion-medium text-base font-medium">{{ $task->name }}</span></h1>
            </div>

            <div class="mt-4">
                <x-back-link-button :backlink="$backLink" />
            </div>
        </header>

        {{-- Task Card --}}
        <article class="bg-clr-primary-100 w-full px-10 py-8 rounded-xl mt-6 flex gap-6">
            <div class="basis-11/12">
                <h1 class="font-gelion-medium line-clamp-2 text-2xl w-[380px]">{{ $task->name }}</h1>

                <div class="shrink">
                    <x-status-badge :status="$task->status" />
                </div>

                <div class="mt-5 max-w-[522px]">
                    @if ($task->description)
                    <p class="">{{ $task->description }}</p>
                    @else
                    <p class="font-gelion-semibold-italic italic">NIL (no desc.)</p>
                    @endif
                </div>


                <footer class="mt-10 flex gap-5 items-center">
                    <div class="w-[40%]">
                        @if ($task->status !== 'completed')
                        @include('tasks.partials.update-status-form')
                        @else
                        <div class="flex gap-6">

                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.3334 14.7734V16C29.3317 18.8753 28.4007 21.6729 26.6791 23.9758C24.9576 26.2787 22.5377 27.9633 19.7805 28.7786C17.0233 29.5938 14.0764 29.4959 11.3793 28.4995C8.68226 27.503 6.37956 25.6615 4.81463 23.2494C3.24971 20.8374 2.50641 17.9841 2.69559 15.1151C2.88477 12.2461 3.9963 9.51512 5.86439 7.32945C7.73249 5.14378 10.2571 3.62053 13.0616 2.98688C15.8661 2.35324 18.8004 2.64314 21.4267 3.81336"
                                    stroke="#00C271" stroke-width="2.4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M29.3333 5.33331L16 18.68L12 14.68" stroke="#00C271" stroke-width="2.4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <p class="font-gelion-medium text-clr-text-complete leading-5">This task has been completed
                            </p>

                            </svg>
                        </div>

                        @endif
                    </div>

                    @include('tasks.partials.delete-task-form')

                    <x-delete-button x-on:click="openModal('delete-task')" />

                    <x-edit-button x-on:click="openModal('edit-task')" />
                </footer>
            </div>

            <div
                class="basis-2/5 relative border-r flex flex-col justify-between pr-8 border-clr-primary-500 before:absolute before:w-7 before:h-7 before:rounded-full before:border-2 before:border-clr-primary-200 before:-right-[14px] before:bg-clr-primary-100">

                <div class="pl-24">
                    <p class="text-clr-text-200">Date Created</p>
                    <p class="font-gelion-bold text-sm">{{ $start_date }}</p>
                </div>


                <div class="pl-24">
                    <p class="text-clr-text-200">Due Date</p>
                    <p class="font-gelion-bold text-sm">{{ $due_date }}</p>
                </div>

                <span
                    class="absolute flex justify-center bottom-0 -right-[14px] items-center w-7 h-7 border-2 border-clr-primary-200 rounded-full bg-clr-primary-100 after:w-5 after:h-5 after:bg-clr-primary-200 after:block after:rounded-full"></span>
            </div>

    </section>
</x-app-layout>
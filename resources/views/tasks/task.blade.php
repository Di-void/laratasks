@php

$due_date = $task->due_date ? Carbon\Carbon::parse($task->due_date)->format('d/m/Y') : "NIL";
$start_date = Carbon\Carbon::parse($task->due_date)->format('d/m/Y');

@endphp

<x-app-layout>
    <section class="w-full">
        <header class="mt-4">
            <div>
                <h1 class="text-clr-text-navy font-semibold font-gelion-semibold capitalize text-3xl">tasks > <span
                        class="font-gelion-medium text-base font-medium">{{ $task->name }}</span></h1>
            </div>

            <div class="mt-4">
                <x-back-link-button />
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
                        <x-primary-button class="w-fit">
                            Work on it Now
                        </x-primary-button>
                    </div>

                    <x-delete-button />

                    <x-edit-button />
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
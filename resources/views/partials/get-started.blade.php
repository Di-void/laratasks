@php
$count = 0;
@endphp

<div class="mt-6 block">
    @if ($tasksCount === 0)

    <h1 class="font-xl font-bold font-gelion-bold">Let's get you started</h1>

    <div class="mt-5">
        <x-get-started-button>
            Create your first Task
        </x-get-started-button>
    </div>

    @else
    <h1 class="font-xl font-bold font-gelion-bold">Tasks for Today</h1>

    <div class="mt-5 grid grid-cols-[253px_253px_253px] gap-3">
        @if (count($tasks) === 0)
        <p>No tasks for today</p>
        @else
        @foreach ($tasks as $task)
        @php
        $count++
        @endphp
        <x-task-card :taskId="$task->id" :status="$task->status" :id="$count" :name="$task->name" />
        @endforeach
        @endif
    </div>
    @endif

</div>
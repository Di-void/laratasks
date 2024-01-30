@php
$tasksCount = Auth::user()->tasks->count();
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

    <div class="mt-5">
        <x-task-card status='pending' :id="1" name='Create something this is just a test' />
    </div>
    @endif

</div>
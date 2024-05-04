@php

$date_string;

if(!$task->due_date) {
$date_string = null;
} else {
$date_string = Illuminate\Support\Carbon::parse($task->due_date)->toDateString();
}

$hasErrors = $errors->any();

@endphp

<x-modal heading='edit task' name="edit-task">
    <form action="{{ route('task.edit', ['id' => $task->id ]) }}" method="POST" class="mt-4 flex flex-col gap-6">
        @csrf

        @method('PATCH')

        <fieldset>
            <x-input-label for="task-name" value="task name" />
            <x-text-input required id="task-name" name="name" value="{{ $hasErrors ? old('name') : $task->name }}" />
        </fieldset>

        <fieldset>
            <x-input-label for="date" value="due date" />
            <input type="date" placeholder="Select date.." class="border border-clr-text-100 rounded-lg"
                value="{{ $hasErrors ? old('due_date') : $date_string }}" name="due_date" id="date">
            @error('due_date')
            <p class="text-red-500 mt-2 text-sm font-light">{{ $message . '(creation day)' }}</p>
            @enderror
        </fieldset>

        <fieldset>
            <x-input-label for="task-desc" value="task description" />
            <textarea class="border border-clr-text-100 rounded-lg w-full" name="desc" id="task-desc" cols="30"
                rows="5">{{ $hasErrors ? old('desc') : $task->description }}</textarea>
        </fieldset>

        <div class="w-fit">
            <x-primary-button>
                save task
            </x-primary-button>
        </div>
    </form>

</x-modal>
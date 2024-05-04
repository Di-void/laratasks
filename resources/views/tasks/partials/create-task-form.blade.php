<x-modal name='create-task' heading='create task'>
    <form action="{{ route('task.create') }}" method="POST" class="mt-4 flex flex-col gap-6">
        @csrf

        <fieldset>
            <x-input-label for="task-name" value="task name" />
            <x-text-input required id="task-name" name="name" :value="old('name')" />
        </fieldset>

        <fieldset>
            <x-input-label for="date" value="due date" />
            <input type="date" placeholder="Select date.." class="border border-clr-text-100 rounded-lg" name="due_date"
                id="date">
            @error('due_date')
            <p class="text-red-500 mt-2 text-sm font-light">{{ $message . '(today)' }}</p>
            @enderror
        </fieldset>

        <fieldset>
            <x-input-label for="task-desc" value="task description" />
            <textarea class="border border-clr-text-100 rounded-lg w-full" name="desc" id="task-desc" cols="30"
                rows="5">{{ old('desc') }}</textarea>
        </fieldset>

        <div class="w-fit">
            <x-primary-button>
                create task
            </x-primary-button>
        </div>
    </form>

</x-modal>
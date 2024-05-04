<x-modal heading="Delete Task" name="delete-task">
    <form method="POST" action="{{ route('task.destroy', ['id' => $task->id ]) }}">
        @csrf
        @method('delete')

        <p class="text-clr-text-100">
            Are you sure you want to delete the task <span class="text-clr-text-100 font-gelion-bold">'{{ $task->name
                }}'</span>?
        </p>

        <div class="flex gap-4 mt-4">
            <div>
                <x-primary-button x-on:click="closeModal" type="button">no</x-primary-button>
            </div>

            <div>
                <x-primary-button variant='danger'>yes</x-primary-button>
            </div>
        </div>
    </form>
</x-modal>
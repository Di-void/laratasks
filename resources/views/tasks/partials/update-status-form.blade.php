<form action="{{ url()->current() }}" method="POST">
    @csrf

    @php
    $new_status = '';

    if($task->status === 'pending') {
    $new_status = 'in_progress';
    } else if($task->status === 'in_progress') {
    $new_status = 'completed';
    }
    @endphp

    <input type="hidden" name="status" value="{{ $new_status }}">

    @method('PATCH')

    <x-primary-button class="w-fit" type='submit' :variant="$task->status == 'in_progress' ? 'success' : null">
        {{ $task->status === 'pending' ? __('Work on It Now') : __('Mark as Done') }}
    </x-primary-button>

</form>
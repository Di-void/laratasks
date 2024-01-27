<div class="h-full flex flex-col justify-center items-center">

    <div class="">
        <div class="mx-auto w-fit">
            <img src="{{ Vite::asset('resources/images/no-tasks.png') }}" alt="">
        </div>

        <h1 class="text-center mt-12 capitalize font-semibold font-gelion-semibold text-2xl">no tasks yet</h1>
        <p class="text-center text-clr-text-100">You have no task created in your workspace yet.</p>
        <p class="text-center text-clr-text-100 ">Get productive. Create a Task Now.</p>
    </div>

    <div class="mt-6">
        @include('tasks.forms.create-task')
        <x-primary-button x-on:click="$refs.createTask.showModal()">
            Create a Task
        </x-primary-button>
    </div>

</div>
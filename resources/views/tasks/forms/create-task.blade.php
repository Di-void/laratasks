<dialog x-ref="createTask" class="bg-clr-primary-100 px-12 py-6 rounded-lg w-[31rem]">
    <header>
        <div class="flex justify-end">
            <button class="w-10 h-10 bg-clr-bg-primary-100 flex justify-center items-center rounded-full"
                x-on:click="$refs.createTask.close()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20" fill="none">
                    <path d="M15 5L5 15" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M5 5L15 15" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></button>
        </div>
        <h1 class="text-xl font-semibold capitalize font-gelion-semibold">create task</h1>
    </header>

    <form action="" method="POST" class="mt-4 flex flex-col gap-6">
        @csrf

        <fieldset>
            <x-input-label for="task-name" value="task name" />
            <x-text-input required id="task-name" name="name" />
        </fieldset>

        <fieldset>
            <x-input-label for="date" value="due date" />
            <input type="date" name="due_date" id="date" class="rounded-lg">
        </fieldset>

        <fieldset>
            <x-input-label for="task-desc" value="task description" />
            <textarea class="border border-clr-text-100 rounded-lg w-full" name="desc" id="task-desc" cols="30"
                rows="5"></textarea>
        </fieldset>

        <div class="w-fit">
            <x-primary-button>
                create task
            </x-primary-button>
        </div>
    </form>
</dialog>
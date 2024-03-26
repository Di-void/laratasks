{{-- TODO: Fix modal flashing. Problem arises because modal is not hidden by default --}}
<div {{ $errors->has('due_date') ? 'x-show=isOpen(true)' : 'x-show=isOpen()' }} class="fixed top-0 left-0 bg-black/75
    w-screen
    flex items-center justify-center h-screen">
    <div class="z-0 bg-clr-primary-100 px-12 py-6 rounded-lg w-[31rem]">
        <header>
            <div class="flex justify-end">
                <button class="w-10 h-10 bg-clr-bg-primary-100 flex justify-center items-center rounded-full"
                    x-on:click="closeModal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
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
                <x-text-input required id="task-name" name="name" :value="old('name')" />
            </fieldset>

            <fieldset>
                <x-input-label for="date" value="due date" />
                <input type="date" placeholder="Select date.." class="border border-clr-text-100 rounded-lg"
                    name="due_date" id="date">
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
    </div>
</div>
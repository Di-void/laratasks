@props(['heading' => 'create task' ])

<div x-init="{{ $errors->has('due_date') ? 'openModal' : 'closeModal' }}" x-show="open" class="fixed top-0 left-0 bg-black/75
    w-screen
    flex items-center justify-center h-screen z-30">
    <div class="bg-clr-primary-100 px-12 py-6 rounded-lg w-[31rem]">
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
            <h1 class="text-xl font-semibold capitalize font-gelion-semibold">{{ $heading }}</h1>
        </header>

        {{ $slot }}

    </div>
</div>
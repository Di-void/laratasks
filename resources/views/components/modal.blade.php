@props([ 'heading', 'name' ])

@php
$show = $errors->has('due_date');
@endphp

{{-- @php
$maxWidth = [
'sm' => 'sm:max-w-sm',
'md' => 'sm:max-w-md',
'lg' => 'sm:max-w-lg',
'xl' => 'sm:max-w-xl',
'2xl' => 'sm:max-w-2xl',
][$maxWidth];
@endphp --}}

{{-- todo: fix show and hide modal logic when there is an error --}}
<div {{ $attributes->merge(['class' => "w-screen flex items-center justify-center h-screen fixed top-0 left-0
    bg-black/75 z-20"]) }} x-show="modalName === '{{ $name }}' || {{ var_export($show) }}">
    <div class="bg-clr-primary-100 rounded-lg w-[31rem] px-12 py-6">
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
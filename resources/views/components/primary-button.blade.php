@props(['variant' => 'primary'])

@php
$bgColor = ['primary' => 'bg-clr-primary-200', 'success' => 'bg-clr-text-complete'][$variant];
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => $bgColor . ' text-center w-full px-8 py-4 capitalize
    text-white rounded-lg']) }}>
    {{ $slot }}
</button>
@props(['value'])

<label {{ $attributes->merge(['class' => 'capitalize block text-clr-text-navy mb-2']) }}>
    {{ $value ?? $slot }}
</label>
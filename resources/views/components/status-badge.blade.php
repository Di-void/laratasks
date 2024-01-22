@props(['status' => 'pending'])

@php
$label = 'pending';
$classes = 'bg-clr-secondary-300 text-clr-text-pending';

if($status === 'in_progress') {
$classes = 'text-clr-text-progress bg-clr-secondary-500';
$label = 'in progress';
}

if($status === 'completed') {
$classes = 'text-clr-text-complete bg-clr-secondary-400';
$label = 'completed';
}
@endphp

<span class="capitalize p-2 rounded-xl text-xs font-medium font-gelion-medium inline-block {{ $classes }}">
    {{ $label }}
</span>
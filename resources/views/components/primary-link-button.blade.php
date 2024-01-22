@props(['path'])

<a href="{{ $path }}" class="bg-clr-primary-200 text-clr-primary-100 text-center px-8 py-3 rounded-lg capitalize">
    {{ $slot }}
</a>
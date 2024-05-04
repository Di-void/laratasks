<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 bg-red-600 ']) }}>
    {{ $slot }}
</button>
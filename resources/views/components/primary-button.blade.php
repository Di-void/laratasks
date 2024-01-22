<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-clr-primary-200 text-center w-full px-8 py-4
    capitalize
    text-white rounded-lg'])
    }}>
    {{ $slot }}
</button>
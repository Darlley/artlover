<x-base-button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-md py-2 text-gray-400 hover:text-white px-4 flex items-center justify-center bg-gray-200 hover:bg-primary-500 tracking-widest active:bg-primary-600 focus:outline-none disabled:opacity-25 transition-colors']) }}>
    {{ $slot }}
</x-base-button>

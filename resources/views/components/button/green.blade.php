<x-base-button {{ $attributes->merge([
    'class' => 'bg-green-500 hover:bg-green-700 text-white px-4 py-2 rounded-lg'
]) }}>
    {{ $slot }}
</x-base-button>

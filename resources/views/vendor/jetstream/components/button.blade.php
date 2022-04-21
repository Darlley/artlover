<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-4 w-full flex items-center justify-center px-4 bg-gray-200 hover:bg-primary-500 border border-transparent text-sm text-gray-400 hover:text-white uppercase tracking-widest active:bg-primary-600 focus:outline-none disabled:opacity-25 transition-all duration-100']) }}>
    {{ $slot }}
</button>

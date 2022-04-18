<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-4 w-full flex items-center justify-center px-4 bg-primary-500 border border-transparent rounded-lg font-semibold text-sm text-white uppercase tracking-widest hover:bg-primary-600 active:bg-primary-600 focus:outline-none focus:border-primary-900 focus:ring focus:ring-primary-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>

<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'transform-gpu active:scale-95 transition-all duration-75 text-sm'
]) }}>
    {{ $slot }}
</button>

@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>

@props(['active'])

@php
$classes = ($active ?? false)
            ? 'uppercase inline-flex items-center px-1 pt-1 text-base font-normal leading-5 text-indigo-900 focus:outline-none transition'
            : 'uppercase inline-flex items-center px-1 pt-1 text-base font-normal leading-5 text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

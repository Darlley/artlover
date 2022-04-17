@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'py-4 px-6 placerholder-gray-400 text-base bg-gray-50 border-gray-200 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 rounded-lg shadow-sm']) !!}>

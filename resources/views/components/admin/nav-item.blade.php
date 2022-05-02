@props([
    'icon',
    'isActive' => false
])

<a class="flex items-center gap-2 uppercase hover:cursor-pointer {{ $isActive ? 'font-bold text-gray-500' : 'text-gray-400 hover:text-gray-500 transition-colors duration-200' }}">
    <span>{{ $slot }}</span>
    <x-dynamic-component :component="'icon.'. $icon" class="w-6"/>
</a>
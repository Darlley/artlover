@props([
    'isActive' => false
])
<label for="search" 
    @class([
        "flex items-center rounded-lg mx-4 text-gray-400 border border-gray-200 px-4 hover:text-gray-500" => true,
        "bg-white" => $isActive === true
    ])
>
    <x-icon.search class="h-6" />
    <input 
        {{ $attributes }} 
        type="text" 
        id="search" 
        class="placeholder-gray-300 border-0 focus:border-0 focus:ring-0 bg-transparent"
    >
</label>
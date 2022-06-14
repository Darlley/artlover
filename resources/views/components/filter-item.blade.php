@props([
    'isActive' => false
])
<a href="#published" {{ $attributes }}
    @class([
        "hover:text-gray-600 border-transparent border-b-2" => $isActive == false,
        "text-gray-800 hover:border-gray-800" => $isActive === true,
    ])
>{{ $slot }}</a>
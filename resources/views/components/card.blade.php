<div class="bg-white rounded-lg space-y-4 p-8 w-full">
    <div class="flex justify-between items-center">
        <h3 class="text-xl font-bold text-secundary-600">
            {{ $title }}
        </h3>
        <x-dynamic-component :component="'icon.' . $icon" class="w-8 h-8" />
    </div>

    <div class="space-y-4">
        
        {{ $slot }}

    </div>

</div>
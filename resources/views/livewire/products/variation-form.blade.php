<div class="grid grid-cols-4 bg-white" variation-id="{{ $variation['id'] }}" x-data>
    <div class="col-span-2 flex items-center px-2 py-1 space-x-5">
        <div class="w-12 h-12 bg-gray-100 hover:bg-gray-200 cursor-pointer flex items-center rounded-lg justify-center">
            <button type="button" class="w-full h-full" x-on:click="$refs.addImageVariation.click()">
                @if($image)
                    {{ $image->img('', [ 'class' => 'w-full h-full object-cover rounded-lg' ]) }}
                @else
                    <x-icon.camera class="w-full h-full p-2 text-gray-400" />
                @endif
                <input wire:model='image' x-ref="addImageVariation" type="file" accept="image/png, image/jpg, image/jpeg, image/svg, image/webp" class="hidden">
            </button>
        </div>
        <x-input type="text" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Name" wire:model.debounce.500='variation.name' />
    </div>

    <div class="flex items-center pr-6">
        <x-input type="number" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="$ Price" wire:model.debounce.500='variation.price' />
    </div>
    
    <div class="grid grid-cols-4 items-center justify-center">
        <x-input type="number" class="col-span-3 bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Quantity"  wire:model.debounce.500='variation.quantity' />
        <div class="flex items-center justify-center pr-2 gap-1">
            <x-icon.trash class="w-6 h-6 text-red-300 hover:text-red-500 transition-colors cursor-pointer" wire:click="$emitUp('removeVariation', '{{ $variation->id }}')" />
            <x-icon.drag-move class="w-6 h-6 text-gray-300 hover:text-gray-500 transition-colors cursor-move" />
        </div>
    </div>
</div>
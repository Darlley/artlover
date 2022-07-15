<div class="grid grid-cols-4 bg-white" shipping-id="{{ $shipping->id }}" x-data="">
    <div class="col-span-2 flex items-center px-2 py-1 space-x-5">
        <x-input type="text" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" wire:model='shipping.name' placeholder="Name e.g. Fedex"  />
    </div>

    <div class="flex items-center pr-6">
        <x-input.base-price class="text-gray-600 bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" wire:model='shipping' placeholder="$ Price" value="{{ $shipping->standalone_price }}" />
    </div>

    <div class="grid grid-cols-4 items-center justify-center">
        <div class="col-span-3">
            <x-input.base-price class="text-gray-600 bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Quantity" value="{{ $shipping->price_price }}" />
        </div>
        <div class="flex items-center justify-center pr-2 gap-1">
            <x-icon.trash class="w-6 h-6 text-red-300 hover:text-red-500 transition-colors cursor-pointer" wire:click="$emitUp('removeShipping', '{{ $shipping->id }}')" />
            <x-icon.drag-move class="w-6 h-6 text-gray-300 hover:text-gray-500 transition-colors cursor-move" />
        </div>
    </div>
</div>

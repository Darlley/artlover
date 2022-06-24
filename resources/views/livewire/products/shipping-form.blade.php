<div class="grid grid-cols-4 bg-white">
    <div class="col-span-2 flex items-center px-2 py-1 space-x-5">
        <x-input type="text" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" wire:model='shipping.name' placeholder="Name e.g. Fedex"  />
    </div>
    <div class="flex items-center pr-6">
        <x-input.base-price class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" wire:model='shipping.price' placeholder="$ Price" />
    </div>
    <div class="flex items-center">
        <div class="grid grid-cols-4">
            <x-input.base-price class="col-span-2 bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" wire:model='shipping.others' placeholder="$ Price" />
            <div class="flex items-center justify-center pr-2 gap-1">
                <x-icon.trash class="w-6 h-6 text-red-300 hover:text-red-500 transition-colors cursor-pointer" />
                <x-icon.drag-move class="w-6 h-6 text-gray-300 hover:text-gray-500 transition-colors cursor-move" />
            </div>
        </div>
    </div>
</div>
    
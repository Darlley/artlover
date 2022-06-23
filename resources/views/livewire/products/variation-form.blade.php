<div class="grid grid-cols-4 bg-white">
    <div class="col-span-2 flex items-center px-2 py-1 space-x-5">
        <div class="w-12 h-12 bg-gray-100 flex items-center rounded-lg justify-center">
            <x-icon.camera class="w-6 h-6 text-gray-400" />
        </div>
        <x-input type="text" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Name" />
    </div>
    <div class="flex items-center pr-6">
        <x-input type="number" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="$ Price" />
    </div>
    <div class="grid grid-cols-4 items-center justify-center">
        <x-input type="number" class="col-span-3 bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Quantity" />
        <div class="flex items-center justify-center pr-2 gap-1">
            <x-icon.trash class="w-6 h-6 text-red-300" />
            <x-icon.drag-move class="w-6 h-6 text-gray-500" />
        </div>
    </div>
</div>
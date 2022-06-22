<div>
    <x-page-title>New Product</x-page-title>

    <div class="flex space-x-4 mt-5">
        <div class="w-1/3">
            <div class="mb-4">
                <img src="{{ asset('img/growp-thumb.png') }}" alt="" class="object-cover rounded-lg">
            </div>

            <div class="grid grid-cols-4 gap-2">
                <img src="{{ asset('img/muckup.jpg') }}" alt="" class="cursor-pointer h-full object-cover rounded-lg hover:scale-90 transition-all duration-200">
                <img src="{{ asset('img/growp-thumb.png') }}" alt="" class="cursor-pointer h-full object-cover rounded-lg hover:scale-90 transition-all duration-200">
                <img src="{{ asset('img/muckup.jpg') }}" alt="" class="cursor-pointer h-full object-cover  rounded-lg hover:scale-90 transition-all duration-200">
                <button class="flex items-center justify-center p-4 bg-opacity-60 bg-white rounded-lg hover:bg-opacity-100 cursor-pointer hover:scale-90 transition-all duration-200">
                    <x-icon.plus class="text-gray-500" />
                </button>
            </div>
        </div>
        <div class="w-2/3">

            <form wire:submit.prevent="save">
                <div class="space-y-3">
                    <div class="space-y-1">
                        <x-input type="text" placeholder="Produc name" wire:model.defer='product.name'/>
                        <x-input-error for="product.name" />
                    </div>

                    <div>
                        <x-input type="text" placeholder="Description" wire:model.defer='prodcut.description'/>
                        <x-input-error for="product.description" />
                    </div>

                    <x-input type="text" placeholder="Categories" wire:model.defer='prodcut.categories'/>
                    
                    <div>
                        <x-input.price type="number" placeholder="$ Price" wire:model.defer='prodcut.price'/>
                        <x-input-error for="product.price" />
                    </div>
                    
                    <x-input.price placeholder="$ Price" />
                </div>

                <div class="mt-4 mb-2">
                    <div class="grid grid-cols-4 space-y-3">
                        <h3 class="text-gray-800 text-xl font-bold col-span-2">Variations</h3>
                        <h4 class="text-gray-700 text-xl">Price</h4>
                        <h4 class="text-gray-700 text-xl">Quantity</h4>
                    </div>

                    <!-- <div class="bg-white rounded-lg overflow-hidden p-2">
                        <div class="grid grid-cols-4">
                            <div class="col-span-2">
                                <img src="{{ asset('img/muckup.jpg') }}" alt="" class="h-20 cursor-pointer object-cover rounded-lg hover:scale-90 transition-all duration-200">
                                <x-input type="text" placeholder="Name" class="w-min bg-transparent" />
                            </div>
                            <div class="">
                                <x-input type="number" placeholder="$ price" />
                            </div>
                            <div class="">
                                <x-input type="number" placeholder="Quantiy" />
                            </div>
                        </div>
                        <div class="grid grid-cols-4">
                            <div class="col-span-2 flex">
                                <img src="{{ asset('img/muckup.jpg') }}" alt="" class="h-20 cursor-pointer object-cover rounded-lg hover:scale-90 transition-all duration-200">
                                <x-input type="text" placeholder="Name" />
                            </div>
                            <div class="">
                                <x-input type="number" placeholder="$ price" />
                            </div>
                            <div class="flex">
                                <x-input type="number" placeholder="Quantiy" />
                                <div>
                                    excluir
                                </div>
                            </div>
                        </div>
                        <x-button class="rounded-t-none w-full py-4 mt-2">+ Add Ariation</x-button>
                    </div> -->

                    <div class="rounded-lg overflow-hidden">
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
                        <x-button class="py-4 rounded-t-none w-full">+ Add Variation</x-button>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="grid grid-cols-4 space-y-3">
                        <h3 class="text-gray-800 text-xl font-bold col-span-2">Shipping</h3>
                        <h4 class="text-gray-700 text-xl">Standalone</h4>
                        <h4 class="text-gray-700 text-xl">With Others</h4>
                    </div>

                    <div class="rounded-lg overflow-hidden">
                        <div class="grid grid-cols-4 bg-white">
                            <div class="col-span-2 flex items-center px-2 py-1 space-x-5">
                                <x-input type="text" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Name e.g. Fedex" />
                            </div>
                            <div class="flex items-center pr-6">
                                <x-input type="number" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="$ Price" />
                            </div>
                            <div class="grid grid-cols-4 items-center justify-center">
                                <x-input type="number" class="col-span-3 bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="$ Price" />
                                <div class="flex items-center justify-center pr-2 gap-1">
                                    <x-icon.trash class="w-6 h-6 text-red-300" />
                                    <x-icon.drag-move class="w-6 h-6 text-gray-500" />
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 bg-white">
                            <div class="col-span-2 flex items-center px-2 py-1">
                                <x-input type="text" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Name e.g. Fedex" />
                            </div>
                            <div class="flex items-center pr-6">
                                <x-input type="number" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="$ Price" />
                            </div>
                            <div class="grid grid-cols-4 items-center justify-center">
                                <x-input type="number" class="col-span-3 bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="$ Price" />
                                <div class="flex items-center justify-center pr-2 gap-1">
                                    <x-icon.trash class="w-6 h-6 text-red-300" />
                                    <x-icon.drag-move class="w-6 h-6 text-gray-500" />
                                </div>
                            </div>
                        </div>
                        <x-button class="py-4 rounded-t-none w-full">+ Add Shipping</x-button>
                    </div>
                </div>

                <div class="flex gap-4 mt-4">
                    <x-button.green class="w-full py-4">Publish</x-button.green>
                    <x-button class="w-full py-4">Save</x-button>
                </div>
            </form>
        </div>
    </div>
    
</div>
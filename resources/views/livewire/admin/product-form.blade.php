<div>
    <x-page-title>New Product</x-page-title>

    <div class="flex space-x-4 mt-5">
        
        <div class="w-1/3">
            <div class="grid grid-cols-4 gap-2" x-data>
                @foreach ($temporaryImages as $temporaryImage)
                <div wire:key="{{ $temporaryImage->temporaryUrl() }}" class="relative group {{ $loop->first ? 'col-span-4' : 'flex items-center justify-center max-h-20' }}">
                    <img src="{{ $temporaryImage->temporaryUrl() }}" alt="" class="{{$loop->first ? 'max-h-64' : 'h-full' }} w-full cursor-pointer object-cover object-top rounded-lg hover:scale-90 transition-all duration-200">
                    <button wire:click="removeTemporaryImage({{ $loop->index }})" class="z-10 absolute bg-gray-500 opacity-0 hover:bg-red-500 group-hover:opacity-80 rounded-full text-gray-100 p-1 top-1 right-1">
                        <x-icon.deslike class="w-4 h-4" />
                    </button>
                </div>
                @endforeach
                <button x-on:click="$refs.inputUpdaloadedFile.click()" class="flex items-center justify-center p-4 bg-opacity-60 bg-white rounded-lg hover:bg-opacity-100 cursor-pointer hover:scale-90 transition-all duration-200 h-full">
                    <x-icon.plus class="text-gray-500 w-12" />
                    <input wire:model="temporaryImages" x-ref="inputUpdaloadedFile" type="file" accept="image/png, image/jpg, image/jpeg, image/svg, image/webp" multiple class="hidden">
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
                        <x-input type="text" placeholder="Description" wire:model.defer='product.description'/>
                        <x-input-error for="product.description" />
                    </div>

                    <x-input type="text" placeholder="Categories" wire:model.defer='product.categories'/>
                    
                    <div>
                        <x-input.price wire:model.defer='product.price'/>
                        <x-input-error for="product.price" />
                    </div>
                </div>

                <div class="mt-4 mb-2">
                    @if($variations > 0)
                    <div class="grid grid-cols-4 space-y-3 items-center">
                        <h3 class="text-gray-800 text-xl font-bold col-span-2">Variations</h3>
                        <h4 class="text-gray-700 text-xl">Price</h4>
                        <h4 class="text-gray-700 text-xl">Quantity</h4>
                    </div>
                    @endisset

                    <div class="rounded-lg overflow-hidden">
                        <div x-data x-init="Sortablejs.create($el, {
                                handle: '.cursor-move',
                                animation: 150,
                                onSort(variations){
                                    Array.from(variations.to.children).map(variation => {
                                        const variationsOrder = variation.getAttribute('variation-id')
                                        console.log(variationsOrder)
                                    })
                                }
                            })
                        ">
                            @if(count($variations) <= 0)
                                <div class="grid grid-cols-4 bg-white opacity-20 pointer-events-none" x-data>
                                    <div class="col-span-2 flex items-center px-2 py-1 space-x-5">
                                        <div class="w-12 h-12 bg-gray-100 hover:bg-gray-200 cursor-pointer flex items-center rounded-lg justify-center">
                                            <button type="button" class="w-full h-full" disabled>
                                                <x-icon.camera class="w-full h-full p-2 text-gray-400" />
                                                <input type="file" accept="image/png, image/jpg, image/jpeg, image/svg, image/webp" class="hidden">
                                            </button>
                                        </div>
                                        <x-input type="text" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Name" />
                                    </div>
                                    <div class="flex items-center pr-6">
                                        <x-input type="number" class="bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="$ Price" />
                                    </div>
                                    <div class="grid grid-cols-4 items-center justify-center">
                                        <x-input type="number" class="col-span-3 bg-transparent outline-none focus:outline-none p-0 border-0 focus:ring-0" placeholder="Quantity" />
                                        <div class="flex items-center justify-center pr-2 gap-1">
                                            <x-icon.trash class="w-6 h-6 text-red-300 hover:text-red-500 transition-colors cursor-pointer" />
                                            <x-icon.drag-move class="w-6 h-6 text-gray-300 hover:text-gray-500 transition-colors cursor-move" />
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @foreach ($variations as $index => $variation)
                                <livewire:products.variation-form
                                    wire:key="variation-form-{{ $variation['id'] }}"
                                    :variation="$variation"
                                />
                            @endforeach
                        </div>
                        <x-button class="py-4 rounded-t-none w-full" type="button" wire:click='addVariation'>+ Add Variation</x-button>
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
                                    <x-icon.trash class="w-6 h-6 text-red-300 hover:text-red-500 transition-colors cursor-pointer" />
                                    <x-icon.drag-move class="w-6 h-6 text-gray-300 hover:text-gray-500 transition-colors cursor-move" />
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
                                    <x-icon.trash class="w-6 h-6 text-red-300 hover:text-red-500 transition-colors cursor-pointer" />
                                    <x-icon.drag-move class="w-6 h-6 text-gray-300 hover:text-gray-500 transition-colors cursor-move" />
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
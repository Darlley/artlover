<div wire:poll.1s>
    <button wire:click.prevent="$toggle('isOpen')" class="rounded-lg shadow-sm border py-4 px-6 flex w-full justify-between bg-white hover:bg-gray-50 hover:cursor-pointer">
        <span class="opacity-50 select-none">Input categories working</span>
        <x-icon.plus class="w-4" />
    </button>


    <div class="flex justify-center items-center absolute z-10 p-4 bg-black bg-opacity-50 w-full min-h-full top-0 left-0">
        <div class="w-max flex flex-col">
            <div class="bg-white rounded-md overflow-hidden font-bold text-gray-600 min-w-[320px]">
                <ul class="flex flex-col">
                    @foreach ($this->categories as $index => $category)
                    <li class="flex gap-2">
                        <a class="flex py-4 px-8 w-full text-cyan-500 bg-blue-100 hover:bg-blue-200 gap-8 cursor-pointer justify-between">
                            <div class="flex items-center gap-1">
                                <x-icon.check class="w-6" />
                                <livewire:categories.input-name :category="$category" :key="'category-input-'.$category->id" />
                                </div>
                                <div class="flex items-center gap-1">
                                {{-- <input type="text" wire:model="categories.{{ $index }}.name" /> --}}
                                <x-icon.trash class="text-red-500 w-5 h-5 opacity-80 hover:opacity-100 ml-auto" wire:click='removeCategory({{ $category->id }})' />
                            </div>
                        </a>
                    </li>
                    @endforeach

                    <li class="flex gap-2 hover:bg-blue-50">
                        <a class="flex py-4 px-8 w-full gap-8 cursor-pointer">
                            <span>Category false</span>
                            <x-icon.trash class="text-red-500 w-5 h-5 opacity-80 hover:opacity-100 ml-auto" />
                        </a>
                    </li>
                </ul>

                <button wire:click.prevent='addCategory' class="cursor-pointer py-4 px-8 w-full flex items-center gap-2 bg-blue-50 hover:bg-blue-100">
                    <x-icon.plus class="w-6 h-6" />
                    <span>Adicionar Categoria</span>
                </button>
            </div>
            
            <div class="flex justify-center w-full text-center mt-4 gap-2">
                <button wire:click.prevent="$toggle('isOpen')" class="p-2 w-full bg-white rounded-md text-cyan-500 font-bold opacity-90 hover:opacity-100">
                    Cancelar
                </button>
                <button wire:click.prevent="$toggle('isOpen')" class="p-2 w-full bg-cyan-500 rounded-md text-white font-bold opacity-90 hover:opacity-100">
                    Salvar
                </button>
            </div>
        </div>
    </div>

</div>

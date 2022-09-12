<div wire:poll.1s>
    <button wire:click.prevent wire:click="$toggle('isOpen')" class="rounded-lg shadow-sm border py-4 px-6 flex w-full justify-between bg-white hover:bg-gray-50 hover:cursor-pointer">
        <span class="opacity-50 select-none">Input categories working</span>
        <x-icon.plus class="w-4" />
    </button>

    <div class="flex justify-center items-center absolute z-10 p-4 bg-black bg-opacity-50 w-full h-full top-0 left-0" wire:model='isOpen'>
        <div class="w-max flex flex-col">
            <ul class="flex flex-col bg-white rounded-md overflow-hidden font-bold text-gray-600 min-w-[320px]">
                <li class="flex gap-2">
                    <button class="flex py-4 px-8 w-full text-cyan-500 bg-blue-200 gap-8">
                        <x-icon.check class="w-6" />
                        <span>Category 1</span>
                    </button>
                </li>
                <li class="flex gap-2">
                    <button class="flex py-4 px-8 w-full gap-8">
                        <span>Category 1</span>
                    </button>
                </li>
                <li class="flex gap-2">
                    <button class="flex py-4 px-8 w-full gap-8">
                        <span>Category 1</span>
                    </button>
                </li>
                <li class="flex gap-2">
                    <button class="flex py-4 px-8 w-full gap-8">
                        <span>Category 1</span>
                    </button>
                </li>
                <li class="flex gap-2">
                    <button class="flex py-4 px-8 w-full text-cyan-500 bg-blue-200 gap-8">
                        <x-icon.check class="w-6" />
                        <span>Category 1</span>
                    </button>
                </li>
                <li class="flex gap-2">
                    <button class="flex py-4 px-8 w-full gap-8">
                        <span>Category 1</span>
                    </button>
                </li>

            </ul>
            
            <div class="flex justify-center w-full text-center mt-4 gap-2">
                <button wire:prevent wire:click="$toggle('isOpen')" class="p-2 w-full bg-white rounded-md text-cyan-500 font-bold opacity-90 hover:opacity-100">
                    Cancelar
                </button>
                <button class="p-2 w-full bg-cyan-500 rounded-md text-white font-bold opacity-90 hover:opacity-100">
                    Salvar
                </button>
            </div>
        </div>
    </div>

</div>

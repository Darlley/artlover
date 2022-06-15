<div>
    <div class="flex justify-between">
    
        <div class="space-y-4">
            <h1 class="font-bold text-3xl text-gray-800">Products ({{ $this->products->total() }})</h1>
            
            <div class="flex items-center space-x-4">
                <x-filter-item wire:click="$set('filter','')" :is_active="!$filter">All</x-filter-item>
                <x-filter-item wire:click="$set('filter','draft')" :is_active="$filter === 'draft'">Draft</x-filter-item>
                <x-filter-item wire:click="$set('filter','published')" :is_active="$filter === 'published'">Published</x-filter-item>
                <x-input.search placeholder="Search..." wire:model.debounce.500ms='search' :isActive="!!$search" />
            </div>
        </div>

        <button>New product</button>
    
    </div>
    
    <div class="grid grid-cols-3 grid-flow-w gap-5 my-6">
    
        @foreach ($this->products as $product)
            <x-products.card :product="$product" />
        @endforeach
    
    </div>

    {{ $this->products->links() }}

</div>
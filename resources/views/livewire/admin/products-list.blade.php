<div>
    <div class="flex justify-between">
    
        <div class="flex gap-4 items-center">
            <h1 class="font-bold text-3xl text-gray-800">Products ({{ $this->products->total() }})</h1>
            <x-input.search placeholder="Search..." wire:model.debounce.500ms='search' />
        </div>
    
        <div class="flex gap-2 text-gray-400 font-bold items-center">
            <x-filter-item wire:click="$set('filter','')" :is_active="!$filter">All</x-filter-item>
            <x-filter-item wire:click="$set('filter','draft')" :is_active="$filter === 'draft'">Draft</x-filter-item>
            <x-filter-item wire:click="$set('filter','published')" :is_active="$filter === 'published'">Published</x-filter-item>
        </div>
    
    </div>
    
    <div class="grid grid-cols-3 grid-flow-w gap-5 my-6">
    
        @foreach ($this->products as $product)
            <x-products.card :product="$product" />
        @endforeach
    
        {{ $this->products->links() }}
    </div>
</div>
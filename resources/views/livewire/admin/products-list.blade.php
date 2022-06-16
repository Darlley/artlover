<div>
    <div class="flex justify-between">

        <div class="space-y-4">
            <x-page-title>Products ({{ $this->products->total() }})</x-page-title>

            <div class="flex items-center space-x-4">
                <x-filter-item wire:click="$set('filter','')" :is_active="!$filter">All</x-filter-item>
                <x-filter-item wire:click="$set('filter','draft')" :is_active="$filter === 'draft'">Draft</x-filter-item>
                <x-filter-item wire:click="$set('filter','published')" :is_active="$filter === 'published'">Published</x-filter-item>
                <x-input.search placeholder="Search..." wire:model.debounce.500ms='search' :isActive="!!$search" />
            </div>
        </div>

        <x-button class="w-max h-max rounded-lg p-2" wire:click="createProduct">New product</x-button>

    </div>

    <div class="grid grid-cols-3 grid-flow-w gap-5 my-6">

        @foreach ($this->products as $product)
            <x-products.card :product="$product" />
        @endforeach

    </div>

    {{ $this->products->links() }}

</div>

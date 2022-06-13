<div class="flex justify-between">

    <div class="flex gap-4 items-center">
        <h1 class="font-bold text-3xl text-gray-800">Products</h1>
        <x-input.search placeholder="Search..." />
    </div>

    <div class="flex gap-2 text-gray-400 font-bold items-center">
        <a href="#all" class="text-gray-800 border-b-2 border-gray-800">All</a>
        <a href="#draft" class="hover:text-gray-600 border-b-2 border-transparent hover:border-gray-800">Draft</a>
        <a href="#published" class="hover:text-gray-600 border-b-2 border-transparent hover:border-gray-800">Published</a>
    </div>

</div>

<div class="grid grid-cols-3 grid-flow-w gap-5 my-6">

    @foreach ($this->products as $product)    
        <x-products.card :product="$product" />
    @endforeach

    {{ $this->products->links() }}
</div>
<div class="space-y-4 rounded-2xl bg-white shadow-md p-5 text-gray-500 opacity-80 hover:opacity-100 transition-all duration-200">
    <a href="{{ route('admin.products.edit', $product->id) }}">
        <div class="flex justify-between items-center">
            <h3 class="font-bold text-gray-700 truncate">{{ $product->name }}</h3>
            <span class="writespace-nowrap">${{ $product->price / 100 }}</span>
        </div>

        <div class="rounded-lg overflow-hidden h-48 flex">
            <img src="{{ asset('img/growp-thumb.png') }}" alt="Leadszapp product" class="object-cover">
        </div>

        <div>
            <p class="text-sm line-clamp-4">{{ $product->description }}</p>
        </div>
    </a>
</div>
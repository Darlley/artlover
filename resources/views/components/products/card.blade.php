<div class="space-y-4 rounded-2xl bg-white shadow-md p-5 text-gray-500 opacity-80 hover:opacity-100 transition-all duration-200">
    <div class="flex justify-between items-center">
        <h3 class="font-bold text-gray-700">{{ $product->name }}</h3>
        <span class="writespace-nowrap">${{ $product->price / 100 }}</span>
    </div>

    <div class="rounded-lg overflow-hidden">
        <img src="{{ asset('img/growp-thumb.png') }}" alt="Leadszapp product">
    </div>

    <div>
        <p class="text-sm">{{ $product->description }}</p>
    </div>
</div>
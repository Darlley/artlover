<div class="space-y-4 rounded-2xl bg-white shadow-md p-5 text-gray-500 opacity-60 hover:opacity-100 transition-all duration-200">
    <div class="flex justify-between items-center">
        <h3 class="font-bold text-gray-700">Apple Watch</h3>
        <span class="">$ 45</span>
    </div>

    <div class="rounded-lg overflow-hidden">
        <img src="{{ asset('img/leadszapp.jpg') }}" alt="Leadszapp product">
    </div>

    <div>
        <p class="text-sm">{{ $slot }}</p>
    </div>
</div>
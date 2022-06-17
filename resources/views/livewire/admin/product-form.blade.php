<div>
    <x-page-title>New Product</x-page-title>
    
    <div class="flex space-x-4 mt-5">
        <div class="w-1/3">
            <div class="mb-4">
                <img src="{{ asset('img/growp-thumb.png') }}" alt="" class="object-cover rounded-lg">
            </div>

            <div class="grid grid-cols-4 gap-2">
                <img src="{{ asset('img/muckup.jpg') }}" alt="" class="cursor-pointer h-full object-cover rounded-lg hover:scale-90 transition-all duration-200">
                <img src="{{ asset('img/growp-thumb.png') }}" alt="" class="cursor-pointer h-full object-cover rounded-lg hover:scale-90 transition-all duration-200">
                <img src="{{ asset('img/muckup.jpg') }}" alt="" class="cursor-pointer h-full object-cover  rounded-lg hover:scale-90 transition-all duration-200">
                <button class="flex items-center justify-center p-4 bg-opacity-60 bg-white rounded-lg hover:bg-opacity-100 cursor-pointer hover:scale-90 transition-all duration-200">
                    <x-icon.plus class="text-gray-500" />
                </button>
            </div>
        </div>
        <div class="w-2/3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vitae libero illo eaque vero aliquam. Vel laborum, ex veritatis eos iusto vitae doloremque labore soluta, odio tempora facere excepturi? Obcaecati.</p>
        </div>
    </div>
</div>

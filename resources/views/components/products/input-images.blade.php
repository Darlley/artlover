@props([
    'medias','temporaryImages'
])

@php
    $hasMedia = $medias?->isNotEmpty();
@endphp

<div class="grid grid-cols-4 gap-2" x-data>
    @if(!$hasMedia && empty($temporaryImages))
        <div class="col-span-4">
            <img src="https://via.placeholder.com/1024x600/CBD5E1/94A3BB?text=No+Image" alt="" class="w-full cursor-pointer object-cover object-top rounded-lg hover:scale-90 transition-all duration-200">
        </div>
    @else

        @foreach ($medias as $media)
        <div wire:key="{{ $media->getFullUrl() }}" class="relative group {{ $loop->first && !$hasMedia ? 'col-span-4' : 'flex items-center justify-center max-h-20' }}">
            <img src="{{ $media->getFullUrl() }}" alt="" class="{{$loop->first && !$hasMedia ? 'max-h-64' : 'h-full' }} w-full cursor-pointer object-cover object-top rounded-lg hover:scale-90 transition-all duration-200">
            <button wire:click="removeTemporaryImage({{ $loop->index }})" class="z-10 absolute bg-gray-500 opacity-0 hover:bg-red-500 group-hover:opacity-80 rounded-full text-gray-100 p-1 top-1 right-1">
                <x-icon.deslike class="w-4 h-4" />
            </button>
        </div>
        @endforeach

        @foreach ($temporaryImages as $temporaryImage)
        <div wire:key="{{ $temporaryImage->temporaryUrl() }}" class="relative group {{ $loop->first ? 'col-span-4' : 'flex items-center justify-center max-h-20' }}">
            <img src="{{ $temporaryImage->temporaryUrl() }}" alt="" class="{{$loop->first ? 'max-h-64' : 'h-full' }} w-full cursor-pointer object-cover object-top rounded-lg hover:scale-90 transition-all duration-200">
            <button wire:click="removeTemporaryImage({{ $loop->index }})" class="z-10 absolute bg-gray-500 opacity-0 hover:bg-red-500 group-hover:opacity-80 rounded-full text-gray-100 p-1 top-1 right-1">
                <x-icon.deslike class="w-4 h-4" />
            </button>
        </div>
        @endforeach

    @endif
    <button x-on:click="$refs.inputUpdaloadedFile.click()" class="flex items-center justify-center p-4 bg-opacity-60 bg-white rounded-lg hover:bg-opacity-100 cursor-pointer hover:scale-90 transition-all duration-200 h-full">
        <x-icon.plus class="text-gray-500 w-12" />
        <input wire:model="temporaryImages" x-ref="inputUpdaloadedFile" type="file" accept="image/png, image/jpg, image/jpeg, image/svg, image/webp" multiple class="hidden">
    </button>
</div>
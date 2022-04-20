<div class="flex items-center justify-between w-full cursor-pointe" x-data="{ toggle: false }">

    {{ $slot }}

    <div class="relative w-11 h-6 rounded-full border-2 transition-all duration-200" x-on:click="toggle = !toggle" :class=" toggle ? 'bg-indigo-500 border-indigo-500' : 'bg-black border-black' " >
        <div class="cursor-pointer bg-white rounded-full w-5 h-5 transform transition-all duration-200" :class=" toggle ? 'scale-100 translate-x-5' : 'translate-x-0 scale-90' "></div>
    </div>
</div>
<div 
    x-data="{
        integerValue: 1000,
    }"
>
    <input 
        {{ $attributes->except(["wire:model"]) }} 
        type="text" 
        id="price" 
        x-model="integerValue"
        x-ref="input"
        inputmode="numeric" 
        class="w-full placeholder-gray-400 border-0 outline-none ring-0 focus:ring-0 focus:outline-none bg-transparent p-0"
    >

    <div>
        Integer: <span x-text="integerValue"></span>
    </div>
</div>
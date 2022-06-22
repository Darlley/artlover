<div 
    x-data="{
        integerValue: 1000,
        maskedValue: null,
        prefix: '$',
        mounted(){
            this.maskedValue = currency(this.integerValue, {
                fromCents: true,
                symbol: '$ '
            })
        }
    }"
    x-init="mounted()"
>
    <input 
        {{ $attributes->except(["wire:model"]) }} 
        type="text" 
        id="price" 
        x-model="integerValue"
        x-ref="input"
        @input="mounted()"
        inputmode="numeric" 
        class="w-full placeholder-gray-400 border-0 outline-none ring-0 focus:ring-0 focus:outline-none bg-transparent p-0"
    >

    <div>
        Integer: <span x-text="maskedValue"></span>
    </div>
</div>
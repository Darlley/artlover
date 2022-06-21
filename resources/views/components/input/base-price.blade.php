<div 
    x-data="{
        name: 'Darlley',
        handleClick(){ 
            console.log(this.$refs.input)
        }
    }" 
    x-init="console.log('this.$refs.input')"
>
    <input {{ $attributes->except(["wire:model"]) }} type="text" id="price" x-ref="input" inputmode="numeric" class="w-full placeholder-gray-400 border-0 outline-none ring-0 focus:ring-0 focus:outline-none bg-transparent p-0" @click="handleClick">

    <span x-text="name"></span>
</div>
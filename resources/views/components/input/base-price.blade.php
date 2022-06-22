<div x-data="basePrice()" x-init="mounted()">
    <input {{ $attributes->except(['wire:model']) }} type="text" id="price" x-model="maskedValue" x-ref="input"
        inputmode="numeric" @input="handleChange"
        class="w-full placeholder-gray-400 border-0 outline-none ring-0 focus:ring-0 focus:outline-none bg-transparent p-0">

    <div>
        Integer: <span x-text="integerValue"></span>
    </div>
</div>


<script>
    function basePrice() {
        return {
            integerValue: null,
            maskedValue: null,
            prefix: '$ ',
            mounted() {
                this.maskedValue = this.mask(this.integerValue)
            },
            mask(value) {
                if (value === null) return null;
                return currency(value, {
                    fromCents: true,
                    symbol: this.prefix
                }).format()
            },
            handleChange({target: input}) {
                const integerValue = input.value.replaceAll(/\D/g, '')
                this.integerValue = integerValue
                this.maskedValue = this.mask(this.integerValue)
            
                // this.getCursorPosition(input)
            },
            // getCursorPosition(input){
            //     const previusPosition = input.selectionStart
            //     this.$nextTick(() => {
            //         input.selectionEnd = previusPosition
            //         input.selectionStart = input.selectionEnd
            //     })
            // }
        }
    }
</script>

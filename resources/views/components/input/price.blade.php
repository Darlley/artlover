<div 
    x-data="{
        focused: false,
    }"
    class="bg-white rounded-lg border"
    @focused="focused = true"
    @blured="focused = false"
    x-bind:class="focused ? 'ring border-primary-500 ring-primary-500 ring-opacity-20' : ''"
>
    <x-input.base-price padding="py-4 px-6" {{ $attributes }} />
</div>
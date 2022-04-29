<nav class="w-full">
    <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12 p-4 max-w-7xl mx-auto">
        <img src="{{ asset("img/growp.png") }}" alt="Logo Growp" class="h-12">
        
        <div class="flex items-center gap-4">
            <x-admin.nav-item icon="shopping-bag" :isActive="true" href="{{ route('products') }}">Products</x-admin.nav-item>
            <x-admin.nav-item icon="document-search">About</x-admin.nav-item>
            <x-admin.nav-item icon="mail">Contact</x-admin.nav-item>
        </div>
    </div>
</nav>
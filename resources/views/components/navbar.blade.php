<nav class=" flex  bg-neutral ring-1 ring-gray-200 border-b border-neutral px-5 py-5">
    <div class="container mx-auto flex justify-between items-center">
        <div class="font-bold text-xl text-primary">
            <a href="/">{{ config('app.name', 'Laravel') }}</a>
        </div>
    </div>
     <div class="flex  gap-6">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/product" :active="request()->is('product')">Product</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
</nav>
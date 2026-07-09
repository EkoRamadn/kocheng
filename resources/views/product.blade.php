<x-layout>
   <div class=" flex flex-col gap-5">
     <section class="flex h-full flex-row w-full justify-between items-center">
        <div>
            <h1>Product Catalogue</h1>
            <p>Explore out pawduct you might like!</p>
        </div>
        <div>
            <button class="categories">Categories</button>
            <div class="categories-option absolute flex ring-1 p-2 rounded mt-2 flex-col" hidden>
                <label>
                    <input type="checkbox">
                    Cat 1
                </label>
                <label>
                    <input type="checkbox">
                    Cat 1
                </label>
                <label>
                    <input type="checkbox">
                    Cat 1
                </label>
                <label>
                    <input type="checkbox">
                    Cat 1
                </label>
            </div>
        </div>
    </section>

    <section>
        <h1>This is catalagour</h1>
    </section>
   </div>

   <x-slot:scripts>
   <script src="{{ asset('js/product.js') }}"></script>
   </x-slot>
</x-layout>
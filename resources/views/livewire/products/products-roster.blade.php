
<div class=" ">
        @forelse ($products as $product)
            <x-product-roster :data="$product" />
        @empty
            <h1>Услуг нет</h1>
        @endforelse
    </div>

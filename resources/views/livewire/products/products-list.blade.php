<div class=" ">
    @forelse ($products as $product)
    <x-product-card :data="$product" />
    @empty
    <p>Услуг нет</p>
    @endforelse
</div>

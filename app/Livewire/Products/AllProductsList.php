<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class AllProductsList extends Component
{
    public function render()
    {
        // Получаем все продукты
        $products = Product::all();

        return view('livewire.products.all-products-list', [
            'products' => $products,
        ]);
    }
}

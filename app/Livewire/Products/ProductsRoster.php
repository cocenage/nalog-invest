<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProductsRoster extends Component
{
    public function render()
    {
        // Получаем все продукты
        $products = Product::all();

        return view('livewire.products.products-roster', [
            'products' => $products,
        ]);
    }
}

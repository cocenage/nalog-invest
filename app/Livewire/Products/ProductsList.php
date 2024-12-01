<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProductsList extends Component
{
    public $limit = 3; // Установите желаемое количество карточек
    #[Computed()]
    public function products()
    {
        return Product::where('is_active', 1)
            ->get();
    }

    public function render()
    {
        $products = Product::limit($this->limit)->get();

        return view('livewire.products.products-list', [
            'products' => $products,
        ]);
    }
}

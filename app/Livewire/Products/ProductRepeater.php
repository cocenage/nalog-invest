<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductRepeater extends Component
{
    public $product; // Изменили на один продукт

    public function mount(Product $product) // Теперь получаем продукт через зависимость
    {
        $this->product = $product;
    }

    public function render()
    {
        $specifics = $this->product->specifics ?? [];

        return view('livewire.products.product-repeater', ['specifics' => $specifics]);
    }
}

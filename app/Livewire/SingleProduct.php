<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class SingleProduct extends Component
{
    public $slug;
    public $product;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->product = Product::where('slug', $this->slug)->first();

        // Проверка на наличие продукта
        if (!$this->product) {
            abort(404);
        }
    }
    public function render()
    {
        return view('livewire.single-product');
    }
}

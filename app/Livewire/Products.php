<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

#[Layout('layouts.app')]
class Products extends Component
{
    public $products = [];

    public function mount()
    {
        $this->products = Products::all();
    }

    public function render()
    {
        dd($this->products);
        return view('products');
    }
}

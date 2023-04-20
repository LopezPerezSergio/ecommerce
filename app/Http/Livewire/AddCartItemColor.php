<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItemColor extends Component
{
    public $product;
    public $color_id = "";
    public $colors;

    public $quantity = 1;
    public $stock = 0;

    public function mount()
    {
        $this->colors = $this->product->colors;
    }
    
    public function render()
    {
        return view('livewire.add-cart-item-color');
    }

    public function updatedColorId($value)
    {
        $this->stock = $this->product->colors->find($value)->pivot->quantity;
    }

    public function decrement()
    {
        $this->quantity --;
        if ($this->quantity < 1) {
            $this->quantity = 1;
        }
    }

    public function increment()
    {
        $this->quantity ++;
        if ($this->quantity > $this->stock) {
            $this->quantity = $this->stock;
        }
    }
}

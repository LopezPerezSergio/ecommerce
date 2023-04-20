<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItem extends Component
{
    public $product;
    public $quantity = 1;
    public $stock;

    public function mount()
    {
        $this->stock = $this->product->quantity;
    }
    
    public function render()
    {
        return view('livewire.add-cart-item');
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
